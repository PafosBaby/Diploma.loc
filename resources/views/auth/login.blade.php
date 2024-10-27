
@extends('layouts.app')

@section('content')
<div class="row justify-content-center mb-100 mt-100 ">
    <form action="{{route('login.auth')}}" method="POST" class="tp-testimonial-two-form-wrapper col-md-6">
        <h2 class="tp-testimonial-form-title">Вход  <span>Аккаунт</span></h2>
        @csrf
            <div class="input-field form-group mb-15 ">
                <input type="text" placeholder="Your name" name="name" id="name" class="fom-control">
            </div>
            <div class="input-field form-group mb-15">
                <input type="password" placeholder="Password" name="password"  id="password" class="fom-control">
            </div>
            <div class="input-field form-group">
                <button class="btn yellow-btn">Login</button>
            </div>
    </form>
</div>

@endsection
