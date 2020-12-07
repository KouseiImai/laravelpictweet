@extends('layouts.tweets')

@section('content')
  <div class="contents row">
    <div class="container">
      <h3>編集する</h3>
      @if (count($errors) > 0)
        <div>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <form action="/tweets/edit/{{ $tweet->id }}" method="post">
        @csrf
        <input class="form-input" type="string" placeholder="Nickname (必須)" name="name" value="{{$tweet->name}}">
        <input class="form-input" type="text" placeholder="Image (必須)" name="image" value="{{$tweet->image}}">
        <textarea class="form-textarea" type="string" placeholder="text (必須)" name="text" rows="10">{{$tweet->text}}</textarea>
        <input  class="submit-button-new" type="submit" value="SEND">
      </form>

    </div>
  </div>
@endsection