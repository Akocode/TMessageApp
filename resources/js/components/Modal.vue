<template>
    <div class="container">
        <!-- <button id="myBtn" ref="myBtn" @click="open">Open Modal</button> -->
        <!-- <div id="myModal" class="modal" ref="myModal">
            <div class="modal-content">
                <span class="close" ref="close" @click="close">&times;</span>
                <p>Some text in the Modal..</p>
            </div>
        </div> -->
    </div>
</template>

<script>
export default {
    // name: Modal,
    data() {
        return {
            
        }
    },

    methods: {
        // open(){
        //     var modal = this.$refs.myModal
        //     modal.style.display = "block"
        // },

        // close(){
        //     var modal = this.$refs.myModal
        //     // var span = this.$refs.close
        //     modal.style.display = "none"
        //     // window.onclick = function (event) {
        //     //     if(event.target == modal){
        //     //         modal.style.display = "none"
        //     //     }
        //     // }
        // }
    }
}
</script>

<style scoped>
/* .modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} */
</style>