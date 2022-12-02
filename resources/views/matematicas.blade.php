

@extends('footer')




@extends('header')


@section('title')
Alappont | Matemáticas
@endsection


@section('content')

<div class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
<article class="uk-article">
	
    <h1 class="uk-article-title"><a class="uk-link-reset" href="">Capitulo 4: Integrales </a></h1>
	<hr>
                <ul uk-accordion style="">

					<li class="" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
						1.a. Calcular: \( \displaystyle \int_1^2 \Big(\frac{1}{t}-i\Big)^2 dt\) 
						<hr>
						<a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#">Ver solución </a>

						<div class="uk-accordion-content uk-text-left">
							<p>
							\[\int_1^2 \Big(\frac{1}{t}-i\Big)^2 dt\]
							\[= \int_1^2 \Big( \frac{1}{t} \Big)^2-2i\frac{1}{t}+i^2 dt\]
							\[= \int_1^2 t^{-2} dt - 2i\int_1^2 \frac{1}{t} dt - \int_1^2 1  dt\]
							\[= -t^{-1} \biggm\vert_1^2  - 2i \ln{(t)} \biggm\vert_1^2  - t \biggm\vert_1^2\]
							\[= -2^{-1} \cancel{+1}  - 2i \ln{(2)}  \cancel{-1} \]
							\[\therefore \int_1^2 \Big(\frac{1}{t}-i\Big)^2 dt = -2^{-1}  - 2i \ln{(2)} \]
							</p>
						</div>
					</li>

					<li class="uk-open" style="background: #242526 !important; padding: 20px; border-radius: 10px;">
						1.b. Calcular: \( \displaystyle \int_0^\frac{\pi}{6} e^{i2t} dt\)
						<hr>
						<a class="uk-accordion-title uk-text-left "  style="color: #fff;" href="#"> Ver solución  </a>

						<div class="uk-accordion-content uk-text-left">
							<h4>Primer método</h4>
							<p>
							\(\fbox{Teorema 1: }\) 
							<br>
							Sea una integral de la siguiente forma \( \displaystyle \int_a^b e^{ik \theta} d \theta \) 
							<br>
							Si \(k=0 \Rightarrow \displaystyle \int_a^b e^{ik \theta} d \theta = \displaystyle \int_a^b 1 d\theta \)
							<br>
							Si \(k \neq 0 \Rightarrow \displaystyle \int_a^b e^{ik \theta} d \theta = \displaystyle   \frac{1}{ik} e^{ik \theta} \biggm\vert_a^b  \)
							<br>
							\(\Rightarrow \displaystyle \int_0^\frac{\pi}{6} e^{i2t} dt = \frac{1}{i2} e^{i2 \theta} \biggm\vert_{0}^{\frac{\pi}{6}} \)
							<br>
							\(= \frac{1}{i2} \big( e^{ \frac{i2 \pi}{6}} - 1 \big)  \)

							\[\fbox{Integral por sustitución}\]

							\[u = 2it\]
							\[du = 2idt\]
							\[dt=\frac{du}{2i}\]

							\[\fbox{Reemplazamos}\]


							</p>
						</div>
					</li>
					


                </ul>






</article>

</div>



@endsection


