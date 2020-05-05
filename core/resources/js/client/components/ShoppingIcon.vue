<template>
    <div>
        <i class="material-icons">shopping_cart</i><span class="text-white">{{contadorCart()}}</span>
    </div>
</template>

<script>
export default {
    methods:{
        contadorCart(){
            return this.$store.getters.tamanoCarrito > 0 ? this.$store.getters.tamanoCarrito :''
        }
    },
    mounted() {
        console.log('se monto icon')
    }
}
</script>
