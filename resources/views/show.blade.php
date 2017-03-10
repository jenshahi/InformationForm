@extends('layouts.main')
@section('content')

    <div class="row">
        <h2>Showing BY ID </h2>

        <table class="table">

            <tr>
                <th>ID = {{ $show->id }} </th>
            </tr>
            <tr>
                <td>{{ $show->name }}</td>
            </tr>
            <tr>
                <td>{{ $show->email }}</td>
            </tr>
            <tr>
                <td>{{ $show->contact }}</td>
            </tr>

        </table>

        <a href="../home">GO to HOME</a>

    </div>
@stop