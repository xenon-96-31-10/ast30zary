@extends('layouts.app')

@section('title')База отдыха "Заря" | О нас@endsection

@section('content')
<div class="container">
  <section class="mt-3" id="about">
    <h1>О нас</h1>
    <div class="row my-3">
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-2 order-sm-1">
        <img src="/images/header2.jpeg" class="img-fluid rounded" alt="Рыбалка на закате" title="Рыбалка на закате">
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-1 order-sm-2">
        <p><strong>Рыболовно-охотничья база "Заря"</strong> - расположена в Астраханской области (30 км от города), в 5 км
        от села Разночиновка, в живописном уголке Нижней Волги, на левом берегу Волги, сразу после
        отделения реки Бузан от основного русла Волги.</p>
        <p>Территория базы (общей площадью 2,6 Га), находится в лесном массиве с прекрасным видом на
        коренную Волгу, окружена с одной стороны дубовой рощей, с другой – красивым яблоневым
        садом.</p>
        <p>База "Заря" огорожена, круглосуточно охраняется. Здесь вас ждет прекрасный сервис на любой
        вкус: семейный отдых как на самой базе, так и активный - на природе, по желанию - рыбалка и
        охота. У нас есть всё необходимое - уникальная природа, замечательный песчаный пляж
        (береговая линия 270 м), волейбольная площадка, стоянка для автомобилей, обилие знаменитых
        даров края (арбузы, дыни, свежие вкусные овощи, рыба, раки и т.д.). Сюда можно приехать со
        своей лодкой и мотором, либо же арендовать лодку на месте. Опытные рыбаки помогут
        подобрать средства вылова, покажут места.</p>
        <p>Особенностью базы является ее уединенность – отсутствие рядом туристических центров и
        крупных населенных пунктов, и в то же время - наличие полностью готовых к проживанию
        комфортабельных и уютных домиков на любой вкус.</p>
      </div>
    </div>
  </section>

  <section class="my-4" id="ourgallery">
    <div class="row ">
      @foreach($files as $file)
        <div class="col-12 col-sm-4 col-md-3 d-none d-sm-block thumb">
          <a data-fancybox="gallery" href="/images/rest/{{$file->getFilename()}}">
            <img class="img-fluid" src="/images/rest/{{$file->getFilename()}}" alt="Отдых">
          </a>
        </div>
      @endforeach
    </div>
    <div class="d-block d-sm-none scrolling-wrapper p-3">
      @foreach($files as $file)
        <div class="cards thumb">
          <a data-fancybox="gallery" href="/images/rest/{{$file->getFilename()}}">
            <img class="img-fluid" src="/images/rest/{{$file->getFilename()}}" alt="Отдых">
          </a>
        </div>
      @endforeach
    </div>
  </section>
  @include('partials.btn')
</div>
@endsection
