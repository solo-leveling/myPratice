<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>For Address</h3>
<form action="{{route('store',$id)}}" method="post">
    @csrf
    <input type="text" name="street" id=""><br>
    <input type="text" name="city" id=""><br>
    <input type="submit" value="Submit">
    </form>
</body>
</html>