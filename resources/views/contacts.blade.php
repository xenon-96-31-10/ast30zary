@extends('layouts.app')

@section('title')База отдыха "Заря" | Контакты@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-6 mb-2 mb-sm-0">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Дмитрий (владелец)</h5>
          <p class="card-text">Знает ВСЁ о рыбалке и охоте, расскажет все, как на духу.</p>
          <a href="tel:+7(908)-611-92-51" class="btn btn-primary">Позвонить</a>
        </div>
        <img src="/images/owner1.jpeg" class="card-img-bottom" alt="Дмитрий (владелец)" title="Дмитрий (владелец)">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card shadow">
        <div class="card-body">
          <h5 class="card-title">Ольга (супруга владельца)</h5>
          <p class="card-text">Только Вотсап, она любит писать.</p>
          <a href="https://wa.me/79608641081" class="btn btn-primary">Написать</a>
        </div>
          <img src="/images/owner2.jpeg" class="card-img-bottom" alt="Ольга (супруга владельца)" title="Ольга (супруга владельца)">
      </div>
    </div>
  </div>

  @include('partials.btn')
</div>
@endsection
