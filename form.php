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
<form action="" method="post" id="pacotes">
    <label for="data">Data</label>
    <input type="date" name="data" id="data">
    <label for="continente">Continente</label>
    <select name="continente" id="continente" style="width: 200px">

    </select>
    <label for="regiao">Região</label>
    <select name="regiao" id="regiao" style="width: 200px">
        <option value="">Escolha uma região</option>

    </select><br>

    <label for="destino">Destino</label>
    <input list="destino" name="destino" id="destinos">
    <datalist id="destino" style="width: 800px">

    </datalist>

    <button type="button" id="buscar">buscar</button>
</form>
<script src="jquery-3.3.1.js"></script>
<script src="js.js"></script>
<script type="application/javascript">
    /*var url = "busca_destinos.php"

    $.ajax({
        type:"POST",
        url:url,
        success: function (data) {
            $(data).each(function () {
                var pais = "<option value='"+this.id+"'>"+this.nome+"</option>"
                $("#destino").append(pais);
                //$("#destino").append("<option value='1'>pais</option>");
            });
        }
    });*/
</script>
</body>
</html>