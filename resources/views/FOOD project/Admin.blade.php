<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <style>

        .links{
            position: absolute;
            width: 585px;
            height: 100px;
            left: 700px;
            top: 300px;
            display: flex;
            gap: 66px;
            justify-content: center;
            align-items: flex-start;
        }
         .i{
            background-color:aqua;
            width: 188px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            text-decoration: none;
            font-size: 15px;
            font-weight: bolder;
            border: 1px aqua solid;
            border-radius: 30px ;
            cursor: pointer;
        }
        .i:hover{
         background-color:aquamarine;
         font-size: 18px;
        }

    </style>
</head>
<body>
    <x-app-layout>
       <div class="links">
        <a class="i" href="{{ route('addproductview') }}">Add products</a>
        <a class="i" href="{{ route('viewproduct') }}">view products</a>
       </div>
    </x-app-layout>



</body>
</html>
