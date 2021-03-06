@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- エラーメッセージが出る様に設定している
                    Requestと言うlaravelの機能を使用している別ファイルを用意する
                    日本語で出力する為にresources/lang/jaに日本語用メッセージファイルを追加している
                    単語をカスタムする際はresources/lang/jaのvalidation.phpに記述する --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    createです！
                      <form method="POST" action="{{route("contact.store")}}">
                        @csrf
                      氏名
                      <input type="text" name="your_name">
                      <br>
                      件名
                      <input type="text" name="title">
                      <br>
                      メールアドレス
                      <input type="email" name="email">
                      <br>
                      ホームページ
                      <input type="url" name="url">
                      <br>
                      性別
                      <input type="radio" name="gender" value="0">男性</input>
                      <input type="radio" name="gender" value="1">女性</input>
                      <br>
                      年齢
                      <select name="age">
                        <option value="">選択してください</option>
                        <option value="1">~19歳</option>
                        <option value="2">20~29歳</option>
                        <option value="3">30~39歳</option>
                        <option value="4">40~49歳</option>
                        <option value="5">50~59歳</option>
                        <option value="6">~60歳~</option>
                      </select>
                      <br>
                      お問い合わせ内容
                      <textarea name="contact" ></textarea>
                      <br>
                      <input type="checkbox" name="caution" vslue="1"><a href="#">注意事項</a>に同意する</input>
                      <br>
                      <input type="submit" value="登録する" class="btn btn-info">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
