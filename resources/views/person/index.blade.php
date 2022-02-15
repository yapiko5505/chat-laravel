@extends('back.back')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
    <div class="col-sm-2">
    <!-- @if (Auth::check()) -->
        <!-- <p>USER: {{$user->name . '(' . $user->email . ')'}}<p> -->
    <!-- @else -->
        <!-- <p>ログインしていません。<br>(<a href="/login">ログイン</a> | <a href="/register">登録</a></p>)  -->
    <!-- @endif -->
        <br><a href="/person/find" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i>検索ページ</a><br>
        <a href="/board" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i>ボードページ</a><br>
        <a href="{{ url('/home') }}">ログアウト</a> 
    </div> 

@endsection

@section('content')

<table>
    @csrf
    <tr><th>Person</th><th>Board</tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    @if ($item->board != null)
                        {{$item->board->getData()}}
                    @endif
                </td>
            </tr>
        @endforeach
</table>

@endsection

@section('footer')
copyright 2022 yapiko
@endsection