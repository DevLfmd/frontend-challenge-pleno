@extends('layout')

@section('title', 'Desenvolvedores')

@section('content')
    <div class="container pt-5">
        <div class="col-md-12">
            <div class="row">
                @forEach($developers as $developer) 
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 100%; height: 100%;">
                            <img style="height: 260px" src="{{ $developer['img'] }}" class="card-img-top" alt="Marketplace">
                            <div class="card-body" style="display: flex;flex-direction: column;justify-content: space-between;">
                                <h5 class="card-title">{{ $developer['title'] }}</h5>
                                <p class="card-text">{{ $developer['description'] }}</p>
                                <hr style="width: 100%" />
                                <ul style="padding: 0">
                                    <h3> Habilidades: </h3>
                                    @forEach($developer['developer_services'] as $developer_service)
                                        <li style="list-style: none; height: 25px;">
                                            <span class="card-text">{{ $developer_service['service']->name }} &nbsp;</span>
                                        </li>
                                    @endForEach
                                </ul>
                                <hr style="width: 100%" />
                                <a href="#" class="btn btn-primary">Contratar serviços</a>
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