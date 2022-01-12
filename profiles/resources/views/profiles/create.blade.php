@extends('layouts.app')

@section('content')

<div class="wrapper create-profile">
    <h1>Create new profile</h1>
    @if ($errors->any())
        <div class='alert-message'>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('profiles.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone">
    <label for="role">Role:</label>
    <select name="role" id="role">
        <option value="admin">Admin</option>
        <option value="power user">Power user</option>
        <option value="user">User</option>
    </select>
    <input type="submit" name="submit"></input>
    </form>
    <br><a href="{{ route('profiles.index') }}">Back to Profile Overview</a>
</div>

@endsection('content')