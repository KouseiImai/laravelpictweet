<header class="header">
  <div class="header__bar row">
    <h1 class="grid-6"><a href="/">PicTweet</a></h1>
    @if (Auth::check())
      <div class="user_nav grid-6">
        <span>{{ Auth::user()->name }}
          <ul class="user__info">
            <li>
              <a href="/tweets/show/user/{{ Auth::user()->id }}">マイページ</a>
              <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a>
            </li>
          </ul>
        </span>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a class="post" href="/tweets/new">投稿する</a>
      </div>
    @else
      <div class="grid-6">
        <a class="post" href="/login">ログイン</a>
        <a class="post" href="/register">新規登録</a>
      </div>
    @endif
  </div>
</header>