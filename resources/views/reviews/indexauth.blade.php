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
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            @foreach($reviews_n as $review)
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">{{ $review->author }}</h4>
                <hr>
                <p>{{ $review->text }}</p>
                <hr>

                <form action="{{route('reviews.destroy', ['review' => $review->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('reviews.edit', ['review' => $review->id])}}" class="btn btn-primary">Редактировать</a>
                  <button type="submit" onclick="return confirm('Уверены')" class="btn btn-danger">Удалить</button>
                </form>
              </div>
            @endforeach
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            @foreach($reviews_c as $review)
              <div class="alert alert-info" role="alert">
                <h4 class="alert-heading">{{ $review->author }}</h4>
                <hr>
                <p>{{ $review->text }}</p>
                <hr>
                <form action="{{route('reviews.destroy', ['review' => $review->id])}}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{route('reviews.edit', ['review' => $review->id])}}" class="btn btn-primary">Редактировать</a>
                  <button type="submit" onclick="return confirm('Уверены')" class="btn btn-danger">Удалить</button>
                </form>
              </div>
            @endforeach
          </div>
        </div>

      </div>
      <div class="col-sm-4 order-1 order-sm-2 mb-2 mb-sm-0">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Не утвержденные</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Утвержденные</a>

        </div>
      </div>
  </div>
</div>
@endsection
