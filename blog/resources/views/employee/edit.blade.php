<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>For Edit</h3>
<form action="{{route('employee.update',$data->id)}}" method="post">
    {{method_field('PUT')}}
    @csrf
    <input type="text" name="name" id="" value="{{$data->name}}"><br>
    <input type="text" name="email" id="" value="{{$data->email}}"><br>
    <input type="text" name="phone" id="" value="{{$data->phone}}"><br>
    @if ($address == null)
        
    @else
    <input type="text" name="street" id="" value="{{$address->street}}"><br>
    <input type="text" name="city" id="" value="{{$address->city}}"><br>    
    @endif
    <input type="submit" value="Update">
</form>
</body>
</html>