<template>
    <main class="mb-3">
        <div class="bann-carrito">
            <div class="container pt-md-5 pb-md-4 pt-4 pb-3">
                <h1>Mi Carrito</h1>
            </div>
        </div>
        <!-- CURSOS PARA MD -->
        <div class="container pt-3 d-none d-lg-block">
            <div class="row">
                <div class="col-6 mb-2" v-for="curso in this.$store.state.cart.cart.cursos" :key="curso.curso_id">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3 my-auto">
                                    <img class="img-fluid" src="img/logo_c.png" alt="">
                                </div>
                                <div class="col-6">
                                    <h3 class=" text-center font-weight-bold">{{curso.nombre + " " + nivelCurso(curso.nivel)}}</h3>
                                    <ul type="none" class="text-left">
                                        <li>De Lunes a Viernes</li>
                                        <li>17/02/2020 al 21/02/2020</li>
                                        <li>17:00:00 a 21:00:00</li>
                                        <li>Laboratorio IBM</li>
                                        <li class="font-weight-bold">$ {{curso.precio_estudiante_unam}}</li>
                                    </ul>
                                </div>
                                <div class="col-3 my-auto mx-0">
                                    <a href="" v-on:click.prevent="quitarCurso(curso)">
                                        <img src="img/icons/basura.png" class="img-fluid basura" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CURSOS PARA SM -->
        <div class="container  d-lg-none">
            <div id="accordion" class="mt-3">
                <div class="card"  id="headingOne">
                    <div class="card-header text-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <img src="img/logo_c.png" class="img-fluid logosm d-inline" alt="">
                        <h3 class=" text-center font-weight-bold d-inline pl-5 text-dark">C Básico AM</h3>
                        <span class="pl-5 text-dark">$800</span>

                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <ul type="none" class="text-left">
                                        <li>De Lunes a Viernes</li>
                                        <li>17/02/2020 al 21/02/2020</li>
                                        <li>17:00:00 a 21:00:00</li>
                                        <li>Laboratorio IBM</li>
                                        <li class="font-weight-bold">$1600</li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <a href="">
                                        <img src="img/icons/basura.png" class="img-fluid basura" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" id="headingTwo">
                    <div class="card-header text-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <img src="img/logo_c.png" class="img-fluid logosm d-inline" alt="">
                        <h3 class=" text-center font-weight-bold d-inline pl-5 text-dark">C Básico AM</h3>
                        <span class="pl-5 text-dark">$800</span>

                    </div>

                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <ul type="none" class="text-left">
                                        <li>De Lunes a Viernes</li>
                                        <li>17/02/2020 al 21/02/2020</li>
                                        <li>17:00:00 a 21:00:00</li>
                                        <li>Laboratorio IBM</li>
                                        <li class="font-weight-bold">$1600</li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <a href="">
                                        <img src="img/icons/basura.png" class="img-fluid basura" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card "  id="headingThree">
                    <div class="card-header text-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <img src="img/logo_c.png" class="img-fluid logosm d-inline" alt="">
                        <h3 class=" text-center font-weight-bold d-inline pl-5 text-dark">C Básico AM</h3>
                        <span class="pl-5 text-dark">$800</span>

                    </div>

                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <ul type="none" class="text-left">
                                        <li>De Lunes a Viernes</li>
                                        <li>17/02/2020 al 21/02/2020</li>
                                        <li>17:00:00 a 21:00:00</li>
                                        <li>Laboratorio IBM</li>
                                        <li class="font-weight-bold">$1600</li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <a href="">
                                        <img src="img/icons/basura.png" class="img-fluid basura" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--  -->
        <div class=" mt-4 pt-3 jumbotron infoP">
            <h2>Información del pago</h2><br>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card pt-3">
                        <h5 class="pb-2">Instrucciones</h5>
                        <ol>
                            <li><span>AGREGA</span> todos los cursos que desees inscribir.</li>
                            <li>Clic al botón <span> INSCRIBIR </span> y verifica los datos.</li>
                            <li>En <span>MI PERFIL</span> clic al botón <span>GENERAR COMPROBANTE</span>.</li>
                            <li>Realiza tu <span>PAGO</span> en cajas.</li>
                            <li><span>ENTREGA</span> tus papales en PROTECO al menos 72 horas antes del inicio del curso.</li>
                        </ol>
                        <form action="" class="pl-5">
                            <input type="checkbox">
                            <label for="">Acepto haber leído todos los pasos</label>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <div class="card pt-3">
                        <!-- tabla -->
                        <table class="table table-hover mx-auto">
                            <tbody>
                            <tr>
                                <td>Subtotal</td>
                                <td>$ {{this.$store.state.cart.cart.subtotal}}</td>
                            </tr>
                            <tr>
                                <td>Descuento</td>
                                <td>$ {{this.$store.state.cart.cart.descuento}}</td>
                            </tr>
                            <tr class="font-weight-bold">
                                <td>Total</td>
                                <td>$ {{this.$store.state.cart.cart.total}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="">
                            <button type="button" class="btn btn-primary btn-sm mx-auto">Generar Comprobante</button><br>
                        </a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
    /*CARRITO*/
    .bann-carrito{
        width: 100%;
        background-color:  #022c43;
    }
    .bann-carrito h1{
        color: #E8C918;
        font-size: calc(1.5rem + .6vw);
    }
    .basura{
        width: 50%;
    }
    .basura:hover{
        animation-name: bote;
        animation-duration: 3s;
        transform: scale(1.2);
    }
    .infoP h2{
        font-family: 'Fjalla One', sans-serif;
        font-size: calc(1.2rem + .4vw);
        color: #022c43;
        text-align: center;
    }
    .infoP h5{
        font-family: 'Fjalla One', sans-serif;
        font-size: calc(1rem + .4vw);
        color: #022c43;
        text-align: center;
    }
    .infoP ol{
        line-height: 25px;
        font-family: 'PT Sans', sans-serif;
    }
    .infoP ol li span{
        font-weight: bold;
        font-family: 'PT Sans', sans-serif;
    }
    .infoP table{
        width: 70%;
        font-family: 'PT Sans', sans-serif;
    }
    .infoP a{
        width: 100%;
        text-align: center;
    }
    .infoP button{
        width: 50%;
    }

    .logosm{
        width: 15vw;
    }
</style>

<script>
export default {
    methods: {
        nivelCurso(nivel) {
            return nivel === 'B' ? 'Básico' :
                nivel === 'I' ? 'Intermedio' :
                    nivel === 'A' ? 'Avanzado' : '';
        },
        quitarCurso(curso){
            this.$store.commit('removeFromCart',curso);
            this.$toast.success('El curso se quito del carrito', 'Bien',{
                icon: "icon-person",
                position: "topCenter",
            });
        }
    }
}
</script>
