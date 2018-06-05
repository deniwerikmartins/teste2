<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    foreach ($_SESSION["pacotes"] as $key => $value){
        echo ("id:" . $value["id"]);
        echo ("<br>");
        echo ("titulo:" . $value["titulo"]);
        echo ("<br>");
        echo ("descricao:" . $value["descricao"]);
        echo ("<br>");
        echo ("importante:" . $value["importante"]);
        echo ("<br>");
        $img = $value["imagem"];
        echo ("<img src='$img' width='100px'>");
        echo ("<br>");
        echo ("Dias:" . $value["dias"]);
        echo ("<br>");
        echo ("valor:" . $value["valor"]);
        echo ("<br>");
        echo ("moeda:" . $value["moeda"]);
        echo ("<br>");
        echo ("visitando:" . $value["visitando"]);
        echo ("<br>");
        echo ("inclui:" . $value["inclui"]);
        echo ("<br>");
        echo ("não inclui:" . $value["ninclui"]);
        echo ("<br>");
        echo ("saida:" . $value["saida"]);
        echo ("<br>");
        echo ("data:" . $value["data"]);
        echo ("<br>");
        echo ("url:" . $value["url"]);
        echo ("<br>");
        echo ("link:" . $value["link"]);
        echo ("<hr>");
        echo ("<br>");
        echo ("<br>");
    }

?>
</body>
</html>