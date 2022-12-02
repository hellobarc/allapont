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
</style>


<script type="module">
    // Find the latest version by visiting https://cdn.skypack.dev/three.
    import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.136.0-4Px7Kx1INqCFBN0tXUQc/mode=imports,min/optimized/three.js';
    /*
    //1. Crear un scene
    const scene = new THREE.Scene();

    //2. Crear un camera
    const camera = new THREE.PerspectiveCamera(75, innerWidth / innerHeight , 0.1, 1000);

    //3. Crear un renderer
    const renderer = new THREE.WebGLRenderer({
        canvas: document.getElementById('mainCanvas'),
        alpha: true
    });

    console.log(scene);
    
    console.log(camera);

    console.log(renderer);

    //renderer.setSize(innerWidth, innerHeight );

    //document.body.appendChild(renderer.domElement);

    const boxGeometry = new THREE.BoxGeometry(1, 1, 1);

    const material = new THREE.MeshBasicMaterial({color: 0xfff});

    const mesh = new THREE.Mesh(boxGeometry, material);

    console.log(boxGeometry);

    console.log(material);

    scene.add(mesh);

    renderer.render(scene, camera);

    camera.position.z = 5;
    */

    //Cargar


    import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.122/examples/jsm/controls/OrbitControls.js';

    //Esto carga las texturas
    const textureLoader = new THREE.TextureLoader();
    const normalTexture = textureLoader.load('./img/NormalMap.png');
    console.log(normalTexture);

    //Carga la escena
    const scene = new THREE.Scene();
    

    //Carga la camara 
    const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
    camera.position.z = 5;

    //Renderer {antialias: true} no se que hace se puede borrar y funciona
    const renderer = new THREE.WebGLRenderer();
    renderer.setSize( window.innerWidth, window.innerHeight );
    mainCanvas.appendChild( renderer.domElement );

    const controls = new OrbitControls(camera, renderer.domElement);

    const geometry = new THREE.BoxGeometry(2,2,2);

    
    //const material = new THREE.MeshBasicMaterial( { color: 0xffffff } );
    
    const material = new THREE.MeshStandardMaterial()
    material.metalness = .2;
    material.roughness = .2;
    material.normalMap = normalTexture;

    ///

    const cube = new THREE.Mesh( geometry, material );
    scene.add( cube );

    
    
    
    // Lights
    const pointLight = new THREE.PointLight(0xFFC300, .6)
    pointLight.position.x = 1
    pointLight.position.y = 1
    pointLight.position.z = 4
    scene.add(pointLight)


    function move(speed) {
        var d = mesh.position.x - mesh2.position.x;
        if (mesh.position.x > mesh2.position.x) {
            mesh.position.x -= Math.min( speed, d );
        }
    }

    function animate() {
        requestAnimationFrame( animate );

        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;

        renderer.render( scene, camera );
    };

    animate();
</script>


<div>
<div id="info" >
</div>

<div id="mainCanvas">
</div>



</div>





@endsection


