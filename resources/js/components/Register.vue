<template>
   

<div class="loginbg uk-flex uk-height-medium  uk-margin uk-text-center" style="height: auto">
    <div class=" logingbcard uk-margin-auto uk-margin-auto-vertical uk-width-1-2@s uk-card uk-card-default uk-card-body" style="margin-top: 30px !important; margin-bottom: 100px !important;" >
        <h2>Registrarme</h2>
        <hr>


        <form method="POST" action="" class="uk-margin" required autocomplete="off">
           

                <div class="uk-margin">
                    <div  class="">Nombres y apellidos:</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input type="text" class="radfifth uk-input form-control" name="name" value="" required autofocus autocomplete="off" v-model="form.name" >
                    </div>
                </div>

                    <div class="invalid-feedback" role="alert">
                        <strong></strong>
                    </div>

                <div class="uk-margin">
                    <div  class="">Celular:</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: phone"></span>
                        <input type="text" class="radfifth uk-input form-control" name="celular" value="" required v-model="form.celular">
                    </div>
                </div>


                    <div class="invalid-feedback" role="alert">
                        <strong></strong>
                    </div>


                <div class="uk-margin uk-margin-bottom">
                    <div  class="">Correo electrónico:</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                        <input id="email" type="email" class="radfifth uk-input input form-control" name="email" value="" required autocomplete="nope" v-model="form.email">
                    </div>
                </div>


                <span v-if="errors.name" class="invalid-feedback uk-margin-bottom" role="alert" >
                    <strong  style="color: red;" >{{ errors.name[0] }}</strong>
                </span>


                <div class="uk-margin">
                    <div  class="">Contraseña:</div>
                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input id="password" type="password" class="radfifth uk-input form-control" name="password" required autocomplete="new-password" v-model="form.password">
                    </div>
                </div>


                <div class="uk-margin uk-margin-bottom">
                    <div  class="">Confirmar contraseña:</div>

                    <div class="uk-inline">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input id="password-confirm" type="password" class="radfifth uk-input form-control" name="password_confirmation" required v-model="form.password_confirmation">
                    </div>
                </div>
 

                    <div class="invalid-feedback uk-margin-bottom" role="alert">
                        <strong style="color: red;">Las contraseñas no coinciden.</strong>
                    </div>



                <div class="">
                    <button @click.prevent="saveForm" type="" class="uk-button uk-button-default btnlogin uk-margin-bottom">
                        Registrarme
                    </button>
                </div>

        </form>

    </div>
</div>


</template>

<script>
export default {
    data() {
        return {
            form:{
                name:'',
                celular:'',
                email:'',
                password:'',
                password_confirmation:'',
            },
            errors: []
        }
    },

    methods:{
        saveForm(){
            axios.post( 'api/registeraccuount', this.form ).then( () => {
                console.log('saved');
            }).catch( (error) => {
                this.errors = error.response.data.errors;
            })
        }
    }
};
</script>

<style scoped>

</style>