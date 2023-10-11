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
            <p>会社名<input type="text"></p>
            <p>店舗名<input type="text"></p>
            <p>住所<input type="text"></p>
            <p>メールアドレス<input type="text"></p>
            <p>電話番号<input type="text"></p>
            <p>タグ検索</p>
            <select name="tag">
                <option value="supermarket">スーパー</option>
                <option value="cafe">カフェ</option>
                <option value="convenience_store">コンビニ</option>
                <option value="farming">農作/農園</option>
            </select>
        </div>
        <p><a href="/StorePage">店舗ページ</a></p>
        <button type="submit" name="btn">仮登録</button>
    </body>
</html>