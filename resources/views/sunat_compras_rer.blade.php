@extends('footer')
@extends('header')

@section('title')
Registro de Compras SLE - Portal | Alappont
@endsection

@section('content')

<style>

</style>


<script>
function httpGet(theUrl) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
    xmlHttp.send( null );
    return xmlHttp.responseText;
    window.alert(xmlHttp.responseText);
}
</script>

<!---
<script>
function httpGet() {
    window.alert("Hola, mi nombre es luis!");
}
</script>
-->

<div>
    <button onclick="httpGet('http://127.0.0.1:8000/ajaxRequest')">PRESIONA</button>
</div>


<div  class="uk-container uk-container-small" style="margin-top:3%; margin-bottom:3%;">
    <article class="">

        <h2 class="uk-article-title"><a class="uk-link-reset" href="">Registro de Compras SLE - Portal</a></h2>
        <hr class="">

        <div class="uk-alert-success " uk-alert style="background:#f0f2f5 !important; color:#000 !important; border-radius: 10px;">
            
            <p style="font-size: 110%; "  >Este aplicativo esta especialmente diseñado para el Regimen Especial a la Renta (RER), no se ha verificado si funciona con algún otro régimen.</p>

        </div>

        <hr class="">  

        <div class="loginbg " style="margin: 0px;">
            <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical   uk-card-body"  >

                <form class=" formperfil uk-form-horizontal " action="sdfsdfsdfs" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="maginBottom10">
                        <label for="monto"><h4>1. PERIODO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>2. CODIGO UNICO DE LA OPERACION (CUO) </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>3. NUMERO CORRELATIVO DEL (CUO) </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <hr>
                    <h3>COMPROBANTE DE PAGO O DOCUMENTO	</h3>

                    <div class="maginBottom10">
                        <label for="monto"><h4>4. FECHA DE EMISION </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>5. FECHA DE VENCIMIENTO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>6. TIPO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>7. SERIE </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>8. AÑO DUA O DSI </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>9. NÚMERO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>10. NÚMERO FINAL </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>11. TIPO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>12. NÚMERO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div> 




                    <div class="maginBottom10">
                        <label for="monto"><h4>13. APELLIDOS Y NOMBRE O RAZÓN SOCIAL DEL PROVEEDOR </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>




                    <div class="maginBottom10">
                        <label for="monto"><h4>14. BASE IMPONIBLE </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>




                    <div class="maginBottom10">
                        <label for="monto"><h4>15. IGV </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>16. BASE IMPONIBLE </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>17. IGV </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>18. BASE IMPONIBLE </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>19. IGV </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>20. NO GRAVADO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>21. NO GRAVADO </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>22. I.S.C </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>23. OTROS CARGOS </h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>




                    <div class="maginBottom10">
                        <label for="monto"><h4>24. IMPORTE TOTAL</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>25. CODIGO MONEDA</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    <div class="maginBottom10">
                        <label for="monto"><h4>26. TIPO DE CAMBIO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>27. FECHA DE EMISIONO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    

                    <div class="maginBottom10">
                        <label for="monto"><h4>28. TIPO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>29. SERIE</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>30. CODIGO DUA</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>31. NUMERO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

            

                    <div class="maginBottom10">
                        <label for="monto"><h4>32. FECHA DE EMISION</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    
                    <div class="maginBottom10">
                        <label for="monto"><h4>33. NUMERO DE LA CONSTANCIA</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>34. RETENCION</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>35. CLASIFICACION DE BIENES Y SERVICIOS</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>36. IDENTIFICACION DEL CONTRATO  DE LAS SOCIEDADES</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>37. ERROR TIPO 1</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>38. ERROR TIPO 2</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>

                    <div class="maginBottom10">
                        <label for="monto"><h4>39. ERROR TIPO 3</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                    <div class="maginBottom10">
                        <label for="monto"><h4>40. ERROR TIPO 4</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>



                    
                    <div class="maginBottom10">
                        <label for="monto"><h4>41. COMPROBANTES CANCELADOS CON MEDIOS DE PAGO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>


                                        
                    <div class="maginBottom10">
                        <label for="monto"><h4>42. ESTADO</h4></label>
                        <div class="maginBottom10">        
                            <input id="monto" name="monto" class="rad-10 uk-input " type="text" placeholder="" value="">
                        </div>
                    </div>




                    <button class="uk-button uk-button-primary registro manoAzul uk-margin-top rad-10"> Generar</button>
                </form>


                

            </div>
        </div>

    </article>

</div>

@endsection