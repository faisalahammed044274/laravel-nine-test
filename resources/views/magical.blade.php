<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color: greenyellow;
        background: lightcoral;
    }

    a {
        color: grey;
    }
    h2{
        color: red;
    }
    ol li{
        color: #ffffff;
        border: 1px solid rgb(63, 36, 214);
        padding: 30px;
        text-shadow: #ddd;
        background: rgb(224, 17, 121);
        text-transform: uppercase
        text-decoration:none;
        display: block;
    }
</style>

<body>

    <h2>Heyy, It's Magical Blade template for frontend.</h2>
    <p>The Current Date is {{date('D d M Y')}}.</p>
    <p>Total Number is {{3+5}} </p>
    <h2>Hello {{$username}}</h2>
    <h3> {{$repoName}} </h3>
    
    <ol>
        
            @foreach ($allAnimals as $animal)
               <li>{{$animal}}</li>  <br>
            @endforeach
        
    </ol>



    <br>
    <h3><a href="/about">About</a></h3>
    <h3><a href="/">Home</a></h3>

</body>

</html>