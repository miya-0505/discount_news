<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

        @if ($errors->any())  {{--  エラーがあれば出力する --}}
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <form method="POST" action="/admin/log">  {{--  routeはここと同じ --}}
            @csrf
            <label for="email">Mail</label>
            <input type="text" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="login"/>
        </form>
        
        <button>
            <a href="/admin/registers">新規登録</a>
        </button>
    </body>
</html>
