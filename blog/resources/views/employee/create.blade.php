@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="{{route('employee.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="" class="form-control">
                </div>   
                    <input type="text" name="email" id=""><br>
                    <input type="text" name="phone" id=""><br>
                    <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection