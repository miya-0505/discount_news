<head>
    <link rel="stylesheet" href="{{ asset('/CSS/store_info.css') }}" >
</head>
<x-index-layout>
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.827853707485!2d139.76454987640486!3d35.681240529972484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1695041029669!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="content">
            <img src="{{ asset('img/store.png')}}">
            <P>TITLE</P>
            <text>
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttext
                texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
            </text>
            <ul class="content_li">
                <li>住所</li>
                <li>営業時間</li>
                <li>ドライブスルー</li>
            </ul>
        </div>
    </div>
    <div class="goods">
        @foreach ($store_info as $item)
            <div class='post'>
                <h2 class='title'>{{ $item->name }}</h2>
                <p class='body'>{{ $item->price }}</p>
            </div>
        @endforeach
    </div>
</x-index-layout>