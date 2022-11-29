<template>

    <Header></Header>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3>Dashboard VUE</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">You are logged in as <b>{{user.email}}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <Footer></Footer>

</template>
<script>
import Header from "./includes/Header.vue";
import Footer from "./includes/Footer.vue";

export default {
    name:"dashboard",
    components: {Footer, Header},
    data(){
        return {
            user:this.$store.state.auth.user
        }
    }
}
</script>
