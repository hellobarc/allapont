@extends('footer')

@extends('header')

@section('title')
Alappont | Investigación y Desarrollo
@endsection

@section('content')

    <!---Para el escribidor-->
    <script>
        //Esto es para la función shuffle que ordena aleatoriamente las palabras que se escriben
        function shuffle(array) {
        var currentIndex = array.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = array[currentIndex];
            array[currentIndex] = array[randomIndex];
            array[randomIndex] = temporaryValue;
        }

        return array;
        }    
        ///end función shuffle que ordena aleatoriamente las palabras que se escriben

        class TypeWriter {
        constructor(txtElement, words, wait = 1000) {
            this.txtElement = txtElement;
            this.words = shuffle(words);
            this.txt = '';
            this.wordIndex = 0;
            this.wait = parseInt(wait, 10);
            this.type();
            this.isDeleting = false;
        }

        type() {
            // Current index of word
            const current = this.wordIndex % this.words.length;
            // Get full text of current word
            const fullTxt = this.words[current];

            // Check if deleting
            if(this.isDeleting) {
            // Remove char
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            // Add char
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            // Insert txt into element
            this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

            // Initial Type Speed
            let typeSpeed = 150;

            if(this.isDeleting) {
            typeSpeed /= 2;
            }

            // If word is complete
            if(!this.isDeleting && this.txt === fullTxt) {
            // Make pause at end
            typeSpeed = this.wait;
            // Set delete to true
            this.isDeleting = true;
            } else if(this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            // Move to next word
            this.wordIndex++;
            // Pause before start typing
            typeSpeed = 300;
            }

            setTimeout(() => this.type(), typeSpeed);
        }
        }


        // Init On DOM Load
        document.addEventListener('DOMContentLoaded', init);

        // Init App
        function init() {
        const txtElement = document.querySelector('.txt-type');
        const words = JSON.parse(txtElement.getAttribute('data-words'));
        const wait = txtElement.getAttribute('data-wait');
        // Init TypeWriter
        new TypeWriter(txtElement, words, wait);
        }
    </script>

    <script type="module">
        "use strict";
        // Find the latest version by visiting https://cdn.skypack.dev/three.
        import * as THREE from 'https://cdn.skypack.dev/pin/three@v0.136.0-4Px7Kx1INqCFBN0tXUQc/mode=imports,min/optimized/three.js';
        import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.122/examples/jsm/controls/OrbitControls.js';



        var renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
       
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setClearColor("#000000");
        


        mainCanvas.appendChild(renderer.domElement);

        var camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 1000);
        camera.position.set(0, 0, 70);

        var controls = new OrbitControls(camera, renderer.domElement);
        controls.enableZoom = false;/*Para el zoom del mouse*/
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
            gradient.addColorStop(0, 'rgba(12, 25, 38, 1)');
            gradient.addColorStop(0.2, 'rgba(12, 25, 38, 1)');
            gradient.addColorStop(0.4, 'rgba(12, 25, 38, 1)');
            gradient.addColorStop(1, 'rgba(12, 25, 38, 1)');

            context.fillStyle = gradient;
            context.fillRect(0, 0, canvas.width, canvas.height);

            //renderer.setClearColor( 0x18191a, 0);
            //scene.background = new THREE.Color( 0x18191a );
            return canvas;
        }

        renderer.setSize( window.innerWidth , 350 );


        
    </script>

    
    <style>
        canvas{ outline: none;  position: absolute;}

        .texto_titulos{
            text-shadow: 1px 0 0 #3E4042, 
            -2px 0 0 #3E4042, 
            0 2px 0 #3E4042, 
            0 -2px 0 #3E4042, 
            1px 1px #3E4042, 
            -1px -1px 0 #3E4042, 
            1px -1px 0 #3E4042, 
            -1px 1px 0 #3E4042;
        }
        
    </style>
    <div>
    
    <span id="mainCanvas"   style=" " >
    </span>

    <!---Para el escribidor-->
    <div class="" style="width: 100%; display: table;  height: 230px;   ">

        <div class="uk-text-center " style="display: table-cell; vertical-align: middle;  ">
            <h1 style="display: none;">Alappont | Centro de Investigación Científica</h1>
            
            <!---<img src="{{asset('img/alappont.svg')}}" class="banner-img">-->

            <h2 class="banner-text" style="margin-top: 0px !important; position: relative;">&lt<span class=" txt-type" data-wait="3000" data-words='["investigación", "software", "hardware"]'></span>/&gt</h2>
            
            @if(!Auth::check())
                <a style=" position: relative;" href="{{ url('login')}}" class="uk-text-bold text-btn" ><button class="uk-button uk-button-primary  landing-btn uk-margin uk-margin-right uk-margin-left" >Iniciar Sesión</button></a>

                <a  style=" position: relative;" href="{{ url('register')}}" class="uk-text-bold text-btn" ><button class="uk-button  uk-button-primary landing-btn  uk-margin-right uk-margin-left" >Registrarme</button></a>
            @endif

        </div>
    </div>
    </div>





    <h2 class="uk-text-center uk-padding-small uk-padding-remove-bottom edTit texto_titulos" style="position: relative;">Asesoría en investigación científica</h2>

    <div class="uk-container">
        <br>

