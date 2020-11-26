<template>
    <div class="parent">
        <header class="nav_bar">
            <SideBar></SideBar>
        </header>
        <main class="main_container">
            <router-view></router-view>
        </main>
        <footer class="foot">
            <!-- <h2>Foot</h2> -->
            @GBEMIGA
        </footer>
    </div>
</template>

<script>
import Main from './Main.vue'
import SideBar from './SideBar'
    export default {
        components: {
            Main,
            SideBar,
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
*{
    /* min-height: 100vh; */
    padding: 0;
    margin: 0;
    /* background-color: #16F4D0; */
     font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.parent{
    display: grid;
    grid-template: auto 1fr auto / auto 1fr auto ;
    background: #16F4D0;
}

.nav_bar{
    /* padding: 1rem; */
    grid-column: 1 / 4;
    background:  #545454;
}

.main_container{
    grid-column: 1/4;
    /* display: grid;
    place-items: center; */
}

.foot{
    /* grid-column: 1/4; */
    display: grid;
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 30px;
    background: #6cf;
    place-items: center;
    
}
</style>
