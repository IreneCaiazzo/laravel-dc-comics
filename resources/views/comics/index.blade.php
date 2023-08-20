@extends('layouts.base')

@section('contents')
    <h1>DC Comics</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">thumb</th>
                <th scope="col">price (Euro)</th>
                <th scope="col">series</th>
                <th scope="col">sale date</th>
                <th scope="col">type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                
                <tr>
                <th scope="row">{{$comic->title}}</th>
                <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>
                    <a class="btn btn-primary" href="">View</a>
                    <a class="btn btn-warning" href="">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
                </td>
                </tr>
            @endforeach
        
        </tbody>
    </table>
@endsection