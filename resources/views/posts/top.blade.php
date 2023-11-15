<head>
    <link rel="stylesheet" href="{{ asset('/CSS/index.css') }}" >
</head>
<x-index-layout>
    <div class="container">
        <main>
            <div id="map" style="height:500px; width:800px;"></div>
        
            <form>
                <input type="text" name="address" value="静岡県浜松市早出町234-2" id="address">
                <button type="button" id="button">検索</button>
            </form>
        
            <ul>
                <li>lat: <span id="lat"></span></li>
                <li>lng: <span id="lng"></span></li>
            </ul>
        
            <script src="{{ asset('/js/map.js') }}"></script>
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
            @foreach ($adminusers as $adminuser)
            <div class="store_container">
                 <div class="store_contents">
                    <img class="store_img" src="{{ asset('img/store.png')}}">
                    <P>TITLE</P>
                    <ul class="store_li">
                        <li>住所</li>
                        <li>営業時間</li>
                        <li>ドライブスルー</li>
                    </ul>
                    @foreach ($items as $item)
                    @if($item->admin_user_id == $adminuser->id)
                        <p><a href="/posts/{{ $item->id }}">{{ $item->name }}</a></p>
                    @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </aside>
    </div>
</x-index-layout>