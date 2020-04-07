<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Info</h3>
    ID   ->{{$data->id}}<br>
    Name ->{{$data->name}}<br>
    Email->{{$data->email}}<br>    
    Phone->{{$data->phone}}<br>
    <h3>Address</h3>
    @if ($address !== null)
    Street :: {{$address->street}}<br>
    City :: {{$address->city}}<br>
    @else
    <a href="{{route('createAddress',$data->id)}}">Add Address</a><br>        
    @endif
    <a href="{{route('employee.edit',$data->id)}}">Edit</a>
    
</body>
</html>