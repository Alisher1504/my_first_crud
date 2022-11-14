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
            <div class="col-md-6 border py-3">
            
                <form action="{{ url('/crudadd') }}" method="post">
                    @csrf
                    <input type="text" name="lastname" class="form-control" placeholder="lastname">
                    <input type="text" name="firstname" class="form-control my-3" placeholder="firstname">
                    <input type="number" max="99" name="age" class="form-control" placeholder="age">
                    <input type="text" name="hobiy" class="form-control my-3" placeholder="hobiy">
                    <textarea class="form-control" name="description" id="" cols="75" rows="5" placeholder="description"></textarea>
                    <input type="email" name="email" class="form-control my-3" placeholder="email">
                    <input type="number" name="number" class="form-control" placeholder="number">
                    <input type="text" name="degree" class="form-control my-3" placeholder="degree">
                    <input type="text" name="staj" class="form-control" placeholder="staj">
                    <input type="text" name="courses" class="form-control my-3" placeholder="courses">
                    <input type="text" name="address" class="form-control" placeholder="address">
                    <input type="text" name="work" class="form-control my-3" placeholder="work">
                    <input type="hidden" name="user_id" class="form-control my-3" value="{{ Auth::user()->id }}" placeholder="work">

                    <textarea class="form-control" name="message" id="" cols="75" rows="5" placeholder="message"></textarea>
                    <input type="text" name="telegramlink" class="form-control my-3" placeholder="telegramlink">

                    <input type="submit" class="btn btn-primary text-center" value="submit">

                </form>

            </div>
        </div>

    </div>
    
</body>
</html>
@endsection