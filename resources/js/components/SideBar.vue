<template>
    <div class="sidebar">
        <nav>
            <div class="navbar__header">
                <div class="navbar__btn" ref="navbarBtn" @click="navbarBtn">
                    <div class="bar bar1"></div>
                    <div class="bar bar3"></div> 
                </div>
                <div class="navbar__btns">
                    <a href="" class="log_link">LOGIN</a>
                    <a href="" class="log_link">REGISTER</a>
                </div>
            </div>
            <ul class="navbar__links" ref="navbarLinks">
                <div class="basic">
                    <li>
                        <a href="" class="navbar__single-link">SENT</a>
                    </li>
                    <li>
                        <a href="" class="navbar__single-link">PENDING</a>
                        </li>
                    <li>
                        <a href="" class="navbar__single-link">FAILED</a>
                    </li>
                    <li>
                        <a href="" class="navbar__single-link">CONTACT US</a>
                    </li>
                </div>
                <div class="auth">
                    <li>
                        <a href="" class="navbar__single-link">LOGIN</a>
                    </li>
                    <li>
                        <a href="" class="navbar__single-link">REGISTER</a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
name: "SideBar",
    methods: {
        navbarBtn(){
            let value = this.$refs.navbarLinks.classList.contains('navbar__collapse')
            if(value){
                this.$refs.navbarLinks.classList.remove('navbar__collapse')
                this.$refs.navbarBtn.classList.remove('change')
            }else{
                this.$refs.navbarLinks.classList.add('navbar__collapse')
                this.$refs.navbarBtn.classList.add('change')
            }
        }
    },
}
</script>

<style scoped>
/* .sidebar{
    margin: 0px 19px 0px 17px;
} */

ul{
    list-style-type: none;
    overflow: inherit;
    justify-content: space-between;
}

.navbar__links{
    display: flex;
}

.basic{
    display: flex;
    font-weight: 900;
}

.auth{
    display: flex;
    justify-content: flex-end;
    font-weight: 900;
    /* /* float: right; */
}

li a{
    text-decoration: none;
    display: block;
    color:  #6baa75;
    text-align: center;
    padding: 14px 16px;
}

li a:hover{
    background-color: #111;
}

.navbar__header{
    display: none;
}

@media screen and (max-width: 600px) {
  .basic {
    display: flex;
    flex-direction: column;
  }
  .sidebar{
      margin: 0px;
  }

  .auth{
      display: none;
  }

    .navbar__header {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 1rem;
        background: #545454;
        border-bottom: 0.3rem solid #6baa75;
    }

    .navbar__btn {
        align-self: center;
        border: 5px solid #6baa75;
        cursor: pointer;
    }
    
    .navbar__btns {
        align-self: center;
        font-weight: 900;
        background: #545454;
    }

    .log_link{
        text-decoration: none;
        margin: 10px;
        background: #545454;
        color: #6baa75;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 30px;
        height: 5px;
        margin: 0.5rem;
        background: #6baa75;
        transition: all 2s ease;
    }

    /* .change .bar1 {
        transform: rotate(-45deg);
        translate: -10px, 10px;
    } */


    .change .bar3 {
        transform: rotate(90deg);
        translate: -7px, -8px;
    }

    .navbar__links {
        list-style-type: none;
        transition: all 2s ease;
        /**/
        height: 0;
        overflow: hidden;
    }

    .navbar__collapse {
        height: 250px;
    }

    .navbar__single-link {
        display: block;
        background: #69747c;
        padding: 1rem;
        font-size: 1.5rem;
        text-decoration: none;
        text-transform: capitalize;
        color: #6baa75;
        transition: all 1s ease;
        cursor: pointer;
    }

    .navbar__single-link:hover {
        padding-left: 1.5rem;
        background: #545454;
    }

    header {
        min-height: calc(100vh - 91.8px);
        background: url();
    }
}

@media screen and (max-width: 992px) {
  
}
</style>