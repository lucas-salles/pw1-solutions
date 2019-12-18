@extends('layout')

@section('title', 'Alumni')

@section('content')
    <h1>Alumni</h1>
    <ul>
    @foreach ($alumni as $a)
        <li>Nome: {{ $a->name }} </li>
            <ul>
                <li>Email: {{ $a->email }}</li>
                <li>LinkedIn: {{ $a->linkedin }}</li>
            </ul>
    @endforeach
    </ul>
@endsection
