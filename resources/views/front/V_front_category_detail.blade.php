@extends('layouts.main')

@section('content')
<div class="content-wrapper" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('front.V_front_news_list')
            </div>
            <div class="col-md-4">
                @include('front.V_front_category_list')
                @include('front.V_front_medsos_list')
            </div>
        </div>
    </div>
</div>
@include('visitor.V_visitor_get')
@endsection