<!----->

        <div uk-slider="autoplay: true,  autoplay-interval: 10 , pause-on-hover: true">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"  >

                <ul class="uk-slider-items uk-child-width-1-3@s uk-grid " id="asesorias" >
                    @forelse ($inveservis as $inveservi )
                        
                        <li class="">
                            <div style="height: 100%; " class="ap-border-solid uk-card uk-card-default  bg-blanco manoAzul  "  onclick="window.location.href = '{{ url('servicios/investigacion/'.$inveservi->url)}}';">
                                <div class="uk-card-media-top">
                                    <div class=" " tabindex="0">
                                        <img  class="uk-transition-scale-up uk-transition-opaque radimg " src="{{asset('img/servicios').'/'.$inveservi->imagen_in}}" alt="">
                                    </div>
                                </div>
                                <div class="ap-border-top-solid uk-card-body uk-text-center " >
                                    <div class="uk-margin-bottom">
                                        <a class="uk-button uk-button-text " style="font-size: 1.3rem;">{{$inveservi->titulo}} </a>
                                    </div>
                                </div>
                            </div>

                            


                        </li>
                        
                    @empty
                        <div class="uk-text-center">
                            <p>Aún no se ha creado ningún Servicio de Investigación</p>
                        </div>
                    @endforelse
                </ul>

                <a class="uk-position-center-left uk-position-small carrousel-arrow" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small carrousel-arrow" href="#" uk-slidenav-next uk-slider-item="next"></a>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>

<!----->

        <div >
            <button onclick="window.location.href = '{{ url('asesoria/investigacion')}}';" class="uk-align-center uk-margin-small-top uk-button uk-button-default uk-button-large radcard">Descubre más</button>
        </div>     
    </div>
    



    <div class=" uk-section-default uk-text-center" style="">
        <h2 class="uk-text-center uk-padding-small uk-padding-remove-bottom edTit tecEd-up texto_titulos" >Tecnologías para la educación</h2>
        <div class="tecEd" uk-grid  style="align-items: center; background: #1A1A1A; border-radius:10px;">
            
            <div class="uk-width-1-2@l edTex-div">
                <img class="edImg uk-margin-bottom" src="{{asset('img/welcome/ed3.svg')}}" alt="" >
            </div>

            <div class="uk-width-1-2@l uk-text-center edTex-div" style="padding:40px;">
                <div>
                    <h2 class="uk-text-center uk-padding-small uk-padding-remove-bottom edTit tecEd-down">Tecnologías para la educación</h2>
                    <p class="edTex uk-text-left">✔️ Somos especialistas en el desarrollo de tecnologías para la educación.  </p>
                    <p class="edTex uk-text-left">✔️ Contamos una moderna aula virtual en la cual impartimos cursos de todas las diciplinas.</p>
                    <p class="edTex uk-text-left">✔️ Brindamos asesorías a empresas que deseen implementar servicios de capacitación basados en tecnología.</p>
                    <p class="edTex uk-text-center">Visita nuestra aula virtual:</p>
                    <div class="al-margin-button-20">
                        <div onclick="window.location.href = '{{ url('cursos')}}';" class="uk-text-bold  button-3 btn-aula">
                            Ir al aula <span style="font-size: 20px;">🎓</span>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=" uk-section-default uk-text-center">
        <h2 class="uk-text-center uk-padding-small uk-padding-remove-bottom edTit tecEd-up texto_titulos" >Tecnologías para la educación</h2>
        <div class="tecEd" uk-grid  style="align-items: center;">
            
            <div class="uk-width-1-2@l edTex-div">

                <h2 class="edTit texto_titulos" >Herramientas</h2>
                <p class="edTex ">
                    Ponemos a tú disposición una serie de herramientas prácticas que te pueden ayudar en tu  investigación.
                </p>

                <div>
                    <button onclick="window.location.href = '{{ url('muestra')}}';" class="uk-button uk-button-default uk-button-large radcard">
                        <i class="fa fa-superscript" aria-hidden="true"></i> Calculadora de muestra
                    </button>
                </div>

                <br/>

                <div>
                    <button onclick="window.location.href = '{{ url('repositorio')}}';" class="uk-button uk-button-default uk-button-large radcard">
                        <i class="fa fa-table" aria-hidden="true"></i> Repositorios de investigación
                    </button>
                </div>

                <br/>
                
            </div>

            <div class="uk-width-1-2@l uk-text-center edTex-div">
                <div>
                    
                    <img style="width: 70%;" class="edImg uk-margin-bottom" src="{{asset('img/welcome/herramientas.svg')}}" alt="" >
                </div>
            </div>
        </div>

    </div>



    <!--Para ajustar el carrusel RESPONSIVE  -->
    <script>
        function myFunction(x) {
        if (x.matches) { // If media query matches
                document.getElementById("asesorias").classList.remove('uk-child-width-1-3@s');
                document.getElementById("asesorias").classList.add('uk-child-width-1-2@s');
            }
        }
        var x = window.matchMedia("(max-width: 1045px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes 
    </script>

    <!---->
    <script>
        function myFunction(x) {
        if (x.matches) { // If media query matches
                document.getElementById("asesorias").classList.remove('uk-child-width-1-2@s');
                document.getElementById("asesorias").classList.add('uk-child-width-1-3@s');
            }
        }
        var x = window.matchMedia("(min-width: 1045px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes 
    </script>
@endsection

