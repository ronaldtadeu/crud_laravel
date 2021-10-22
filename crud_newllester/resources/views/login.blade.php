

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- carrega estilo da pagina do login na /Public -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link href="<?php echo asset('css/login.css')?>" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="signup">Criar Conta</div>
                <div class="login">Entrar</div>
                <div class="signup-form">
                    <form action="/login/store" method="POST">
                        @csrf 
                        <input name="email" type="email" placeholder="E-mail. Ex: renata@email.com" class="form-control" value="sqadqwd"><br />
                        <input name="usuario" type="text" placeholder="Usuario. Ex: Josue Alves" class="form-control" vlaue="2123213"><br />
                        <input name="senha" type="password" placeholder="Senha. Ex: Batatinha123" class="form-control" value="qweqwe"><br />
                        <button type="submit" class="btn">Acessar Painel</button>
                    </form>
                </div>
                <div class="login-form">
                    <form action="/login/logar" method="POST">
                        <input name="email" type="email" placeholder="Insira seu E-mail" class="input"><br />
                        <input name="senha" type="password" placeholder="Insira sua Senha" class="input"><br />
                        <button type="submit" class="btn btn-info">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(".login-form").hide();
            $(".login").css("background", "none");
            
            $(".login").click(function(){
              $(".signup-form").hide();
              $(".login-form").show();
              $(".signup").css("background", "none");
              $(".login").css("background", "#fff");
            });
            
            $(".signup").click(function(){
              $(".signup-form").show();
              $(".login-form").hide();
              $(".login").css("background", "none");
              $(".signup").css("background", "#fff");
            });
            
            $(".btn").click(function(){
              $(".input").val("");
            });
        </script>
    </body>
</html>

