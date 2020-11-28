<template>
    <div class="container">
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number(s)</th>
                    <th>Message</th>
                    <th>Created At</th>
                    <th>Scheduled Delivery Time</th>
                </tr>
                </thead>
                <tbody>    
                <tr v-for="user in users" :key="user.id">
                    <!-- :tbl="tbl" v-for="{user,index} in users" :key="index" -->
                    <td>{{user.id}}</td>
                    <td>{{user.name}}</td>
                    <td>{{user.phone}}</td>
                    <td>{{user.message}}</td>
                    <td>{{user.created_at}}</td>
                    <td>{{user.timezonestamp}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            id: 'none',
            name: 'none',
            phone: 'none',
            message: 'none',
            created_at: 'none',
            timezonestamp: 'none',
            users: []
        }
    },
    methods: {
        async pending(){
            const data = axios.get('/api/userdirectories/'
            )
            .then(response => {
                this.users = response.data
            })
            .catch(function(error){
                console.log(error);
                if(error.response.status === 422){
                    // window.location = '/me'
                }else if(error.request){

                }else{

                }
            });
        }
    },

    mounted() {
        this.pending()
    },
}
</script>

<style scoped>
table{
    width: 100%;
    border-collapse: collapse;
}

tr:nth-of-type(odd){
    background: #eee;
}

th{
    background: #333;
    color:white;
    font-weight: bold;
}

td, th{
    padding: 6px;
    border: 1px solid #ccc;
    text-align: left;
}

/* @media only screen and(max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px), (max-width: 600px){ */
@media screen and (max-width: 600px) {
    table, thead, tbody, th, td, tr{
        display: block;
    }

    thead tr{
        position: absolute;
        top: -9999px;
        left: -9999px;
    }

    tr{
        border: 1px solid #ccc;
    }

    td{
        border: none;
        border-bottom: 1px solid black;
        position: relative;
        padding-left: 50%;
    }

    td:before{
        position: absolute;
        top: 6px;
        left: 6px;
        width: 45%;
        padding-right: 10px;
        white-space: nowrap;
    }

    td:nth-of-type(1):before{content: "ID:";}
    td:nth-of-type(2):before{content: "Name:";}
    td:nth-of-type(3):before{content: "Phone Number(s):";}
    td:nth-of-type(4):before{content: "Message:";}
    td:nth-of-type(5):before{content: "Created At:";}
    td:nth-of-type(6):before{content: "Scheduled Delivery Time:";}
}
</style>