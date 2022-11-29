<template>
    <Header></Header>

    <Pos></Pos>

    <Footer></Footer>
</template>

<script>
import Header from "./includes/Header.vue";
import Footer from "./includes/Footer.vue";
import Pos from "./includes/Pos.vue";
export default {
    name: "Home",
    components: {Pos, Footer, Header}
}
</script>

<style scoped>

</style>
