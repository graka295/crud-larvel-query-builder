@extends('layout/content')
@if (isset($user))
    @section('title', 'Update data')
@else
    @section('title', 'Add data')
@endif
@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif    
        <form method="POST" action="{{ url('user/post', ['id' => $user->id]) }}">
            {{ csrf_field() }}
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." value="{{ old('name',$user->name) }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." value="{{ old('email',$user->email) }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Your username.." value="{{ old('username',$user->username) }}">
            @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                        
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Your password..">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror                        
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection