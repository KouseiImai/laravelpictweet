@extends('layouts.tweets')

@section('content')
  <div class="contents row">
    <div class="container">
      <h3>投稿する</h3>
      @if (count($errors) > 0)
        <div>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/tweets/new" method="post">
        @csrf
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <input class="form-input" type="string" placeholder="Nickname (必須)" name="name" value="{{old('name')}}">
        <input class="form-input" type="text" placeholder="Image (必須)" name="image" value="{{old('image')}}">
        <textarea class="form-textarea" type="string" placeholder="text (必須)" name="text" rows="10">{{old('text')}}</textarea>
        <input  class="submit-button-new" type="submit" value="SEND">
      </form>
    </div>
  </div>
@endsection