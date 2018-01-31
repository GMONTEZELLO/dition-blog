<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dition Blog</title>
        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/blog.css">
    </head>
    <body>
        <div id="content">
            <div class="container">
                <header>
                    <div class="row">
                        <div class="col-4">
                            <div class="row h-100">
                                <div class="col-sm-2 img-middle">
                                    <img class="img-fluid" src="/img/marca-quadrada.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <a href="/" class="h2 text-center"><p class="text-center">Dition Blog</p></a>
                            
                        </div>
                        <div class="col-4">
                            <a href="/form" class="btn btn-light float-right">Adicionar Post</a>
                        </div>
                    </div>
                </header>
                <div class="row mt-2">
                    <div class="col-sm-6">
                        <div class="card">
                            <img class="img-cover" src="https://cdn.newsapi.com.au/image/v1/7a7ec1aa1a0ab41a197b9cbd27b2f942?width=1024" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Título do post 1</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus rutrum magna, a imperdiet ipsum porttitor quis.</p>
                                <a href="/post" class="btn btn-primary">Ver post</a>
                            </div>
                        </div>            
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img class="img-cover" src="https://www.edx.org/sites/default/files/prod-land-pg/banner/information_technology_767x400.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Título do post 2</h5>
                                <p class="card-text">Quisque quis odio at neque faucibus pellentesque nec sit amet mi. Aliquam vel ultricies nulla.</p>
                                <a href="#" class="btn btn-primary">Ver post</a>
                            </div>
                        </div>  
                    </div>              
                </div>
            </div>
        </div>
        <footer class="footer bg-secondary text-center text-light">
            Dition - 2018
        </footer>
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>

</html>
