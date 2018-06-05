$("input[name='projeto']").change(function () {
   if ( $("#redesign").prop("checked") === true){
       $("#site").prop("disabled", false);
   }  else {
       $("#site").prop("disabled", true);
   }
});

$("#facebook").change(function () {
    if ( $("#facebook").prop("checked") === true ){
        $("#urlfacebook").prop("disabled", false);
    } else {
        $("#urlfacebook").prop("disabled", true);
    }
});

$("#instagram").change(function () {
    if ( $("#instagram").prop("checked") === true ){
        $("#urlinstagram").prop("disabled", false);
    } else {
        $("#urlinstagram").prop("disabled", true);
    }
});

$("#linkedin").change(function () {
    if ( $("#linkedin").prop("checked") === true ){
        $("#urllinkedin").prop("disabled", false);
    } else {
        $("#urllinkedin").prop("disabled", true);
    }
});

$("#facebook").change(function () {
    if ( $("#facebook").prop("checked") === true ){
        $("#urlfacebook").prop("disabled", false);
    } else {
        $("#urlfacebook").prop("disabled", true);
    }
});

$("#outros").change(function () {
    if ( $("#outros").prop("checked") === true ){
        $("#urloutros").prop("disabled", false);
    } else {
        $("#urloutros").prop("disabled", true);
    }
});

$("input[name='idiomas']").change(function () {
    if ($("input[name='idiomas']:checked").val() === "1"){
        $("#idiomasquais").prop("disabled",false);
    } else {
        $("#idiomasquais").prop("disabled",true);
    }
});

$("input[name='sistema']").change(function () {
    if ($("input[name='sistema']:checked").val() === "1"){
        $("#formaspagamento").prop("disabled",false);
    } else {
        $("#formaspagamento").prop("disabled",true);
    }
});

$("#outrosimprescindiveis").change(function () {
   if ($("#outrosimprescindiveis:checked").val() === "outros imprescindiveis"){
       $("#outrosimprescindiveisquais").prop("disabled", false);
   } else {
       $("#outrosimprescindiveisquais").prop("disabled", true);
   }
});

$("#briefing").validator({
    focus: true,
    delay: 10000
}).on("submit", function (e) {
    if (e.isDefaultPrevented()){
        console.log('invalido');
    } else {
        var url = "./enviarbriefing.php";

        var form = $("#briefing")[0];

        var formData = new FormData(form);
        formData.append("logotipo", $("#logotipo")[0].files[0]);
        formData.append("materialgrafico", $("#materialgrafico")[0].files[0]);

        $.ajax({
            type:"POST",
            url:url,
            data:formData,
            contentType:false,
            processData:false,
            success:function (data) {
                if (data.err === "false"){
                    alert("Dados enviados com sucesso!");
                    location.reload();
                }  else {
                    alert("Erro ao enviar dados");
                }
            }
        })


        e.preventDefault();
    }


});


/*$("#enviar").click(function () {

    var url = "./enviarbriefing.php";

    var form = $("#briefing")[0];

    var formData = new FormData(form);
    formData.append("logotipo", $("#logotipo")[0].files[0]);
    formData.append("materialgrafico", $("#materialgrafico")[0].files[0]);

    $.ajax({
        type:"POST",
        url:url,
        data:formData,
        contentType:false,
        processData:false,
        success:function (data) {
            if (data.err === "false"){
                alert("Dados enviados com sucesso!");
                location.reload();
            }  else {
                alert("Erro ao enviar dados");
            }
        }
    })

});*/