<head>
    <link rel="stylesheet" href="{{ asset('/CSS/my_page.css') }}" >
</head>
<x-index-layout>
    <div class="container">
        <main>
            <img class="icon" src="{{ asset('img/peple.png')}}">
        </main>
        <aside>
            <div class="text">
                <p>性</p>
                <input class="text_input" type="text">
            </div>
            
            <div class="text">
                <p>名</p>
                <input class="text_input" type="text">
            </div>
            
            <div class="text">
                <p>メールアドレス</p>
                <input class="text_input" type="text">
            </div>
            
            <div class="text">
                <p>電話番号</p>
                <input class="text_input" type="text">
            </div>

            <div class="text">
                <p>自宅住所</p>
                <input class="text_input" type="text">
            </div>
            
            <div class="text">
                <p>勤務地</p>
                <input class="text_input" type="text">
            </div>
            
            <button type="submit" name="btn">保存</button>
        </aside>
    </div>
</x-index-layout>