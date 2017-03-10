@extends('layouts.main')
@section('content')
    <div class="row">
        <h3> Show </h3>
        <form action="/show/{{ $show->id }}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">
                    Name
                </label>
                <input type="text" class="form-control" name="name" value="{{$show->name}}" placeholder="Enter Name: {{($errors->has('name')) ? $errors->first('name'):''}}">
            </div>
            <div class="form-group">
                <label for="">
                    Email
                </label>
                <input type="text" class="form-control" name="email" value="{{$show->email}}" placeholder="Enter Email: {{($errors->has('email')) ? $errors->first('email'):''}}">
            </div>
            <div class="form-group">
                <label for="">
                    Contact
                </label>
                <input type="text" class="form-control" name="contact" value="{{$show->contact}}" placeholder="Enter Contact No: {{($errors->has('contact')) ? $errors->first('contact'):''}}">
            </div>
            <input type="hidden" method="put">
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            <div class="form-group">
                <label for="">
                    &nbsp;
                </label>
                <button>Edit</button>
            </div>
        </form>

        <a href="../home">GO to HOME</a>
    </div>
@stop