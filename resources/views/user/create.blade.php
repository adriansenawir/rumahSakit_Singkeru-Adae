<!-- resources/views/auth/user/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create User</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email
