<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dim-example-1</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-400 text-white font-hanken-grotesk pb-20">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b
    border-white/30">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.png') }}"
                     alt="">
            </a>
        </div>

        <div class="space-x-6 font-bold">
            <a href="/">Главная</a>
            <a href="/products">Разработки</a>
            <a href="/services">Услуги</a>
            <a href="#">Проекты</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
        </div>

{{--        @auth--}}
{{--            <div class="space-x-6 font-bold flex">--}}
{{--                <a href="/jobs/create">Post a Job</a>--}}

{{--                <form method="POST" action="/logout">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}

{{--                    <button>Log Out</button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        @endauth--}}

        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>
        @endguest
    </nav>

    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>

</body>
</html>
