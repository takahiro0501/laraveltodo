@extends('layouts.default')

@section('content')

<div class="content__wrapper">
    <h1 class="content__title">ToDo List</h1>
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>    
    @endif
    <form action="/todo/create" method="post" class="content__form">
        @csrf
        <input type="text" name="content" class="content__form-input">
        <input type="submit" value="追加" class="content__form-btn btn btn--purple" name="del">
    </form>
    <div class="content__task header">
        <div class="content__task-date">作成日</div>
        <div class="content__task-name">タスク名</div>
        <div class="content__task-upd">更新</div>
        <div class="content__task-del">削除</div>
    </div>
    @foreach ($items as $item)
    <form class="content__task" method="post">
        @csrf
        <div class="content__task-date header--small">{{$item->created_at->format('Y年m月d日 H時i分')}}</div>
        <div class="content__task-name">
            <input class="content__task-name-input" name="content" value="{{$item->content}}">
        </div>
        <div class="content__task-upd">
            <button class="btn btn--orange" type="submit" formaction="/todo/update">更新</button>
        </div>
        <div class="content__task-del">
            <button class="btn btn--green" type="submit" formaction="/todo/delete">削除</button>
        </div>
        <input type="hidden" name="id" value="{{$item->id}}">
    </form>
    @endforeach
</div>


@endsection
