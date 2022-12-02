<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<h3>Requerimientos por día</h3>
<div style="border:1px solid  #3E4042; padding: 30px;  border-radius:10px;">
    
    <canvas id="dia_chart" height ="60px" ></canvas>
</div>


<h3>Requerimientos por mes</h3>
<div style="border:1px solid  #3E4042; padding: 30px;  border-radius:10px;">
    
    <canvas id="mes_chart" height ="60px" ></canvas>
</div>

<script>
    window.onload = function() {
        var ctx_1 = document.getElementById('dia_chart');
        var dia_chart = new Chart(ctx_1, {
            type: 'line',
            data: {
                labels: <?php echo($result); ?>,
                datasets: [{
                    label: '# de Requerimientos',
                    data: <?php echo($count); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 3,
                    fill: false, 
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                tooltips: {
                    mode: 'point'
                }
            }
        });

        var ctx_2 = document.getElementById('mes_chart');
        var mes_chart = new Chart(ctx_2, {
            type: 'line',
            data: {
                labels: <?php echo($result_mes); ?>,
                datasets: [{
                    label: '# de Requerimientos',
                    data: <?php echo($count_mes); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 3,
                    fill: false, 
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                tooltips: {
                    mode: 'point'
                }
            }
        });
    }					
</script>
