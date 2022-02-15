@extends('back.back')

@section('title', 'Board.Add')

@section('menubar')
    @parent
    メッセージ作成ページ
@endsection

@section('content')
@if (count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/board/add" method="post">
    <table>
        @csrf
        <tr><th>persons_id:</th><td><input type="number" name="persons_id"></td></tr>
        <tr><th>title:</th><td><input type="text" name="title"></td></tr>
        <tr><th>message:</th><td><input type="text" name="message"></td></tr>
        <tr><th></th><td><input type="submit" value="登録"></td><tr>
    </table>
</form>
@endsection

@section('footer')
copyright 2022 yapiko
@endsection