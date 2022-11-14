@extends('layouts.app')

@section('content')
<div class="container">
    
    <a href="{{ url('/home') }}" class="btn btn-danger">Home</a>

    <div class="row justify-content-center">

        <div class="col-10 border mt-5">

            <table class="table">
                <head>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>VIEW</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </head>

                <tbody>

                    @foreach($data as $key)

                    <tr>
                        <td>{{$key->id}}</td>
                        <td>{{$key->firstname}}</td>
                        <td>
                            <a class="btn btn-info text-white" href="{{ url('/viewcrud', $key->id) }}">view</a>
                        </td>
                        @if(Auth::user()->id == $key->user_id)
                        <td>
                            <a class="btn btn-primary" href="{{ url('/updatecrud', $key->id) }}">edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ url('/deletecrud', $key->id) }}">delete</a>
                        </td>
                        @endif
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

    </div>

</div>
@endsection
