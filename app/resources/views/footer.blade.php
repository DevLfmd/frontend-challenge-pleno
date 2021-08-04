<footer class="footer p-3" style="box-shadow: 1px 0px 3px #000;">
    <div class="row align-items-center">
        <div class="col-md-4 col-xs-12 col-sm-12 mt-3">
            <a href="/">
                <img class="img-fluid" style="height:64px" src="{{ asset('logo.png') }}" />
            </a>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 mt-3" style="display: flex; justify-content: space-between; width: 100%;">
            <li style="list-style:none; margin-right: 20px;"><a href="http://localhost:8000/">Home</a></li>
            <li style="list-style:none; margin-right: 20px;"><a href="http://localhost:8000/#sobre">Sobre</a></li>
            <li style="list-style:none; margin-right: 20px;"><a href="{{ route('prices.index') }}">Preços</a></li>
            <li style="list-style:none; margin-right: 20px;"><a href="{{ route('developers.index') }}">Desenvolvedores</a></li>
            <li style="list-style:none; margin-right: 20px;"><a href="http://localhost:8000/#ajuda">Ajuda</a></li>
            <li style="list-style:none; margin-right: 20px;"><a href="http://localhost:8000/#contato">Contato</a></li>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 mt-3" style="text-align: end">
            <span class="font-weight-bold">+80 1234 56789 | ola@sitedemo.com.br</span>
        </div>
    </div>
</footer>