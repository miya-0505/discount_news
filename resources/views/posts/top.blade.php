<head>
    <link rel="stylesheet" href="{{ asset('/CSS/index.css') }}" >
</head>
<x-index-layout>
    <div class="container">
        <main>
            <div id="map" style="height:500px"></div>
             {!! Form::open(['route' => 'result.currentLocation','method' => 'get']) !!}
        　　 {{--隠しフォームでresult.currentLocationに位置情報を渡す--}}
        　　 {{--lat用--}}
        　　 {!! Form::hidden('lat','lat',['class'=>'lat_input']) !!}
        　　 {{--lng用--}}
        　　 {!! Form::hidden('lng','lng',['class'=>'lng_input']) !!}
        　　 {{--setlocation.jsを読み込んで、位置情報取得するまで押せないようにdisabledを付与し、非アクティブにする。--}}
        　　 {{--その後、disableはfalseになるようにsetlocation.js内に記述した--}}
        　　 {!! Form::submit("周辺を表示", ['class' => "btn btn-success btn-block",'disabled']) !!}
        　　 {!! Form::close() !!}
        　　<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="{{ asset('/js/setLocation.js') }}"></script>
            <script src="{{ asset('/js/result.js') }}"></script>
            <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBmfjRN-Oxl9AMH2Si09gVdS3usd4uZA2k&callback=initMap" async defer>
	        </script>

            <div class="tag">
                <div class="tags">
                    <p>タグ検索</p>
                    <select class="tags_select" name="tag">
                    <option value="all">すべて</option>
                    <option value="baked_goods">焼き菓子</option>
                    <option value="cake">ケーキ</option>
                    <option value="side_dish">お惣菜</option>
                    <option value="bento">お弁当</option>
                    <option value="meet">お肉</option>
                    <option value="vegetables">野菜</option>
                    <option value="fruits">フルーツ</option>
                    <option value="drink">ドリンク</option>
                    </select>
                </div>
                <div class="favorite_tag">
                    <p>お気に入りタグ</p>
                    <select class="tags_select" name="favorite_tag">
                    <option value=""></option>
                    </select>
                </div>
            </div>
            
            <div class="serch">
                <div class="conditions">
                    <p>条件検索</p>
                    <div>
                        <div>
                            <input type="checkbox" name="tag[]" value="drive_thru">ドライブスルーあり
                            <input type="checkbox" name="tag[]" value="credit">クレジット決済可能
                            <input type="checkbox" name="tag[]" value="50%OFF">最大50％OFF
                        </div>
                        <div>
                            <input type="checkbox" name="tag[]" value="coupon">クーポン発行
                            <input type="checkbox" name="tag[]" value="open_24hours">24時まで営業
                            <input type="checkbox" name="tag[]" value="QR">QR決済可能
                            <input type="checkbox" name="tag[]" value="near_the_station">駅近
                        </div>
                    </div>
                </div>
                <div class="address">
                    <p>住所</p>
                    <div>
                        <input type="text" placeholder="都道府県">
                        <input type="text" placeholder="市町村">
                    </div>
                </div>
            </div>
                <button class="btn" type="submit" name="btn">検索</button>
        </main>
        <aside>
            <div class="store_container">
                 <div class="store_contents">
                    <img class="store_img" src="{{ asset('img/store.png')}}">
                    <P>TITLE</P>
                    <ul class="store_li">
                        <li>住所</li>
                        <li>営業時間</li>
                        <li>ドライブスルー</li>
                    </ul>
                    <p><a href="/StoreInfo">Store Page</a></p>
                </div>
                <div class="store_contents">
                    <img class="store_img" src="{{ asset('img/store.png')}}">
                    <P>TITLE</P>
                    <ul class="store_li">
                        <li>住所</li>
                        <li>営業時間</li>
                        <li>ドライブスルー</li>
                    </ul>
                    <p><a href="/StoreInfo">Store Page</a></p>
                </div>
                <div class="store_contents">
                    <img class="store_img" src="{{ asset('img/store.png')}}">
                    <P>TITLE</P>
                    <ul class="store_li">
                        <li>住所</li>
                        <li>営業時間</li>
                        <li>ドライブスルー</li>
                    </ul>
                   <p><a href="/StoreInfo">Store Page</a></p>
                </div>
                <div class="store_contents">
                    <img class="store_img" src="{{ asset('img/store.png')}}">
                    <P>TITLE</P>
                    <ul class="store_li">
                        <li>住所</li>
                        <li>営業時間</li>
                        <li>ドライブスルー</li>
                    </ul>
                    <p><a href="/StoreInfo">Store Page</a></p>
                </div>
            </div>
        </aside>
    </div>
</x-index-layout>