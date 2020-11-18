<template>
    <div class="container">
        <div id="myModal" class="modal" ref="myModal">
            <div class="modal-content">
                <span class="close" ref="close" @click="close">&times;</span>
                <p>Current Time is: {{date}}</p>
                <div class="dates">
                    <input type="date" class="date">
                    <input type="time" class="time">
                    <div class="dates-btn">
                        <button @click="close">SET TIME</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="snackbar" ref="snackbar"> </div>
        <!-- <div id="snackbar" ref="snackbars" :class="{'show': isActive }">Message Sent</div> -->
        <form class="form_submit">
            <div class="name">
                <label for="name" class="name_label">Name/Phone Number:</label>
                <input class="name_input" v-model="name">
            </div>
            <div class="phone">
                <label for="phone" class="phone_label">Receipent(s) Number:</label>
                <textarea name="" id="" cols="45" rows="13" v-model="phone"></textarea>
                <!-- <input type="tel" class="phone_input" placeholder="seperate multiple numbers with ,"> -->
            </div>
            <div class="message">
                <label for="message" class="message_label">Message: </label>
                <textarea name="" id="" cols="30" rows="10" class="message_text" v-model="message"></textarea>
            </div>
            <div class="btn_container">
                <button class="send" @click.prevent="snackBar">SEND NOW</button>
                <button class="schedule" id="myBtn" ref="myBtn" @click.prevent="open">SCHEDULE MESSAGE</button>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    name: 'Main',
    data() {
        return {
           name: '',
           phone: [],
           message: '',
        //    timezonestamp: '',
           date:  new Date
        }
    },
    methods:{
        async snackBar(){
            if(this.name == '' || this.phone == '' || this.message == ''){
                var y = this.$refs.snackbar
                y.innerHTML = 'Message Not Sent. Please Fill in All Fields'
                y.className = 'show'
                setTimeout(
                    function() {
                        y.className = y.className.replace('show','')
                    }, 3000);
            }else{
                const send = axios.post('/api/userdirectories/',{
                    name: this.name,
                    phone: this.phone,
                    message: this.message,
                    // timezonestamp: this.timezonestamp

                })
                .then(function (response){
                    // var x = this.$refs.snackbar
                    // x.innerHTML = 'Message not Sent'
                    // x.className = 'show'
                    // setTimeout(
                    //     function() {
                    //         x.className = x.className.replace('show','')
                    //     }, 3000);
                })
                .catch(function(error){
                    console.log(error);
                    if(error.response.status === 422){
                        // window.location = '/me'
                    }else if(error.request){

                    }else{

                    }
                });

                if(send){
                    var x = this.$refs.snackbar
                    x.innerHTML = 'Message Sent'
                    x.className = 'show'
                    setTimeout(
                        function() {
                            x.className = x.className.replace('show','')
                        }, 3000);
                }
            }
        },

        open(){
            var modal = this.$refs.myModal
            modal.style.display = "block"
        },

        close(){
            var modal = this.$refs.myModal
            // var span = this.$refs.close
            modal.style.display = "none"
            // window.onclick = function (event) {
            //     if(event.target == modal){
            //         modal.style.display = "none"
            //     }
            // }
        }
    }
}
</script>

<style scoped>
.container{
    height: 85vh;
    
}

.name{
    display: flex;
    flex-direction: column;
    margin: 10px;
}

.phone{
    display: flex;
    flex-direction: column;
    margin: 10px;
}

.message{
    display: flex;
    flex-direction: column;
    margin: 10px;
}

.btn_container{
    display: flex;
    justify-content: space-between;
    margin: 10px;
}

input{
    height: 20px;
    /* width: 50%; */
    padding: 5px;
    background-color: #ECEBE4;
    border: none;
    border-radius: 16px 0px 16px 0px;
    font-size: 15px;
    outline: none;
    transition: 0.4s;
}

textarea{
    padding: 5px;
    background-color: #ECEBE4;
    border: none;
    outline: none;
    border-radius: 16px 0px 16px 0px;
    transition: 0.4s;
}

button{
    /* border: none; */
    border-radius: 5px;
    padding: 5px 20px;
    font-weight: bold;
    cursor: pointer;
    /* outline: none; */
}

button:hover{
    background-color: aqua;
}

input:focus{
    border-radius: 0px 16px 0px 16px;
}

textarea:focus{
    border-radius: 0px 16px 0px 16px;
}

#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px; 
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

.modal {
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
  background-color: #333;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  color:  #fff;
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
}

.dates input{
    border-radius: 0;
    margin: 10px;
}

.dates{
    display: flex;
    flex-direction: column;
}

.dates button{
    width: 50%;
    height: 40px;
    /* border-radius: 0;
    padding: 0; */   
}

.dates-btn{
    display: flex;
    justify-content: center;
}
</style>