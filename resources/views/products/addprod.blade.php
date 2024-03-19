<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert') }}" method="POST">
        @csrf
        product name <br><input type="text" name="prodname"><br>
        product price<br><input type="text" name="prodprice"><br>
        product company <br><input type="text" name="prodcompany"><br><br>

        <input type="submit" name="submit">

    </form>
</body>
</html>
