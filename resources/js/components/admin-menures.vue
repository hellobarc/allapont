<template>
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
    <ul class="uk-slider-items uk-child-width-1-1@s uk-grid ">
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/usuarios';">Usuarios</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/compras_cursos';">Compra de cursos</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/crear_curso';">Crear curso</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/ver_curso';">Ver cursos</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/certificados_create';">Crear certificado</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/certificados_show';">Ver certificados</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/tesis';">Tesis</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/product_create';">Crear un producto</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/postulantes';">Solicitudes de trabajo</div>
        </li>
        <li>
            <div class="lecciones" onclick="window.location.href = '/admin/postulantes';">Contabilidad Alappont</div>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small carrousel-arrow" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small carrousel-arrow" href="#" uk-slidenav-next uk-slider-item="next"></a>
</div>

</template>





<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>