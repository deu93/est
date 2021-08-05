<header class="header">
    <div class="container">
        <nav class="nav">
            <img src="images/logo.png" alt="I want code" class="logo">
            <ul class="menu">
                <li>
                    <a href="/">
                         Главная
                    </a>
                </li>
                <li>
                    <a href="#">
                        Портфолио 
                    </a>
                </li>
                <li>
                    <a href="#">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="#">
                        Обратная связь
                    </a>
                </li>
                
            </ul>
            <div class="auth">
                <ul>
                    @auth()
                    <li>
                        <a href="#">{{ auth()->user()->name }}</a>
                    </li>
                    <form action="/logout" class="logout" method="POST">
                        @csrf
                        <button type="submit">Выйти</button>
                    </form>
                    @endauth
                    @guest
                        <li>
                        <a href="/login">Войти</a>
                        </li>
                        <li>
                            <a href="/register">Регистрация</a>
                        </li>  
                    @endguest
                    
                </ul>
            </div>
        </nav>