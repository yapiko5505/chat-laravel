@extends('back.back')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ
    <div class="col-sm-2">
    <a href="/board/add" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a><br>
    <a href="{{ url('/person') }}">インデックスページに戻る</a><br>
        <!-- <a href="/person/find" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i>検索ページ</a> -->
    </div> 

@endsection

@section('content')
<table>
    @csrf
    <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                
                
            </tr>
        @endforeach
</table>
{{ $items->links() }}
@endsection

@section('footer')
copyright 2022 yapiko
@endsection