<x-index-layout>
    <main>
        <div>
            <div>
                <img src="{{ asset('img/peple.png')}}">
            </div>
            <div>
                <p>会社名<input type="text"></p>
                <p>店舗名<input type="text"></p>
            </div>
            <div>
                <p>メールアドレス<input type="text"></p>
                <p>電話番号<input type="text"></p>
            </div>
            <div>
                <p>会社住所<input type="text"></p>
                <p>勤務地<input type="text"></p>
            </div>
        </div>
        <div>
            <div>
                <img src="{{ asset('img/store.png')}}">
            </div>
            <div>
                <p>店舗紹介</p>
                <p><textarea cols="500" rows="10"></textarea></p>
                <div>
                    <p>条件</p>
                    <input type="checkbox" name="tag[]" value="drive_thru">ドライブスルーあり
                    <input type="checkbox" name="tag[]" value="credit">クレジット決済可能
                    <input type="checkbox" name="tag[]" value="50%OFF">最大50％OFF
                    <input type="checkbox" name="tag[]" value="coupon">クーポン発行
                    <input type="checkbox" name="tag[]" value="open_24hours">24時まで営業
                    <input type="checkbox" name="tag[]" value="QR">QR決済可能
                    <input type="checkbox" name="tag[]" value="near_the_station">駅近
                </div>
                <div>
                    <p>カテゴリー</p>
                    <input type="checkbox" name="tag[]" value="Supermarket">スーパー
                    <input type="checkbox" name="tag[]" value="cafe">カフェ
                    <input type="checkbox" name="tag[]" value="convenience_store">コンビニ
                    <input type="checkbox" name="tag[]" value="restaurant">飲食店
                    <input type="checkbox" name="tag[]" value="farming">農作
                    <input type="checkbox" name="tag[]" value="farm">農園
                    <input type="checkbox" name="tag[]" value="other">その他
                </div>
            </div>
        </div>
        <button type="submit" name="btn">保存</button>
    </main>
</x-index-layout>