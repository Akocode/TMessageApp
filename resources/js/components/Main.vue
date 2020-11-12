<template>
    <div class="container">
        <form class="form_submit">
            <div class="name">
                <label for="name" class="name_label">Name/Phone Number:</label>
                <input type="text" class="name_input">
            </div>
            <div class="phone">
                <label for="phone" class="phone_label">Receipent(s) Number:</label>
                <textarea name="" id="" cols="45" rows="13"></textarea>
                <!-- <input type="tel" class="phone_input" placeholder="seperate multiple numbers with ,"> -->
            </div>
            <div class="message">
                <label for="message" class="message_label">Message: </label>
                <textarea name="" id="" cols="30" rows="10" class="message_text"></textarea>
            </div>
            <div class="btn_container">
                <button class="send">SEND NOW</button>
                <button class="schedule">SCHEDULE MESSAGE</button>
            </div>
        </form>
    </div>
</template>
<script>
export default {
    
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
</style>