@extends('front.layout.master')

    @section('additional-css')
      {!! Html::style('css/front/style_home.css') !!}
    @endsection

    @section('content')
      @include('front.page.slider')
      @include('front.page.item_presentation')
      @include('front.page.find_place')
      @include('front.page.features')
      @include('front.page.categories')
      @include('front.page.listing')
      <!-- ************** -->
    @endsection

    @section('additional-script')

    @endsection
