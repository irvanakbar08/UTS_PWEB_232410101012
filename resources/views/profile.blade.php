@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

    <div class="profile-container">
        <div class="profile-image">
            <img src="{{ asset('img/admin.png') }}" alt="Profile Photo">
        </div>

        <div class="form-group">
            <label>USERNAME</label>
            <input type="text" value="{{ $username }}" readonly>
        </div>

        <div class="form-group">
            <label>PASSWORD</label>
            <input type="password" value="{{ $password }}" readonly>
        </div>

        <button class="btn-edit">EDIT</button>
    </div>
@endsection
