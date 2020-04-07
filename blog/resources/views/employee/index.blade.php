<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('employee.create')}}">Create</a>
    <h1>List</h1>
    @foreach ($all as $item)
        {{$item->name}}<br>
        {{$item->email}}<br>
        {{$item->phone}}<br>
        <a href="{{route('employee.show',$item->id)}}">show</a>
        <form action="{{route('employee.destroy',$item->id)}}" method="post">
            {{method_field('DELETE')}}
        @csrf
        <input type="submit" value="Delete">
        </form>
        <hr>
    @endforeach
</body>
</html> 