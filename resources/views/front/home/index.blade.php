@extends('front.layout.master')

    @section('additional-css')
      {!! Html::style('css/front/style_home.css') !!}
    @endsection

    @section('content')
      @include('front.page.slider')
      @include('front.page.item_presentation')
      @include('front.page.find_place')
      @include('front.page.features')
    @endsection

    @section('additional-script')

    @endsection
