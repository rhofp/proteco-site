<template>
    <div>
        <i class="material-icons">shopping_cart</i><span class="text-white">{{contadorCart()}}</span>
    </div>
</template>

<script>
export default {
    methods:{
        contadorCart(){
            return this.$store.getters.cartSize > 0 ? this.$store.getters.cartSize :''
        }
    },
    mounted() {
        console.log('se monto icon')
    }
}
</script>
