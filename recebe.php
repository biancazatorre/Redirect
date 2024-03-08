<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação</title>

    <script>
        <?php
            $user_js = isset($_POST['user']) ? $_POST['user'] : ''; //cria uma variável de checagem pro java
        ?>

        function encaminha() {
            var user = "<?php echo $user_js; ?>"; 
            alert("Muito bem, " + user + ". Vem!");
            window.location.href = "index.php";
        }

        function voltar() {
            window.history.back();
        }
    </script>
</head>
<body>
    <h1>VOCÊ É UMA FARSA</h1>
<?php
    $user = $_POST['user'];
    $pass = $_POST['pass'];
if (empty($user) || empty($pass)){ 
    echo "Não inserir campos vazios"."<br>"."<br>"."<br>";
    echo "<button onclick='voltar()'>Voltar</button>";
}

else if ($user != "sophia" || $pass !="bibi") {
    echo "Dados incorretos"."<br>"."<br>"."<br>";
    echo "<button onclick='voltar()'>Voltar</button>";
}    
else{
    echo "<script>encaminha();</script>";
    }
?>
</body>
</html>
