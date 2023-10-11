<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>discount_news</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav>
            <u>
                <li><a href="/">お気に入り</a></li>
                <li><a href="/">スーパー</a></li> 
                <li><a href="/">カフェ</a></li>
                <li><a href="/">コンビニ</a></li>
                <li><a href="/">農園/農作</a></li>
            </u>
            <div>
                <input type="text" placeholder="検索">
            </div>
            <u>
                <li><a href="/MyPage">マイページ</a></li>
                <li><a href="/LogIn">ログイン</a></li>
            </u>
        </nav>
        <div>
            <p>メールアドレス/電話番号<input type="text"></p>
            <p>パスワード<input type="text"></p>
            <p>確認用パスワード<input type="text"></p>
        </div>
        <button type="submit" name="btn">仮登録</button>
        <p><a href="/StoreLogin">店舗ログイン</a></p>
    </body>
</html>