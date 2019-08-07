@extends('front.layout.master')

  @section('additional-css')
      {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css') !!}
      {!! Html::style('css/front/how_work.css') !!}
  @endsection

  @section('content')

  <section class="header_page">
    <div class="image_header">
      <img src="{!! url('/image/front/images/fond15.jpg') !!}" class="img_fond" alt="" />
      <div class="description_header">
        <div class="text_header">
            <h2>Comment ça marche ?</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="content_page_how_work">
    <div class="item_liste_how_work">
      <div class="how_work_item">
        <div class="image_liste_work">
          <img src="{!! url('/image/front/how_work/how1.jpg') !!}" class="" alt="" />
        </div>
      </div>
    </div>
  </section>
  @endsection
  @section('additional-script')

  @endsection
