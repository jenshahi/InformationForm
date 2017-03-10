@extends('layouts.main')
@section('content')
    <div class="row">
        <form action="/form" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">
                    Name
                </label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name: {{($errors->has('email')) ? $errors->first('email'):''}}">
            </div>
            <div class="form-group">
                <label for="">
                    Email
                </label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email: {{($errors->has('email')) ? $errors->first('email'):''}} ">
            </div>
            <div class="form-group">
                <label for="">
                    Contact
                </label>
                <input type="text" class="form-control" name="contact"  placeholder="Enter Contact No: {{($errors->has('contact')) ? $errors->first('contact'):''}}">
            </div>
            <div class="form-group">
                <label for="">
                    &nbsp;
                </label>
                <button>Submit</button>
            </div>
        </form>

        <a href="home">GO to HOME</a>
    </div>
@stop