@extends('back.back')

@section('title', 'Person.find')

@section('menubar')
    @parent
    検索ページ
    <div class="col-sm-2">
        <a href="/person/add" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a>
    </div> 
    <a href="{{ url('/person') }}">インデックスページに戻る</a><br>

@endsection

@section('content')
<form action  ="/person/find" method="post">
    @csrf
    <input type="text" name="input" value="{{$input}}">
    <input type ="submit" value="検索">
</form>
@if(isset($item))
    <table>
        <tr><th>Data</th></tr>
                <tr>
                    <td>{{$item->getData()}}</td>     
                    <td>
                        <a href="/person/edit?id={{$item->id}}" class="btn btn-primary btn-sm">編集</a>
                        <a href="/person/del?id={{$item->id}}" class="btn btn-danger btn-sm">削除</a>
                    </td>           
                </tr>
    </table>
@endif
@endsection

@section('footer')
copyright 2022 yapiko
@endsection