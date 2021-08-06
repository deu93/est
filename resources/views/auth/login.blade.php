@extends('layouts.app')
@section('content')
@if (session('status'))
    {{ session('status')}}
@endif
<form action="/login" method="POST">
    @csrf
    <div class="container-register">
      <h1>Войти</h1>
      <hr>
      <label for="email"><b>Почта</b></label>
      <input type="text" placeholder="Введите вашу почту" name="email" required>
      @error('email')
      <div class="error-text">
          Неправильные данные
      </div>
        @enderror
      <label for="password"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" required>
      @error('email')
      <div class="error-text">
          Неправильные данные
      </div>
        @enderror
      <hr>
      <input type="checkbox" name="remember" id="remember">
      <label for="remember">Запомнить меня</label>
      <button type="submit" class="registerbtn">Войти</button>
    </div>
  
    <div class="container signin">
      <p>У вас ещё нет аккаунта? <a href="/register">Зарегистрироваться</a>.</p>
    </div>
  </form>
@endsection