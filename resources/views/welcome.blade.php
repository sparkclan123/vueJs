<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>    
        <style>
            .red{
                background:red;
            }
            .green{
                background:green;
            }
        </style>
    </head>
    <body>
        <div id="app">

                
            <h1 :class="className">Title</h1>

            <button @click="className='red'">red</button>
            <button @click="className='green'">green</button>



            <input type="text" v-model="message" @keydown.enter="addName">
            <button @click="addName">add</button>
            <h1>@{{message}}</h1>
            <h3>Normal Data</h3>
            <ul v-show="show">
                <li v-for="name in names">@{{name}}</li>
            </ul>
            <h3>Computed Data</h3>
            <ul>
            <li v-for="number in lessThen6Number">@{{ number }}</li>
            </ul>
        </div>
        
    </body>
    
    <script>
        var app = new Vue({
            el:'#app',
            data:{
                className:'red',

                show:true,

                message: 'Hello Vue!',
                
                names:['por','tor','pop'],

                numbers:[1,2,3,4,5,6,7,8,9,10]
            },
            methods:{
                addName(){
                    this.names.push(this.message);
                    this.message= '';
                    // alert('hello');
                }
            },
            computed:{
                lessThen6Number(){
                    return this.numbers.filter((number)=>{
                        // return number < 6;
                        return number % 2 == 0;
                    });
                }
            }
        });
    </script>

</html>
