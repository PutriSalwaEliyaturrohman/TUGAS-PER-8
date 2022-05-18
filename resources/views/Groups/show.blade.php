@extends('layouts.app')

@section('title', 'cobaaaa')

@section('content')
    <div class="card">
        <div class="card-body">
        <h3>Nama Group : {{ $groups['name'] }}</h3>
        <h3>Description : {{ $groups['description'] }}</h3>
        </div>
    </div>
@endsection