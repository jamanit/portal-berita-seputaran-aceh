@extends('layouts.main')

@section('content')
<div class="content-wrapper" style="padding-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-info-circle mr-1"></i>
                            Detail Tentang
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <img src="{{ asset('/img/about/' . $about_detail->logo ) }}" class="rounded"
                                    style="max-width: 100%; object-fit: contain;" alt="">
                            </div>
                            <div class="col-12 mt-3">
                                <p>{!! $about_detail->about !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
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