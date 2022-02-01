@extends('layouts.app')

@section('title')
    {{$item1->name}} | 商品編集

    
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2 bg-white">

                <div class="font-weight-bold text-center border-bottom pb-3 pt-3" style="font-size: 24px">商品を編集する</div>
		<form method="POST" action="{{ route('item1.buy') }}" class="p-5" enctype="multipart/form-data">
                    @csrf

                    {{-- 商品名 --}}
                    <div class="form-group mt-3">
                        <label for="name">商品名</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$item1->name) }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
			<div class="form-group mb-0 mt-3">
                        <button type="submit" class="btn btn-block btn-secondary">
			    保存
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection
