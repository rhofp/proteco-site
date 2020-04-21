<template>
    <div>
           <div class="banner2">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-12 col-md-6 text-left pt-md-2 pl-md-5 d-none d-md-block">
                    <h1 class="pl-lg-5">Todos nuestros cursos al 3x2</h1>
                    <h2 id="h2banner" class="pl-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- SEMESTRALES -->
    <div class="container titulos">
        <h1 class="mt-md-4 mt-4 mb-2">Cursos SEMESTRALES</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
            <form>
                <div class="form-group">
                <input class="form-control" placeholder="Buscar curso" v-model="cursoABuscar">
                </div>
            </form>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-4 mb-3" v-for="curso in filterCursos" :key="curso.curso_id">
                <div class="card card-car">
                    <img src="img/b101.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{curso.nombre + " " + nivelCurso(curso.nivel)}}</h5>
                        <p class="card-text m-0"><span>Fecha:</span> 17/02/20 al 21/02/20</p>
                        <p class="card-text mt-1"><span>Horario:</span> 17:00 a 21:00</p>
                        <!-- reveal -->
                        <div class="card-reveal bg-light" data-rel="1">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-rel="1">
                                <span aria-hidden="true">×</span></button>
                            <p class="card-text mt-3"><span>Antecedentes: </span>Ninguno</p>|
                            <p class="card-text"><span>Material: </span>De preferencia traer Laptop propia</p>
                            <p class="card-text"><span>Horario: </span>17:00 a 21:00 (15 horas hrs)</p>
                            <p class="card-text"><span>Días: </span>De Lunes a Viernes</p>
                            <p class="card-text"><span>Lugar: </span>Laboratorio IBM/Java (Edificio T, Primer Piso)</p>
                            <p class="card-text"><span>Cupo disponible: </span>35</p>
                            <p class="card-text"><span>Costo UNAM: </span>$950</p>
                            <p class="card-text"><span>Costo alumno externo: </span>$1800</p>
                            <p class="card-text"><span>Costo público general: </span>$2800</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" class="card-link" title="Agregar al carrito"><i class="material-icons"
                            title="Agregar al carrito" v-on:click.prevent="agregarAlCarrito(curso)">shopping_cart</i></a>
                        <a href="#" class="card-link" title="Ver el temario">Temario</a>
                        <span href="" class="show card-link text-right text-primary" data-rel="1"
                            title="Ver detalles del curso">Ver más</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>
export default {
    name: 'CursosPage',
    data(){
        return {
            cursos : [],
            cursoABuscar : '',
        }
    },
    created() {
        axios.get('/v1/cursos').then( ({data}) => {
            this.cursos = data.data;
        });
    },
    computed:{
        filterCursos(){
            return this.cursos.filter( curso => {
                return curso.nombre.toLowerCase()
                    .match(this.cursoABuscar.toLowerCase());
            });
        }
    },
    methods:{
        nivelCurso(nivel){
            return nivel === 'B' ? 'Básico' :
                nivel ==='I' ? 'Intermedio' :
                nivel === 'A' ? 'Avanzado' : '';
        },
        agregarAlCarrito(curso){
            if (this.cursoEstaEnCarrito(curso)){
                this.$store.commit('addToCart',curso);
                this.$toast.success('El curso se agrego con éxito al carrito', 'Bien',{
                    icon: "icon-person",
                    position: "topCenter",
                });
            }else {
                this.$toast.warning('El curso ya se encuentra en el carrito', 'OJO',{
                    icon: "icon-person",
                    position: "topCenter",
                });
            }

        },
        cursoEstaEnCarrito(_curso){
            for (const curso of this.$store.state.cart){
                if ( _curso.curso_id === curso.curso_id)
                    return false
            }
            return true
        }
    }
}
</script>
