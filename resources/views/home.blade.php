@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem delectus itaque doloremque ipsum excepturi beatae. Atque quaerat magnam maiores voluptates dicta, reprehenderit labore expedita? Culpa qui repudiandae saepe doloribus recusandae!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to sidebar</p>
@endsection