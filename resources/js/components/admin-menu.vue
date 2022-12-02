<template>
    <div class=" ">
        <div class=" ">
            <div class="">
                <h4>Administrador: </h4>
                <p class="">{{ user.name }}</p>
                <hr class="vue-margin-hr">

                
                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/usuarios';" v-bind:class="[ path === '/admin/usuarios' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Usuarios</div>
                
                
                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/compras_cursos';" v-bind:class="[ path === '/admin/compras_cursos' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Compra de cursos</div>


                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/crear_curso';" v-bind:class="[ path === '/admin/crear_curso' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Crear curso</div>


                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/ver_curso';" v-bind:class="[ path === '/admin/ver_curso' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Ver cursos</div>


                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/certificados_create';" v-bind:class="[ path === '/admin/certificados_create' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Crear certificado</div>


                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/certificados_show';" v-bind:class="[ path === '/admin/certificados_show' ? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Ver certificados</div>


                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/tesis';" v-bind:class="[ path === '/admin/tesis' || path === '/admin/tesis/tesis_agregar'  || path === '/admin/tesis/tesis_cuotas' || path === '/admin/tesis/tesis_avances' || path === '/admin/tesis/tesis_list' || path === '/admin/tesis/add_servicios'? 'vue-bgmenu' : 'menuAsesoriaNoBottom']">Investigaciones</div>


                <!--<div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/product_create';">Crear un producto</div>



                <div class="opciones uk-margin-bottom" onclick="window.location.href = '/admin/postulantes';">Solicitudes de trabajo</div>


                <div class="lecciooopcionespcionesnes uk-margin-bottom" onclick="window.location.href = '/admin/postulantes';">Contabilidad Alappont $</div>-->

            </div>
        </div>
    </div>

</template>





<script>

    export default {
        props: ['user'],

        data (){
            return {
                path: window.location.pathname,
            }
        },

        methods: {
            saludar: function (event) {
            // `this` dentro de los métodos apunta a la instancia de Vue
            alert(window.location.pathname )
            }
        },

        mounted() {
            console.log('Component mounted.')
        }

    }


</script>

<style scoped>
.vue-bgmenu{
    background: #4e4f50;
    cursor: pointer;
    border-radius: 10px;
}
.vue-margin-hr{
    margin-left: 20px;
    margin-right: 20px;
}

.opciones{
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 10px;
    padding-left: 10px;
    margin-left: 10px;
    margin-right: 10px;
}


.opciones:hover{

background: #4e4f50;
cursor: pointer;
border-radius: 10px;
}

</style>