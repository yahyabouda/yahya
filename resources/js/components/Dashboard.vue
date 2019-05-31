<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Votre Facture PDF </div>
                                        <div class="card-header">Votre Facture PDF </div>


                    <div class="card-body">
                                    <li><a href="{{url('/fich')}}">cliquer</a></li>
                                        <router-link class="add-picture-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored" to="/fich">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
