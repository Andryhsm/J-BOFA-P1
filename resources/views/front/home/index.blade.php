@extends('front.layout.master')

    @section('additional-css')

    @endsection

    @section('content')
      @include('front.page.find_place')
      @include('front.page.features')
      @include('front.page.categories')
      @include('front.page.listing')
      <!-- ************** -->
    @endsection

    @section('additional-script')

    @endsection
