<template>
    <div class="container">
        <div class="table">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Numbers</th>
                    <th>Message</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Created At</th>
                    <th>Scheduled Delivery Time</th>
                </tr>
                </thead>
                <tbody>    
                <tr>
                    <td>{{id}}</td>
                    <td>{{Name}}</td>
                    <td>{{Phone_numbers}}</td>
                    <td>{{Message}}</td>
                    <td>{{From}}</td>
                    <td>{{To}}</td>
                    <td>{{Created_at}}</td>
                    <td>{{Schedule}}</td>
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
            Name: 'none',
            Phone_numbers: 'none',
            Message: 'none',
            From: 'none',
            To: 'none',
            Created_at: 'none',
            Schedule: 'none'
        }
    },
    methods: {
        async read(){
            const data = axios.get('/api/userdirectories/',{
                id: this.id,
                name: this.Name,
                phone: this.Phone_numbers,
                message: this.Message,
                created_at: this.Created_at,
                timezonestamp: this.Schedule,

            })
            .then(response => {
                    // this.phone = response.json()
                    console.log(response)
                })
            // data.forEach(users_directory => this.users_directory.push(new UserDirectory(users_directory)));
            console.log(data)
        }
    },

    mounted() {
        this.read()
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
    td:nth-of-type(5):before{content: "From:";}
    td:nth-of-type(6):before{content: "To:";}
    td:nth-of-type(7):before{content: "Created At:";}
    td:nth-of-type(8):before{content: "Scheduled Delivery Time:";}
}
</style>