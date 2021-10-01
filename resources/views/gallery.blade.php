@extends('layouts.app')

@section('title')База отдыха "Заря" | Галерея@endsection

@section('content')
<div class="container">
  <div class="row">
    <h1 class="text-primary">Галерея</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <h2>Охота и рыбалка</h2>
    </div>
    @foreach($fishing as $file)
      <div class="col-12 col-sm-4 col-md-3 d-none d-sm-block thumb">
        <a data-fancybox="gallery" href="/images/fishing/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/fishing/{{$file->getFilename()}}" alt="Охота и рыбалка">
        </a>
      </div>
    @endforeach
  </div>
  <div class="d-block d-sm-none scrolling-wrapper p-3">
    @foreach($fishing as $file)
      <div class="cards thumb">
        <a data-fancybox="gallery" href="/images/fishing/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/fishing/{{$file->getFilename()}}" alt="Охота и рыбалка">
        </a>
      </div>
    @endforeach
  </div>
  <div class="row mt-3">
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
  <div class="row mt-3">
    <div class="col-12">
      <h2>Общие фото</h2>
    </div>
    @foreach($rest as $file)
      <div class="col-12 col-sm-4 col-md-3 d-none d-sm-block thumb">
        <a data-fancybox="gallery" href="/images/rest/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/rest/{{$file->getFilename()}}" alt="Отдых">
        </a>
      </div>
    @endforeach
  </div>
  <div class="d-block d-sm-none scrolling-wrapper p-3">
    @foreach($rest as $file)
      <div class="cards thumb">
        <a data-fancybox="gallery" href="/images/rest/{{$file->getFilename()}}">
          <img class="img-fluid" src="/images/rest/{{$file->getFilename()}}" alt="Дома и комнаты">
        </a>
      </div>
    @endforeach
  </div>
  @include('partials.btn')
</div>
@endsection
