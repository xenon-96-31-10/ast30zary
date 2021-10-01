@extends('layouts.app')

@section('title')База отдыха "Заря"@endsection

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <h1 class="text-primary">Начни свой отдых прямо сейчас вместе с нами!</h1>
      <p class="text-muted mb-2">ЧАСТНАЯ РЫБАЛОВНО-ОХОТНИЧЬЯ БАЗА «ЗАРЯ»</p>
      <p>
        <a class="btn btn-lg btn-custom-wa rounded mr-2" href="https://wa.me/79608641081">Забронировать</a>
        <a class="btn btn-lg btn-custom-more rounded" href="#about">Подробнее</a>
      </p>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
      <img src="/images/header3.jpg" class="img-fluid rounded" alt="Отдых на берегу Волги" title="Отдых на берегу Волги">      
    </div>
  </div>
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

  <section class="my-3" id="ourgallery">
    <div class="row ">
      @foreach($files as $file)
        <div class="col-12 col-sm-4 col-md-3 d-none d-sm-block thumb">
          <a data-fancybox="gallery" href="/images/fishing/{{$file->getFilename()}}">
            <img class="img-fluid" src="/images/fishing/{{$file->getFilename()}}" alt="Рыбалка">
          </a>
        </div>
      @endforeach
    </div>
    <div class="d-block d-sm-none scrolling-wrapper p-3">
      @foreach($files as $file)
        <div class="cards thumb">
          <a data-fancybox="gallery" href="/images/fishing/{{$file->getFilename()}}">
            <img class="img-fluid" src="/images/fishing/{{$file->getFilename()}}" alt="Рыбалка">
          </a>
        </div>
      @endforeach
    </div>
  </section>
  <section id="reviews">
    <h1>Что о нас говорят:</h1>
    <div class="row my-3">
      <div class="col-12">
        <!-- Slideshow container -->
        <div class="slideshow-container">
          <!-- Full-width slides/quotes -->

            @foreach ($reviews as $review)
            <div class="mySlides">
              <q>{{ $review->text }}</q>
              <p class="author">- {{ $review->author }}</p>
            </div>
            @endforeach
            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>


            <a href="{{ route('reviews.index') }}" class="read-more mr-2">Читать ещё</a>
        </div>
        <!-- Dots/bullets/indicators -->
        <div class="dot-container">
          @for ($i = 1; $i <= count($reviews); $i++)
          <span class="dot" onclick="currentSlide({{$i}})"></span>
          @endfor
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
  var slideIndex = 1;
  showSlides(slideIndex);

  plusSlides = function (n) {
    showSlides(slideIndex += n);
  }

  currentSlide= function (n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
  }
    });

</script>
@endsection
