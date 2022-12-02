<template>



    <div class="cont uk-text-left marginAsesoria">
        <h2 class=" uk-margin-top">¡Bienvenid@ User!</h2>

        <h3>Acá encontraras toda la información sobre tu investigación</h3>

        <div class=" uk-margin-top manoAzul" >
            <span v-on:click="currentTab = 0" v-bind:class="['menuAsesoria', currentTab === 0 ? 'menuAsesoriaBottom' : 'menuAsesoriaNoBottom']">
                Mi Investigación
            </span>
            
            <!--    
            <span v-on:click="currentTab = 2" v-bind:class="['menuAsesoria', currentTab === 2 ? 'menuAsesoriaBottom' : 'menuAsesoriaNoBottom']">
                Asesorías
            </span>
            -->

            <span v-on:click="currentTab = 1" v-bind:class="['menuAsesoria', currentTab === 1 ? 'menuAsesoriaBottom' : 'menuAsesoriaNoBottom']">
                Mis Pagos
            </span>            

        </div>

        <div class="tab-content uk-margin-bottom asesoriaContent">
            
            
            <transition name="fade" mode="out-in">
            <div v-show="currentTab === 0">

                <div>
                    <p class="pTitCuatro"> Titulo: Relación entre X e Y en alumnos del colegio Z, Arequipa, 2020</p>
                </div>
                <hr>

                <div>
                    <p class="pTitCuatro">Porcentaje de avance: 80% </p>
                    <progress id="js-progressbar" class="uk-progress" value="80" max="100"></progress>
                </div>
                
                <hr>
                    <span class="pTitCuatro">Contrato: </span>
                    <button onclick="" class="uk-button uk-button-default btnlogin "> <i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>

                <hr>
                <p class="pTitCuatro">Historial de avances</p>

                <div>
                    <div class="avances uk-padding">
                        <h4>Asesor: Luis - 10/12/2020</h4>
                        <p>Se desarrolo el proyecto de investigación se sugiere que revise y se envíe observaciones</p>
                        <a onclick="" class="uk-button uk-button-default btnlogin "><i class="fa fa-file-o" aria-hidden="true"></i></a>
 
                        <!--<div class="avances uk-padding">
                            <h4>Ronny Cuentas - 10/12/2020</h4>
                            <p>Se desarrolo el proyecto de investigación se sugiere que revise y se envíe observaciones</p>
                        </div>-->

                    </div>
                </div>
                <br>
                <div>
                    <div class="avances uk-padding">
                        <h4>Asesor: Luis - 10/12/2020</h4>
                        <p>Se desarrolo el proyecto de investigación se sugiere que revise y se envíe observaciones</p>
                        <a onclick="" class="uk-button uk-button-default btnlogin "><i class="fa fa-file-o" aria-hidden="true"></i></a>
                    </div>
                </div>

            </div>
            </transition>
            
            <transition name="fade" mode="out-in">
            <div v-show="currentTab === 1">
                <div>
                    <p class="pTitCuatro">Número de cutas: 2/8</p>


                    <hr>
                    <p class="pTitCuatro">Cuotas restantes</p>
                    <strong style="color: green;"> <p>Tines X cuotas vencidas</p></strong>

                    <table class="uk-table uk-table-small uk-table-divider">

                        <thead >
                            <tr >
                                <th class="uk-text-center">#</th>
                                <th class="uk-text-center">Fecha de vencimiento</th>
                                <th class="uk-text-center">Monto</th>
                                <th class="uk-text-center">Estado</th>
                                <th class="uk-text-center">Realizar pago</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="uk-text-center">
                                <td>1</td>
                                <td>12/10/11</td>
                                <td>S/ 300</td>
                                <td>Validado</td>
                            </tr>
                            <tr class="uk-text-center">
                                <td>2</td>
                                <td>12/10/11</td>
                                <td>S/ 300</td>
                                <td>En espera de validación</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <p class="pTitCuatro">Historial de pagos</p>
                    <table class="uk-table uk-table-small uk-table-divider">

                        <thead >
                            <tr >
                                <th class="uk-text-center">#</th>
                                <th class="uk-text-center">Fecha de Pago</th>
                                <th class="uk-text-center">Monto</th>
                                <th class="uk-text-center">Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="uk-text-center">
                                <td>1</td>
                                <td>12/10/11</td>
                                <td>S/ 300</td>
                                <td>Validado</td>
                            </tr>
                            <tr class="uk-text-center">
                                <td>2</td>
                                <td>12/10/11</td>
                                <td>S/ 300</td>
                                <td>En espera de validación</td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <p class="pTitCuatro">Registrar un nuevo pago</p>
                        <div>




                            <form action="">
                                <input type="file" name="image"  accept="image/*">
                                <button>Subir Imagen</button>
                            </form>
                        </div>


                </div>
                
            </div>
            </transition>
 
        </div>
    </div>

</template>

<script>

    export default {


        name: 'tabs',
        data (){
            return {
                currentTab: 0,
            }
        },
        
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
.tab-content {
    padding: 30px;
    border: 1px solid #3E4042;
    border-radius: 0px 0px 10px 10px !important; 
}
.marginAsesoria{
    margin-left: 450px ;
    margin-right: 450px ;    
}
.menuAsesoria{
    background-color: #18191a;
    font-size: 20px;
    padding-top: 5px;
    padding-left: 18px;
    padding-right: 18px;
    background: #242526 !important;
    
    border-radius: 10px 10px 0px 0px !important; 

    border-top: 1px solid #3E4042;
    border-left: 1px solid #3E4042;
    border-right: 1px solid #3E4042;
}

/*4 y sin borde de abojo color 242526*/
.menuAsesoriaBottom{
    padding-bottom: 3px;
    border-bottom: 1px solid #242526;
}
.menuAsesoriaNoBottom{
    padding-bottom: 3px;
    border-bottom: 1px solid #3E4042;
}


.avances{
    padding: 30px !important;
    border-radius: 10px 10px 10px 10px !important; 
    border: 1px solid #3E4042;
}

.pTitCuatro{
    font-size: 25px;
    font-weight: bolder ;
}

.asesoriaContent{
    background: #242526 !important;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>