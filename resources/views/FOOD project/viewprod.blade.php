<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view products</title>
</head>
<style>
    .tab{
        position: absolute;
        width: 1200px;
        height: 600px;
        left: 450px;
        top: 250px;
        background-color: aqua;
        border-radius: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    table{
        border: 3px seashell solid;
        height: 600px;
        width: 1200px;
        padding: 2px;
        text-align: center;
    }
   th{
    height: 90px;
    color: black;
    font-weight: bolder;
    border: 5px seashell solid;
   }
   td{
    color: brown;
    font-weight: bolder;
    border-right: 3px seashell solid;
   }
   .btn{
    background-color: seashell;
    width: 70px;
    height: 33px;
    color: black;
    border-radius: 8px;
   }
   .btn:hover{
    background-color: black;
    color: seashell;
   }

</style>
<body>
    <x-app-layout>
        <div class="tab">
         <table>
             <tr>
                <th>Id</th>
                <th>food name</th>
                <th> food content</th>
                <th>food price</th>
                <th>food img</th>
                <th>Actions</th>
            </tr>
            @foreach ($products as $food )
            <tr>
                <td>{{ $food->id }}</td>
                <td>{{ $food->food_name }}</td>
                <td>{{ $food->food_content }}</td>
                <td>{{ $food->food_price }}</td>
                <td><img src={{ $food->food_img }} alt=""/></td>
                <td>
                    <form action="{{ route('del',$food->id) }}" method="POST">
                        @csrf
                        <input class="btn" type="submit" value="Delete">
                    </form>
                    <form action="{{ route('Update',$food->id) }}" method="POST">
                        @csrf
                        <input class="btn" type="submit" value="Update">
                    </form>

                </td>

            </tr>

            @endforeach
         </table>
        </div>

     </x-app-layout>

</body>
</html>
