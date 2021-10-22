<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- carrega estilo da pagina do login na /Public -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    </head>
    <body>
        <div class="alert alert-success" role="alert">
            {!! Session::get('message') !!}
        </div>
        <div class="container" style="margin-top:1em;">
            <div class="row col-md-12 custyle">
                <table class="table table-striped custab">
                    <thead>
                        <a href="/cadastro" class="btn btn-primary btn-xs pull-right"><b>+</b> Adicionar novo newsletter</a>
                        <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>conteudo</th>
                            <th>Emails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($registros as $rn){ ?>
                        <tr>
                            <td><?= $rn['id']?></td>
                            <td><?= $rn['titulo']?></td>
                            <td>
                                <a class="btn btn-info btn-xs" href="#"><span class="glyphicon glyphicon-eye-open"></span> Vizualizar</a>
                            </td>
                            <td><?= $rn['emails']?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    </body>
</html>
