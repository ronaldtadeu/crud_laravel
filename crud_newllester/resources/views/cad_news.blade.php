<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- carrega estilo da pagina do login na /Public -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <link href="<?php echo asset('css/magicsuggest.css')?>" rel="stylesheet" type="text/css">
        <!------ Include the above in your HEAD tag ---------->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">FORMULARIO DE CADASTRO</h1>
                <p class="lead text-muted mb-0">
                    Seja bem vindo a tela de cadastro de newsletter! 
                    Aqui você pode enviar seus newsletter usando uma lista de emails separados por ";" 
                    este cadastro usa o CKEDITOR para facilitar a criação, apos o cadastro o codigo
                    html sera gerado e enviado aos emails cadastrados ;)
                </p>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/lista">Lista Newsletter enviados</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cadastro de Newsletter</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Formulario de cadastro.</div>
                        <div class="card-body">
                            <form action="/cadastro/store" method="POST">
                                @csrf  
                                <div class="form-group">
                                    <label for="name">Titulo do Newsletter</label>
                                    <input name="titulo" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required />
                                </div>
                                <div class="form-group">
                                    <label for="email">Emails</label>
                                    <div id="ms1" class="form-control"></div>
                                    <small id="emailHelp" class="form-text text-muted">Insira os emails 1 a 1 e separe-os por virgula.</small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Conteudo do Newsletter</label>
                                    <textarea class="form-control" name="conteudo" required></textarea>
                                    <script>
                                            CKEDITOR.replace( 'conteudo' );
                                    </script>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary text-right">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo asset('js/magicsuggest.js')?>"></script>
        <script>
        $(function() {
            var ms1 = $('#ms1').magicSuggest({
                data: ['New York','Los Angeles','Chicago','Houston','Philadelphia','Phoenix','San Antonio','San Diego','Dallas','San Jose','Jacksonville']
            });
            
            $('#ms1').magicSuggest({
                resultAsStringDelimiter: ';',
                resultAsString: true
            });
        });
        </script>
    </body>
</html>
