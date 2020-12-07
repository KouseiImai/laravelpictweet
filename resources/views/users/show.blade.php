@extends('layouts.tweets')

@section('content')
  <div class="contents row">
    @foreach ( $tweets as $tweet )
      <p>{{ $tweet->user->name }}さんの投稿一覧</p>
      @break
    @endforeach
    @foreach ( $tweets as $tweet )
      <div class="content_post" style="background-image: url({{ $tweet->image }});">
        <div class="more">
          <span><img src="/image/arrow_top.png"></span>
            <ul class="more_list">
              <li>
                <a class="button-show" href="/tweets/show/{{ $tweet->id }}">詳細</a>
              </li>
              <li>
                <a class="button-edit" href="/tweets/edit/{{ $tweet->id }}">編集</a>
              </li>
              <li>
                <form class="form-delete" action="/tweets/delete/{{ $tweet->id }}" method="post">
                  @csrf
                  <input class="submit-button-delete" type="submit" value="削除" >
                </form>
              </li>
            </ul>
        </div>
        <p>{{ $tweet->text }}</p>
        <span class="name">
          <a href="/tweets/show/user/{{ $tweet->user->id }}"><span>投稿者</span>{{ $tweet->user->name }}</a>
        </span>
      </div>
    @endforeach
  </div>
@endsection