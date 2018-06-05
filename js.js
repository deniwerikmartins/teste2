$(document).ready(function () {
    $("#continente,#regiao,#destino,#buscar").prop("disabled", true);
});



$("#data").change(function () {

   var data = $("#data").val();

   alert(data);

    var url = "busca_continentes.php"

    $.ajax({
        type:"POST",
        url:url,
        data: {
            data: data
        },
        success: function (data) {
            /*alert(typeof data);
            data = JSON.stringify(data);
            alert(typeof data);*/
            $.each(data,function () {
                var paises = this.paises;

                var continente = "<option value='"+this.id+"'>"+this.nome+"</option>";
                $("#continente").append(continente);
                console.log("continente:" + this.nome);

                for (var pais in paises){
                    //console.log(paises[pais].nome);

                    if (paises[pais].pacotes){
                        $("#continente").prop("disabled",false);
                        $("#regiao").prop("disabled",false);
                        $("#destino").prop("disabled",false);
                        $("#buscar").prop("disabled", false);


                        var country = "<option value='"+paises[pais].id+"'>"+pais+"</option>";
                        $("#regiao").append(country);
                        console.log("pais: "+pais);

                        for (var pacote in paises[pais].pacotes){
                            var pack = "<option data-regiao='"+paises[pais].id+"' data-id='"+paises[pais].pacotes[pacote].id+"' value='"+paises[pais].pacotes[pacote].titulo+"'></option>";
                            $("#destino").append(pack);
                            console.log("destino: " +paises[pais].pacotes[pacote].titulo);
                        }
                        /*$(paises[pais].pacotes).each(function () {
                           console.log("destino:"+this.titulo);
                        });*/
                    }
                }
               /*$.each(this, function (key,value) {
                   console.log(key, value);
                       /!*for (var counter in jsonData.counters) {
                           console.log(jsonData.counters[counter].counter_name);
                       }*!/
               });*/
            }); 

        }
    });
   //alert(data);
});

var hide = [];
var show = [];
var check = true;
$("#regiao").change(function () {

   var regiao = $("#regiao").val();
   regiao = parseInt(regiao);

   if (hide.length > 0){
       for(var i = 0; i < hide.length; i++){
           $("#destino").append(hide[i][0]);
       }
       /*$.each(hide, function (key,value) {
       //for (var option in hide){
          $("#destino").append(this);
       });*/
       hide = [];
       check = false;
   }

    $("#destino option").each(function () {
        //alert($(this).val());

        //alert($(this).data("regiao"));
        //alert(typeof ($(this).data("regiao")));
        //alert(regiao);
        //alert(typeof regiao);


       if ($(this).data("regiao") != regiao){
           hide.push($(this).detach());
           //alert($(this).val());
       } else {
           show.push($(this));
           $(this).remove();

       }
    });

       //$(this).detach();

       $(show).each(function () {
           if ($(this).data("regiao") == regiao){
               $("#destino").append($(this));
           }
       });
        $("input[name='destino']").val("");

});

$("#buscar").click(function () {
   var url = "busca_pacote.php";

    var val = $("#destinos").val();
    var id = $("#destino option").filter(function () {
        return this.value == val;
    }).data("id");

    var id2 = id ? id : "no match";

    var regiao = $("#regiao").val();
    //alert(regiao);

    //alert(id2);
    
    $.ajax({
        type:"POST",
        url:url,
        data: {
            id_regiao: regiao,
            id_pacote: id2
        },
        success: function (data) {
            location.href="./pacotes";
        }
    });
});