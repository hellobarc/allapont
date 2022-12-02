<html>
    <head>
        
    </head>


    <body>
<style>
    @import "compass/css3";

body, html {
  height: 100%;
  font-family: 'Roboto', sans-serif;
  margin:0;
  padding:0;
}
#content-wrapper {
  height: 100%;
}
.panel {
  padding: 0;
  margin: 0;
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  background-color:#fff;
}
.panel.one {
  background-color:#151515;
  color:#fff;
}

.panel.two {
  background-color:#20a0d5;
  circle {
      fill: white;
  }
}
#explore_visualization {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  align-items: center;
  justify-content: center;
}
#explore_slogan {
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex;
  position:absolute;
  flex-direction: column;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  width:100%;
  h1 {
    font-size:96px;
    font-weight:100;
    text-transform:uppercase;
    margin-bottom:18px;
  }
  p {
    width:500px;
    text-align:center;
  }
  h1, p {
    color:#20a0d5;
  }

}
.panel.three {
  color:#fff;
  background-color:#151515;
}

</style>

<script>

$(function() {
  'use strict';

  var addExploreVis = function(data, elm, size) {
    var dim = Math.max(elm.width(), elm.height()) + size*2;
    var chart = function(percent) {
      var chart = d4.baseChart({
        config: {
          axes: {
            x: {
              scale: 'linear'
            },
            y: {
              scale: 'linear'
            },
            z: {
              scale: 'linear'
            }
          }
        }
      })
        .mixin([{
          'name': 'circles',
          'feature': d4.features.circleSeries
        }])
        .margin({
          left: 0,
          top: 0,
          right: 0,
          bottom: 0
        })
        .x(function(x) {
          x.key('x');
        })
        .y(function(y) {
          y.key('y');
        })
        .z(function(z) {
          z.key('value');
        })
        .outerWidth(dim)
        .outerHeight(dim)
        .using('circles', function(circles) {
          circles
            .r(function(d) {
              var mod = 1;
              if(percent > 0.95){
                mod = 1.4;
              }
              if(d[this.z.$key]-d.rng > (1.0 - percent)) {
                return this.z(size*percent*mod);
              }
            })
            .cx(function(d, i) {
              var shift = 0.50;
              if (i % 2 > 0) {
                shift = -0.50;
              }
              return this.x(d[this.x.$key]) + (size * shift) + Math.random();
            })
            .cy(function(d, i) {
              var shift = -0.004;
              if (i % 2 > 0) {
                shift = 0;
              }
              return this.y(d[this.y.$key]) + (size * shift) + Math.random();
            });
        });

      d3.select(elm[0])
        .datum(data)
        .call(chart);
    };
    return chart;
  };

  var windowHeight = $(window).innerHeight();
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave'
    }
  });

  new ScrollMagic.Scene({
    triggerElement: $('#begin')[0]
  })
    .setPin($('#begin')[0])
    //.addIndicators()
    .addTo(controller);

  var data = [];
  var frequency = 1;
  var amplitude = 0.7;
  var steps = 30;
  var value;

  for (var x = Math.PI / steps; x <= Math.PI; x += Math.PI / steps) {
    for (var y = Math.PI / steps; y <= Math.PI; y += Math.PI / steps) {
      value = Math.min(Math.sin(frequency * x) * amplitude, Math.sin(frequency * y) * amplitude);
      data.push({
        y: y,
        value: value,
        rng: Math.random()/8,
        x: x
      });
    }
  }
  data.pop(); //remove the last item which is out of the step cycle.

  var size = Math.max($('#explore').width(), $('#explore').height()) / (data.length / 14);
  $('#explore_visualization').width($('#explore').width()+size*2);
  $('#explore_visualization').height($('#explore').height());
  $('#explore_visualization')[0].style['margin-left'] = -(size*1.5)+'px';
  var chartFunct = addExploreVis(data, $('#explore_visualization'), size);
  new ScrollMagic.Scene({
    triggerElement: $('#explore')[0],
    duration: windowHeight * 6.5
  })
    .setPin($('#explore')[0])
    //.addIndicators()
    .addTo(controller)
    .on('update', function(event) {
      chartFunct(event.scrollPos*1.3 / event.endPos);
    }).on('start', function() {
      chartFunct(0);
    });

  new ScrollMagic.Scene({
    triggerElement: $('#end')[0]
  })
    .setPin($('#end')[0])
    //.addIndicators()
    .addTo(controller);
});

</script>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
<!--[if lt IE 10]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<section id="begin" class="panel one">
  <h1></h1>
  <br>
  <br>
  <h1>Estamos actualizando nuestro sistema |BAJAME \/| </h1>
</section>
<section id="explore" class="panel two">
  <div id="explore_slogan">
    <h1>Nuevas funciones</h1>
    <p>Optimización del sistema de pagos</p>
    <p>Paga sin levantarte de tu asiento</p>
    <p>Sistema de gestión empresarial gratuito para negocios</p>
    <p>Funciones para que cualquiera pueda crear de contenido educativo</p>
    <p>Venta de hardware</p>
  </div>
  <div id="explore_visualization"></div>
</section>
<section id="end" class="panel three">
  <h1>Trabajamos todos los días para brindar una mejor experiencia</h1>

</section>
<section id="explore" class="panel two">
    <div id="explore_slogan">
      <h1>Nuevo Alappont </h1>
      <p>En menos de lo que puedes imaginar</p>

      <p>:)</p>

    </div>
    <div id="explore_visualization"></div>
  </section>        
    </body>
</html>