@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <a href="{{ url('/home') }}" class="btn btn-danger">Home</a>

        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
            
                <form action="{{ url('/update', $data->id) }}" method="post">
                    @csrf
                    <input type="text" name="lastname" class="form-control" value="{{$data->lastname}}">
                    <input type="text" name="firstname" class="form-control my-3" value="{{$data->firstname}}">
                    <input type="number" max="99" name="age" class="form-control" value="{{$data->age}}">
                    <input type="text" name="hobiy" class="form-control my-3" value="{{$data->hobiy}}">
                    <textarea class="form-control" name="description" id="" cols="75" rows="5">{{$data->description}}</textarea>
                    <input type="email" name="email" class="form-control my-3" value="{{$data->email}}">
                    <input type="number" name="number" class="form-control" value="{{$data->number}}">
                    <input type="text" name="degree" class="form-control my-3" value="{{$data->degree}}">
                    <input type="text" name="staj" class="form-control" value="{{$data->staj}}">
                    <input type="text" name="courses" class="form-control" value="{{$data->courses}}">
                    <input type="text" name="address" class="form-control" value="{{$data->address}}">
                    <input type="text" name="work" class="form-control my-3" value="{{$data->work}}">
                    <textarea class="form-control" name="message" id="" cols="75" rows="5">{{$data->message}}</textarea>
                    <input type="text" name="telegramlink" class="form-control my-3" value="{{$data->telegramlink}}">

                    <input type="submit" class="btn btn-primary mt-3" value="submit">

                </form>

            </div>
        </div>

    </div>
    
</body>
</html>
@endsection