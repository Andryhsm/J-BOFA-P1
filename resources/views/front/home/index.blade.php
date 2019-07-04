@extends('front.layout.master')

    @section('additional-css')

    @endsection

    @section('content')
      @include('front.page.banner')
      @include('front.page.about')
      @include('front.page.story')
      @include('front.page.service')
      @include('front.page.features')
      @include('front.page.price')
    @endsection

    @section('additional-script')

    @endsection
