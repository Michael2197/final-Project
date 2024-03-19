<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add products</title>
</head>
<style>
    .AP{
        position: absolute;
        width: 600px;
        height: 380px;
        left: 750px;
        top: 290px;
        background-color: aqua;
        border-radius: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .submit{
        position: absolute;
        width: 80px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        background-color: black;
        color: white;
    }
</style>
<body>
    <x-app-layout>
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $errors)
               <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="AP">
        <form method="post" action="{{ route('addproduct') }}" enctype="multipart/form-data">
            @csrf
             <input type="text" name="fname" placeholder=" product name ...">
            <br>
            <br>
            <input type="text" name="fcontent" placeholder=" product description ...">
            <br>
            <br>
            <input type="text" name="fprice" placeholder=" product price ...">
            <br>
            <br>
            <input type="file" name="fimg">
            <br>
            <br>
            <div class="submit">
            <input  type="submit" value="Submit">
            </div>
        </form>
     </div>
     </x-app-layout>

</body>
</html>
