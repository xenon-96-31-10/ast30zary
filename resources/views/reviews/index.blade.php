@extends('layouts.app')

@section('title')База отдыха "Заря" | Отзывы@endsection

@section('content')
<div class="container">

  <div class="row">
      <div class="col-sm-8 order-2 order-sm-1">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{ session('success') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @foreach($reviews as $review)
          <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">{{ $review->author }}</h4>
            <hr>
            <p>{{ $review->text }}</p>            
          </div>
        @endforeach
      </div>
      <div class="col-sm-4 order-1 order-sm-2 mb-2 mb-sm-0">
        <a href="{{route('reviews.create')}}" class="btn btn-lg btn-primary sticky-top"> Оставить отзыв</a>
      </div>
  </div>
</div>
@endsection
