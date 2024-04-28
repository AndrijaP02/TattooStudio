@extends('master')
<link rel="stylesheet" href="{{ asset('css/profil.css') }}">
@section('title', 'Promeni Lozinku')
@section('content')
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="change-password">
    <div class="row-1">
        <div class="col col-md-12">
            <p><b>Promena lozinke:</b></p>
        </div>
    </div>
    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        <div class="form-group">
            <label for="current_password">Trenutna lozinka:</label>
            <input type="password" name="current_password" id="current_password" value="{{ old('current_password') }}">
        </div>
        <div class="form-group">
            <label for="new_password">Nova lozinka:</label>
            <input type="password" name="new_password" id="new_password" value="{{ old('new_password') }}">
        </div>
        <div class="form-group">
            <label for="confirm_password">Potvrdi novu lozinku:</label>
            <input type="password" name="confirm_password" id="confirm_password" value="{{ old('confirm_password') }}">
        </div>
        <button type="submit" class="btn">Promeni Lozinku</button>
    </form>
</div>
@endsection