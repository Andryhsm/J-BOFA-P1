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
  <section class="coontent_page">

  </section>
  @endsection
  @section('additional-script')

  @endsection
