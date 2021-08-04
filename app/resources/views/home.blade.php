@extends('layout')

@section('title', 'Página inicial')

@section('content')
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="https://ezoom.com.br/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-22-at-16.22.14-2.jpeg" alt="MarketPlace">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="https://ezoom.com.br/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-22-at-16.22.14.jpeg" alt="MarketPlace">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="https://ezoom.com.br/wp-content/uploads/2021/07/WhatsApp-Image-2021-07-22-at-16.22.14-1.jpeg" alt="MarketPlace">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    
    <!-- Clientes -->
    <div id="sobre" class="owl-carousel owl-theme mt-5 mb-5">
        @forEach($data['clients'] as $client)
            <div class="item">
                <img width="150px" height="110px" src="{{ $client['link'].$client['image'] }}" alt="{{ $client['title'] }}" />
            </div>      
        @endForEach
    </div>
    
    <!-- Separador -->
    <div class="col-md-12">
        <hr/>
    </div>

    <!-- Estamos integrados -->
    <div id="ajuda" class="container">
        <div class="col-md-12">
            <div class="row mt-5 align-items-center">
                @forEach($data['services'] as $service)
                    <div class="col-md-4">
                        <div 
                            class="card mt-2" 
                            style="
                                width: 100%;
                                text-align: center;
                                background: {{ $service['bgColor'] }}; 
                                color: {{ $service['color'] }};
                            "
                        >
                            <div class="mt-3" style="text-align: center">
                                <i class="fa-2x {{ $service['icon'] }}"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $service['title'] }}</h5>
                                <p class="card-text">{{ $service['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endForEach
            </div>
        </div>
    </div>

    <!-- Separador -->
    <div class="col-md-12 mt-5">
        <hr style="margin-bottom: 0" />
    </div>

    <!-- Banner -->
    <div class="col-md-12">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold mt-4">Atendimento ao Cliente</h2>
                <span>
                    Precisando entrar em contato, utilize nossos canais de atendimento ou consulte a documentação para mais informações.
                </span>
                <div class="col-md-12 mt-4 mb-4 p-0">
                    <button class="font-weight-bold btn btn-medium btn-success">Envie um Ticket</button>
                    <button class="font-weight-bold btn btn-medium btn-primary">Documentação</button>
                </div>
            </div>
            <div 
                class="col-md-6"
                style="
                    background: url(https://i.pinimg.com/736x/c1/d1/de/c1d1de8b5cd63f9ae4d6b53a98d25cdb.jpg);
                    height: 410px;
                    background-size: cover;
                    background-repeat: no-repeat;
                "
            >
            </div>
        </div>
    </div>

    <!-- NewsLatter -->
    <div id="contato" class="col-md-12">
        <div class="row" style="background: #00182c; color: #FFF; text-align: center; padding: 60px;">
            <div class="col-md-12">
                <h2 class="font-weight-bold">Newslatter</h2>
            </div>
            <div class="col-md-12">
                <p>Receba nossas informações por email e fique sabendo de todas as novidades</p>
            </div>
            <div 
                class="col-md-12" 
                style="
                    justify-content: center;
                    justify-items: center;
                    align-items: center;
                    align-content: center;
                    display: flex;
                    flex-direction: row;
                ">
                <div class="input-group mb-3" style="width: 50% !important;">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button class="btn btn-md btn-primary">Enviar</button>
                </div>
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