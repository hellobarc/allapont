@extends('footer')

@extends('header')

@section('title')
Alappont | Threejs
@endsection


@section('content')

<!DOCTYPE html>


<style>
#info {
	position: absolute;
	text-align: center;
}

#mainCanvas{
   
}

h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  letter-spacing: 15px;
  font-size: 5vmin;
  font-family: "Montserrat";
  text-transform: uppercase;
  color: white;
  // text-shadow: 0 0 5px #DD69F9, 0 0 10px #DD69F9, 0 0 10px #DD69F9, 0 0 70px #DD69F9;
  opacity: 0.9;
}


</style>


<script type="module">
    // Find the latest version by visiting https://cdn.skypack.dev/three.
    import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.136.0-4Px7Kx1INqCFBN0tXUQc/mode=imports,min/optimized/three.js';
    import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.122/examples/jsm/controls/OrbitControls.js';



    var renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setClearColor("#000000");
    


    mainCanvas.appendChild(renderer.domElement);

    var camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(0, 0, 75);

    var controls = new OrbitControls(camera, renderer.domElement);
    controls.target = new THREE.Vector3(0, 0, 20);
    controls.update();

    var scene = new THREE.Scene();
    scene.background = new THREE.Color( 0x18191a );

   

    var globalMaterial = new THREE.SpriteMaterial({
        map: new THREE.CanvasTexture(generateSprite()),
        blending: THREE.AdditiveBlending
    });


    let particles = [];
    let numOfParticles = 20000;

    let sigma = 10;
    let rho = 22;
    let beta = 8 / 3;


    let dt = 0.0085;

    for (var i = 0; i < numOfParticles; i++) {

        let material = new THREE.Sprite(globalMaterial);

        let x, y, z;
        if (i == 0) {
            x = y = z = 0.1;
        } else {
            x = particles[i - 1].material.position.x;
            y = particles[i - 1].material.position.y;
            z = particles[i - 1].material.position.z;

            let dx = sigma * (y - x)
            let dy = x * (rho - z) - y;
            let dz = x * y - beta * z;

            x += (dx * dt);
            y += (dy * dt);
            z += (dz * dt);
        }
        
        let particle = new Particle(material, x, y, z);
        particle.material.scale.x = .3;
        particle.material.scale.y = .3;
        particle.material.scale.z = .3;

        scene.add(particle.material);
        particles.push(particle);
    }

    dt = .0005;
    function render() {
        renderer.render(scene, camera);
        
        renderer.autoClearColor = false;
        for (var i = 0; i < numOfParticles; i++) {
            let x = particles[i].material.position.x;
            let y = particles[i].material.position.y;
            let z = particles[i].material.position.z;

            let dx = sigma * (y - x)
            let dy = x * (rho - z) - y;
            let dz = x * y - beta * z;

            x += (dx * dt);
            y += (dy * dt);
            z += (dz * dt);

            particles[i].material.position.x = x;
            particles[i].material.position.y = y;
            particles[i].material.position.z = z;
            
        }
        
        controls.update();
        requestAnimationFrame(render);
    }
    
    render();


    // Functions to generate particle and particle sprite

    function Particle(material, x, y, z) {
        this.material = material;
        this.material.position.x = x;
        this.material.position.y = y;
        this.material.position.z = z;
    }

    function generateSprite() {
        var canvas = document.createElement('canvas');
        canvas.width = 12;
        canvas.height = 12;

        var context = canvas.getContext('2d');
        var gradient = context.createRadialGradient(canvas.width / 2, canvas.height / 2, 0, canvas.width / 2, canvas.height / 2, canvas.width / 2);
        gradient.addColorStop(0, 'rgba(101,165,230,1)');
        gradient.addColorStop(0.2, 'rgba(101,165,230,1)');
        gradient.addColorStop(0.4, 'rgba(101,165,230,1)');
        gradient.addColorStop(1, 'rgba(101,165,230,1)');

        context.fillStyle = gradient;
        context.fillRect(0, 0, canvas.width, canvas.height);

        //renderer.setClearColor( 0x18191a, 0);
        //scene.background = new THREE.Color( 0x18191a );
        return canvas;
    }


    
</script>


<div>
<div id="info" >
</div>


<div id="mainCanvas"   style="height: 500px;" >

</div>



</div>





@endsection


