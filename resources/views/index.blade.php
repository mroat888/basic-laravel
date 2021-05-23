@extends('master')

@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@endsection('meta')

@section('content')
    <h1>This is Index.blade</h1>
    <h2>Hello, {{ $name }}</h2>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, tempore laboriosam expedita cumque quod excepturi magni quam minima a, et rem officiis unde culpa! Quae laudantium ullam minus pariatur modi!
    </p>
@endsection('content')