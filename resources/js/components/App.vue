<template>
    <div class="parent">
        <header class="nav_bar">
            header
        </header>
        <div class="side_bar">
            <SideBar></SideBar>
        </div>
        <main class="main_container">
            <Main></Main>
        </main>
        <footer class="foot">
            <!-- <h2>Foot</h2> -->
            foot
        </footer>
    </div>
</template>

<script>
import Main from './Main.vue'
import SideBar from './SideBar'
    export default {
        components: {
            Main,
            SideBar
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
    background-color: #16F4D0;
     font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.parent{
    display: grid;
    grid-template: auto 1fr auto / auto 1fr auto ;
}

.nav_bar{
    padding: 1rem;
    grid-column: 1 / 4;
}

.side_bar{
    grid-column: 1/2;
    border: 10px solid black;
}

.main_container{
    grid-column: 2/4;
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
