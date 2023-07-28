<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .formulario{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }


p{
  color: white;
  font-size: 14pt;
  text-align: center;
}

a{
  color: dodgerblue;
  font-weight: bold;
  text-decoration: none;
  transition: all .3s ease-out;
}

a:hover{
  color: #fff;
}

h1 {
  display: flex;
  align-items: center;
  justify-content: center;
}

form {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}

#back:hover {
opacity: 50%;
}


    </style>
</head>
<body>
    <a id="back" style="color: #fff" href="index-vitrine.php">Voltar</a>
    <div>
    <div class="formulario">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
<br>
        <p>
          Não tem uma conta?
          <a href="./sing-up.php">
            Cadastre-se
          </a>
        </p>
      </div>
</div>
</body>
</html>