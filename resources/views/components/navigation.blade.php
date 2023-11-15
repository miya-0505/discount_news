<div>
    <nav class="nav">
        <u class="nav_li">
            <li><a href="/">お気に入り</a></li>
            <li><a href="/">スーパー</a></li> 
            <li><a href="/">カフェ</a></li>
            <li><a href="/">コンビニ</a></li>
            <li><a href="/">農園/農作</a></li>
        </u>
        <div class="nav_search">
            <input type="text" placeholder="検索">
        </div>
        <u class="nav_login">
            <li><a href="/MyPage">マイページ</a></li>
            <li><a href="/admin/login"><div>企業ログイン・登録</div></a></li>
            <!--<li><a href="/StoreRegister"><div>新規登録</div></a></li>-->
            <li>
                ログイン中：{{ Auth::guard('admin')->user()->name ?? 'not login' }}
            </li>
            <li>
                <a href="">
                    <div>
                        <form method="post" action="{{ route('admin.logout') }}">
                            @csrf
                            <div>
                                <button onclick="event.preventDefault(); this.closest('form').submit();">ログアウト</button>
                            </div>
                        </form>
                    </div>
                </a>
            </li>
        </u>
    </nav>
</div>