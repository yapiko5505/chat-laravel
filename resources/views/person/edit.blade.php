@extends('back.back')

@section('title', 'Person.Edit')

@section('menubar')
    @parent
    編集ページ
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

<form action="/person/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>name:</th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        <tr><th>mail:</th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
        <tr><th>work:</th><td><input type="text" name="work" value="{{$form->work}}"></td></tr>
        <tr><th></th><td><input type="submit" value="編集"></td><tr>
    </table>
</form>
@endsection

@section('footer')
copyright 2022 yapiko
@endsection