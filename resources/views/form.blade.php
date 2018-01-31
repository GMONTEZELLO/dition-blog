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

        <div class="modal" tabindex="-1" role="dialog" id="novoPostModal">
            <div class="modal-dialog modal-lg" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="txTitulo">Título</label>
                            <input id="txTitulo" name="txTitulo" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txImagem">Imagem</label>
                            <input id="txImagem" name="txImagem" type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="txConteudo">Conteúdo</label>
                            <textarea name="txConteudo" id="txConteudo" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="editarPostModal">
            <div class="modal-dialog modal-lg" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="txTitulo">Título</label>
                            <input id="txTitulo" name="txTitulo" type="text" class="form-control" value="Título do post 1">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="txImagem">Imagem</label>
                                    <input id="txImagem" name="txImagem" type="file" class="form-control">
                                    <p>Para editar a imagem, selecione o arquivo acima e salve. Para manter, deixe o campo em branco</p>
                                </div>
                                <div class="col-sm-6">
                                <img src="https://cdn.newsapi.com.au/image/v1/7a7ec1aa1a0ab41a197b9cbd27b2f942?width=1024" alt="" class="img-cover" style="height: 200px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="txConteudo">Conteúdo</label>
                            <textarea name="txConteudo" id="txConteudo" rows="10" class="form-control" value="">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget quam nec erat mattis tincidunt. Proin semper, lectus vel mollis aliquet, diam odio fermentum tellus, ac pharetra enim dolor id odio. Quisque scelerisque tincidunt nunc ac placerat. Mauris at nulla rhoncus, placerat elit non, suscipit erat. Morbi sed turpis id urna tincidunt iaculis. Fusce mattis euismod nulla. Suspendisse vulputate interdum convallis. Etiam sodales at nunc at vestibulum. Proin id rhoncus arcu. Maecenas sed hendrerit mauris, eget feugiat leo. Donec id velit non mauris sollicitudin vulputate quis sit amet metus.

Morbi porta ante a augue aliquam vehicula. Nam maximus hendrerit eros, viverra fringilla sapien ullamcorper id. In sed faucibus libero. Sed tincidunt sem id nunc vehicula, vitae efficitur purus feugiat. Vestibulum eu mauris in tortor rhoncus blandit. Integer ligula quam, vestibulum in bibendum ut, scelerisque egestas lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam eu elementum neque. Fusce accumsan, lorem at rutrum fermentum, tortor lorem aliquet neque, at consectetur elit augue at lectus. Donec eu est molestie, tristique sapien eu, efficitur tortor. Integer ac dapibus nisi. Donec pellentesque libero ligula, et volutpat erat ornare id. Integer ut metus interdum, ullamcorper diam vel, malesuada odio.

Curabitur eget ullamcorper odio. Maecenas rutrum nisi eget bibendum scelerisque. Vestibulum tempus mi eu mi eleifend dictum vel ac odio. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin dui ipsum, hendrerit sed feugiat quis, tristique sed diam. Suspendisse potenti. Curabitur ac dictum leo. Vestibulum non mauris enim. Curabitur id diam semper, mollis metus a, feugiat tellus. Praesent turpis est, convallis ac venenatis a, finibus commodo quam. Suspendisse venenatis nunc non commodo scelerisque.
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal" tabindex="-1" role="dialog" id="excluirPostModal">
            <div class="modal-dialog modal-sm" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tem certeza que deseja excluir o post?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Sim, excluir!</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    </div>
                </form>
            </div>
        </div>

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
                <div class="row mt-3">
                    <div class="col-sm-8">
                        <h1>Postagens do blog</h1>
                    </div>
                    <div class="col-sm-4">
                        <button class="btn btn-success float-right" data-toggle="modal" data-target="#novoPostModal">
                            Adicionar
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Título do post 1</td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><button class="btn btn-primary" data-toggle="modal" data-target="#editarPostModal">Editar</button></li>
                                            <li class="list-inline-item"><button class="btn btn-danger" data-toggle="modal" data-target="#excluirPostModal">Excluir</button></li>
                                            <li class="list-inline-item"><a href="/post" class="btn btn-light">Ver post</a></li>
                                        </ul>                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
