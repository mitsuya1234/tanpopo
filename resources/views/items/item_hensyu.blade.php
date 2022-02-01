@extends('layouts.app')

@section('title')
    {{$item1->name}} | 商品詳細
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 bg-white">
            <div class="row mt-3">
                <div class="col-8 offset-2">
                    @if (session('message'))
                        <div class="alert alert-{{ session('type', 'success') }}" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
		</div>
	    </div>
           @include('items.item_detail_panel', [
                'item' => $item1
	    ])

<div class="row">
                <div class="col-8 offset-2">
                    @if ($item1->isStateSelling)
                        <a href="{{route('item1.buy', [$item1->id])}}" class="btn btn-secondary btn-block">編集</a>
                    @else
                        <button class="btn btn-dark btn-block" disabled>売却済み</button>
                    @endif
                </div>
	    </div>
<div class="my-3">{!! nl2br(e($item1->description)) !!}</div>
	</div>

    </div>
</div>
@endsection
