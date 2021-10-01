@extends('layouts.app')

@section('title')База отдыха "Заря"| Охота и рыбалка@endsection

@section('content')
<div class="container">
  <section class="mt-3">
    <h1> Охота и рыбалка</h1>
    <div class="row my-3">
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-2 order-sm-1">
        <img src="/images/header2.jpeg" class="img-fluid rounded" alt="Рыбалка на закате" title="Рыбалка на закате">
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-1 order-sm-2">
        <p><strong>Описание рыбалки:</strong></p>
        <p>Знаменитая рыбалка на Нижней Волге, а в частности в окрестностях нашей базы,
           не обманет ваших ожиданий, ведь это одно из уникальнейших мест в России по обилию и разнообразию рыбы.
           Здесь не будет обделен радостью и трофеем ни опытный профессионал, ни совсем еще новичок в рыбной ловле. </p>
        <p>ТВ наших местах вы можете порыбачить на сазана, сома, судака, щуку, жереха, окуня, чехонь, воблу, леща
           и другую рыбу, а наш персонал поможет вам в поиске, поимке и обработке пойманных вами трофеев.</p>
        <p>На рыболовно-охотничьей базе "Заря" для любителей рыбной ловли созданы все условия: для почитателей
           активной рыбалки – река Волга с ее неограниченным простором, для рыбаков предпочитающих более спокойные
            виды лова - множество озер, ериков, протоков.</p>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-2">
        <img src="/images/header3.jpg" class="img-fluid rounded" alt="Закат" title="Закат">
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 order-1">
        <p><strong>Описание охоты:</strong></p>
        <p>Радушно встречает рыболовно-охотничья база "Заря" и охотников, ведь здесь — идеальные условия
           для обитания пернатых. Самой распространенной дичью на отдыхе и охоте в Астрахани с открытием
            сезона в сентябре являются гуси, лысухи, кряквы, серые утки и множество других пернатых.
             Обилие воды и широких полей предопределяет как их постоянное гнездование, так и промежуточные места отдыха при перелётах. </p>
        <p>Селящиеся по берегам зайцы и лисы, ондатра и хорь принесут любителям меховой и мясной охоты свои впечатления и плоды. </p>
        <p>Отлично поставленная егерская служба окажет необходимую помощь как в разделке и сохранении добытых вами трофеев, так и в транспортировке. </p>
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
  @include('partials.btn')
</div>
@endsection
