@extends('layouts.app')

@section('title')База отдыха "Заря" | Цены@endsection

@section('content')
<div class="container">
  <div class="card shadow">
    <h1 class="card-header text-primary">Цены</h1>
    <div class="card-body">
      <h4 class="card-title"><strong>Описание размещения</strong></h4>
      <p class="card-text lead">Для проживания отдыхающим предоставляется 8-местные и 6-местные,
         одноэтажные дома (есть возможность доп. мест). В каждом (8-местном) домике по 2 секции
         на 4 человек, вход отдельный, удобства в каждой секции. Все дома оборудованы удобной мебелью,
          постельными принадлежностями, телевизорами, холодильниками, сплит-системой, кухней с
           электрической плитой и необходимым набором посуды. Возле каждого домика своя мангальная зона.
      </p>
      <p class="btn btn-lg btn-primary">1000 &#8381;/чел. в сутки</p>
      <p class="lead">В стоимость включено:</p>
      <ul>
        <li>Проживание </li>
      </ul>
      <p class="text-muted h5"><strong>Дополнительные услуги: </strong>лодка с егерем, вяление, копчение, заморозка, питание и др.</p>
    </div>
  </div>

    @include('partials.btn')

  <div class="row mt-2">
    <div class="col-12">
      <h2>Дома и комнаты</h2>
    </div>
    @foreach($room as $file)
      <div class="col-12 col-sm-4 col-md-3 d-none d-sm-block thumb">
        <a data-fancybox="gallery" href="/images/room/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/room/{{$file->getFilename()}}" alt="Дома и комнаты">
        </a>
      </div>
    @endforeach
  </div>
  <div class="d-block d-sm-none scrolling-wrapper p-3">
    @foreach($room as $file)
      <div class="cards thumb">
        <a data-fancybox="gallery" href="/images/room/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/room/{{$file->getFilename()}}" alt="Отдых">
        </a>
      </div>
    @endforeach
  </div>
</div>
@endsection
