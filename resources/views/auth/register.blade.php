@extends('layouts.app')
@section('content')
<form action="/register" method="POST">
    @csrf
    <div class="container-register">
      <h1>Регистрация</h1>
      <p>Для регистрации заполните поля</p>
      <hr>

      <label for=text"><b>Ф. И. О.</b></label>
      <input type="text" placeholder="Введите ваше имя" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="error-text">
                Поле Ф. И. О. необходимо заполнить
            </div>
        @enderror
      <label for=text"><b>Имя пользователя</b></label>
      <input type="text" placeholder="Введите ваше имя пользователя" name="username" value="{{ old('username') }}" >
        @error('username')
            <div class="error-text">
                Поле Имя пользователя необходимо заполнить
            </div>
        @enderror
  
      <label for="email"><b>Почта</b></label>
      <input type="text" placeholder="Введите вашу почту" name="email" value="{{ old('email') }}">
      @error('email')
      <div class="error-text">
          Поле Почта необходимо заполнить
      </div>
      @enderror      

      <label for="password"><b>Пароль</b></label>
      <input type="password" placeholder="Введите пароль" name="password" >
  
      @error('password')
      <div class="error-text">
          @if ($message == "The password confirmation does not match.")
              Пароли не совпадают
          @else
              Поле Пароль необходимо заполнить
          @endif
          
      </div>
      @enderror

      <label for="password_confirmation"><b>Подтверждение пароля</b></label>
      <input type="password" placeholder="Введите ваш пароль снова" name="password_confirmation" >

      @error('password_confirmation')
            <div class="error-text">
                {{ $message }}
            </div>
      @enderror

      <hr>
  
      <p class="policy">Создавая аккаунт вы подтверждаете <a href="#">Политику конфиденциальности и Условия использования</a>.</p>
      <button type="submit" class="registerbtn">Зарегистрироваться</button>
    </div>
  
    <div class="container signin">
      <p>Уже есть аккаунт? <a href="#">Войти</a>.</p>
    </div>
  </form>
@endsection