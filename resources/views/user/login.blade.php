<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href = "https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">




</head>
<body>

<section id="conteudo-view" class="login">

        <h1>Investindo</h1>
        <h3>Gerenciador de Inestimento<h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

        <p><h2>Acesse o Sistema</h2></p>

        <label>
        {!!  form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário "]) !!}
        </label>

       <label>
       {!! Form::password('password', ['placeholder' => 'Senha'])  !!}

       </label>

        {!! Form::submit('Entrar') !!}






    
{!! Form::close() !!}



</section>




    
</body>
</html>