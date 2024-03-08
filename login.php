<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <style>
        #dica {
            color: white;
        }
        #dica:hover{
            background-color: pink
        }
    </style>
</head>
<body>
    <h1>Formulário da bibi</h1>
    <p>Insira seus dados!</p>
    <br>
    <form action="recebe.php" method="post" id="formulario" novalidate>
            <label for="user">Usuário</label><br>
            <input type="text" id="user" name="user" required><br><br>
            <label for="pass">Senha</label><br>
            <input type="password" id="pass" name="pass" required><br><br>
            <input type="submit" value= "Quer entrar?">
    </form>
    <p id="dica">O login é "sophia" e a senha é "bibi"</p>
</body>
</html>
