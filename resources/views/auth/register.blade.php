@extends('layouts.app_only_content')

@section('title')
    会員登録
@endsection

@section('content')
<div class="container">
    <div class="card" style="width: 500px">
        <div class="card-body">
            <div class="font-weight-bold text-center border-bottom pb-3" style="font-size: 24px">会員情報登録</div>

            <form method="POST" action="{{ route('register') }}" class="p-5">
                @csrf

                <div class="form-group">
                    <label for="name">ニックネーム</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="情報太郎">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
		</div>


                <div class="form-group">
                    <label for="gakuseki">学籍番号</label>
                    <input id="gakuseki" type="text" class="form-control @error('gakuseki') is-invalid @enderror" name="gakuseki" value="{{ old('gakuseki') }}" required autocomplete="gakuseki" autofocus placeholder=190000">
                    @error('gakuseki')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="joho@std.hi-joho.ac.jp">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">パスワード</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="zyusyo">住所</label>
                    <input id="zyusyo" type="text" class="form-control @error('zyusyo') is-invalid @enderror" name="zyusyo" value="{{ old('zyusyo') }}" required autocomplete="zyusyo" autofocus placeholder=島根県松江市内中原町196-1">
                    @error('zyusyo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-secondary">
                        会員登録
                    </button>
                </div>

                <div>
                    アカウントをお持ちの方は<a href="{{ route('login') }}">こちら</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


