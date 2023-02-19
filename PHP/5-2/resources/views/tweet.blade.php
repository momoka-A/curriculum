@extends('layouts.admin')
@section('title','つぶやき')

@section('content')
    <form action="{{ url('tweet') }}" method="post" enctype="multipart/form-data">
        
        <div class="container">
            <div class="home border">
                <div>
                    <span>ホーム</span>
                </div>
            </div>
            <div class="border">
                <div>
                    <div class="textbox-area">
                        <input type="text" class="form-control" name="tweet" autocomplete="off" placeholder="いまどうしてる？">
                        @if(count($errors) > 0)
                            <ul class="mt-2 alert alert-danger">
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="btn-area">
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-light" value="つぶやく">
                    </div>
                </div>
            </div>
        </div>
        @foreach($tweets as $tweet)
        <div class="container">
            <div class="mt-2 p-3 border">
                <div class="side">
                    <div><strong><span name="user-name">{{ $tweet->user_id }}</span></strong></div>
                    <div><span name="date-time">{{ $tweet->created_at }}</div>
                </div>
                <div class="mt-3 side">
                    <div><span name="tweet-list">{{ $tweet->body }}</span></div>
                    
                        <div><a href="" class="text-danger text-decoration-none">削除</a></div>
                </div>
            </div>
        </div>
        @endforeach
    </form>
@endsection