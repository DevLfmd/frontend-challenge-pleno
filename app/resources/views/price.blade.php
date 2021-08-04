@extends('layout')

@section('title', 'Preços')

@section('content')
    <div class="container pt-5">
        <div class="col-md-12">
            <div class="row">
                @forEach($services as $service) 
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 100%; height: 100%;">
                            <img style="height: 260px" src="{{ $service['img'] }}" class="card-img-top" alt="Marketplace">
                            <div class="card-body" style="display: flex;flex-direction: column;justify-content: space-between;">
                                <h5 class="card-title">{{ $service['title'] }}</h5>
                                <p class="card-text">{{ $service['description'] }}</p>
                                <p class="card-text">Orçamento entre: R${{ $service['promotional_price'] }} - R${{ $service['price'] }}</p>
                                <a href="#" class="btn btn-primary">Contratar serviço</a>
                            </div>
                        </div>
                    </div>
                @endForEach
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@stop