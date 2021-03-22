<body>
    <!-- Navigation-->
        <header>
            <div class="logo">
                <a href="#">ボドゲライフ</a>
            </div>
            <nav>
                <ul>
                @guest
                    @if (Route::has('login'))
                     <li>
                        <a class="header-button header-login" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                     </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a class="header-button header-post" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                        </li>
                    @endif
                @else
                    <li>
                        <a class="header-button header-login" href="{{ route('login') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li>
                        <a class="header-button header-login" href="{{ route('logout') }}">{{ __('ログアウト') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @endguest
                </ul>
            </nav>
        </header>

    <!--新着一覧-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container" style="margin-top: 70px">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">新着ボードゲーム</h2>
                </div>
                
                <div class="row">
                    {{-- @foreach($games as $game) --}}
                    {{-- @if($game->image_path) --}}
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item" style="text-align:center">
                            {{-- <a class="portfolio-link" href="{{ route('games.show', $game->id) }}"> --}}
                                {{-- <img src="{{ $game->image_path }}" height="200" width="200"> --}}
                            </a>
                            <div class="portfolio-caption" style="margin-top:10px">
                                {{-- <div class="portfolio-caption-heading">{{ $game->name }}</div> --}}
                                {{-- <div class="portfolio-caption-subheading text-muted">プレイ時間：{{ $game->play_time }}分</div> --}}
                                {{-- <div class="portfolio-caption-subheading text-muted">人数：{{ $game->players_minimum }}~{{ $game->players_max }}人</div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                    {{-- @endforeach --}}
                </div>
                
            </div>
        </section>
<body>

<style type="text/css">
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: 'ヒラギノ角ゴシック','Hiragino Sans','Meiryo UI',sans-serif;
  background-color: #f0f8ff;
}

header {
  height: 60px;
  width: 100%;
  padding: 0px 15px;
  background-color: #f1f1f1;
  position: fixed;
  top: 0;
  z-index: 10;
  display: flex;
}

.logo {
  font-size: 25px;
}

nav {
  margin: 0 0 0 auto;
}

ul {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
}

a {
  color: #000000;
  text-decoration: none;
  display: block;
  line-height: 60px;
  padding: 0 20px;
  position: relative;
}

li ::after {
  position: absolute;
  bottom: 10px;
  left: 0;
  content: '';
  width: 100%;
  height: 2px;
  background: #000000;
  transform: scale(0, 1);
  transform-origin: center top;
  transition: transform 0.75s;
}

li :hover::after {
  transform: scale(1, 1);
}
</style>