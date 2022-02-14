@extends('back.back')

@section('title', 'Person.Add')

@section('menubar')
    @parent
    インデックスページ
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

<form action="/person/add" method="post">
    <table>
        @csrf
        <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
        <tr><th>work:</th><td><input type="text" name="work" value="{{old('work')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="登録"></td><tr>
    </table>
</form>
@endsection

@section('footer')
copyright 2022 yapiko
@endsection