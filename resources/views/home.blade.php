@extends('layouts.main')
@section('content')

    <div class="row">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>

            @foreach($student as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->contact}}</td>
                <td><a href="/edit/{{$s->id}}">Edit</a></td>
                <td><a href="/delete/{{$s->id}}">Delete</a></td>
            </tr>
            @endforeach


        </table>

        <a href="/form">GO to form</a>




    </div>
@stop