<?php
header("Access-Control-Allow-Origin: *");

require_once ("PHPMailer-5.2.26/class.phpmailer.php");
require_once ("PHPMailer-5.2.26/class.smtp.php");
require_once ("PHPMailer-5.2.26/class.phpmaileroauth.php");
require_once ("PHPMailer-5.2.26/class.pop3.php");
require_once ("PHPMailer-5.2.26/class.phpmaileroauthgoogle.php");


$data = $_POST;

$logotipo = $_FILES["logotipo"];
$materialgrafico = $_FILES["materialgrafico"];

$return = array("err"=>"","msg"=>"");

$msg = "";

$msg .= "Nome:" . $data["nome"] . "<br>";
$msg .= "E-mail: " . $data["email"] . "<br>";
$msg .= "Telefone: " . $data["telefone"] . "<br>";
$msg .= "Empresa: " . $data["empresa"] . "<br>";
$msg .= "Cidade: " . $data["cidade"] . "<br>";
$msg .= "Estado: " . $data["estado"] . "<br>";
$msg .= "Projeto: " . $data["projeto"] . "<br>";

if (!empty($data["site"])){
    $msg .= "Site: " . $data["site"] . "<br>";
}

if (isset($data["facebook"])){
    $msg .= "Facebook: " . $data["urlfacebook"] . "<br>";
}

if (isset($data["instagram"])){
    $msg .= "Instagram: " . $data["urlinstagram"] . "<br>";
}

if (isset($data["linkedin"])){
    $msg .= "Linkedin: " . $data["urllinkedin"] . "<br>";
}

if (isset($data["outros"])){
    $msg .= "Outros: " . $data["urloutros"] . "<br>";
}

$msg .= "Descrição em 3 palavras: " . $data["descricaopalavras"] . "<br>";
$msg .= "Descrição detalhada: " . $data["descricaodetalhada"] . "<br>";
$msg .= "Ramo de atuação: " . $data["ramo"] . "<br>";
$msg .= "Produtos e serviços: " . $data["produtosservicos"] . "<br>";
$msg .= "Público alvo: " . $data["publicoalvo"] . "<br>";
$msg .= "Concorrentes: " . $data["concorrentes"] . "<br>";
$msg .= "Diferencial: " . $data["diferencial"] . "<br>";
$msg .= "Transmitir: " . $data["transmitir"] . "<br>";
$msg .= "Não transmitir: " . $data["naotransmitir"] . "<br>";

if (isset($data["vendas"]) || isset($data["clientes"]) || isset($data["visitas"]) || isset($data["engajamentoredessociais"])
 || isset($data["divulgacao"])){
    $msg .= "Metas para o projeto:<br>";

    if (isset($data["vendas"])){
        $msg .= "Vendas" . "<br>";
    }
    if (isset($data["clientes"])){
        $msg .= "Clientes" . "<br>";
    }
    if (isset($data["visitas"])){
        $msg .= "Visitas" . "<br>";
    }
    if (isset($data["engajamentoredessociais"])){
        $msg .= "Engajamento em redes sociais" . "<br>";
    }
    if (isset($data["divulgacao"])){
        $msg .= "Divulgação" . "<br>";
    }
}

$msg .= "Meta não mencionada: " . $data["metanaomencionada"] . "<br>";
$msg .= "Cores desejadas e indesejadas: " . $data["cores"] . "<br>";
$msg .= "Referencias: " . $data["referencias"] . "<br>";
$msg .= "O que gosta nas referências: " . $data["referenciaspositivas"] . "<br>";
$msg .= "O que não gosta nas referências: " . $data["referenciasnegativas"] . "<br>";

if (isset($data["emailnewsletter"]) || isset($data["blog"]) || isset($data["forum"]) || isset($data["faturas"]) ||
    isset($data["calendarioagendamento"]) || isset($data["lojavirtual"]) || isset($data["manutencaosuporte"])){

    $msg .= "Necessidades técnicas:<br>";
    if (isset($data["emailnewsletter"])){
        $msg .= "E-mail marketing e newsletter<br>";
    }
    if (isset($data["blog"])){
        $msg .= "Blog<br>";
    }
    if (isset($data["forum"])){
        $msg .= "Forum<br>";
    }
    if (isset($data["faturas"])){
        $msg .= "Faturas<br>";
    }
    if (isset($data["calendarioagendamento"])){
        $msg .= "Calendário e agendamento<br>";
    }
    if (isset($data["lojavirtual"])){
        $msg .= "Loja virtual<br>";
    }
    if (isset($data["manutencaosuporte"])){
        $msg .=  "Manutenção e suporte<br>";
    }
}

$msg .= "Necessidade não mencionada: " . $data["necessidadenaomencionada"] . "<br>";

if ($data["idiomas"] === "1"){
    $msg .= "Conteúdo em mais de um idioma: Sim, " . $data["idiomasquais"] . "<br>";
} else if ($data["idiomas"] === "0"){
    $msg .= "Conteúdo em mais de um idioma: Não<br>";
}

if ($data["sistema"] === "1"){
    $msg .= "Sistema de loja virtual: Sim, " . $data["formaspagamento"] . "<br>";
} else if ($data["sistema"] === "0"){
    $msg .= "Sistema de loja virtual: Não<br>";
}

if (isset($data["home"]) || isset($data["institucional"]) || isset($data["produtos"]) || isset($data["servicos"])
    || isset($data["noticiasblog"]) || isset($data["parceiros"]) || isset($data["representantes"]) ||
    isset($data["galeriafotos"]) || isset($data["galeriavideos"]) || isset($data["trabalheconosco"]) ||
    isset($data["contato"]) || isset($data["vitrine"]) || isset($data["outrosimprescindiveis"])){

    $msg .= "Páginas/funcionalidades imprescindíveis: <br>";
    if (isset($data["home"])){
        $msg .= "Home<br>";
    }
    if (isset($data["institucional"])){
        $msg .= "Institucional<br>";
    }
    if (isset($data["produtos"])){
        $msg .= "Produtos<br>";
    }
    if (isset($data["servicos"])){
        $msg .= "Servicos<br>";
    }
    if (isset($data["noticiasblog"])){
        $msg .= "Noticias/Blog<br>";
    }
    if (isset($data["parceiros"])){
        $msg .= "Parceiros<br>";
    }
    if (isset($data["representantes"])){
        $msg .= "Representantes<br>";
    }
    if (isset($data["galeriafotos"])){
        $msg .= "Galeria de fotos<br>";
    }
    if (isset($data["galeriavideos"])){
        $msg .= "Galeria de videos<br>";
    }
    if (isset($data["trabalheconosco"])){
        $msg .= "Trabalhe conosco<br>";
    }
    if (isset($data["contato"])){
        $msg .= "Contato<br>";
    }
    if (isset($data["vitrine"])){
        $msg .= "Vitrine<br>";
    }
    if (isset($data["outrosimprescindiveis"])){
        $msg .= $data["outrosimprescindiveisquais"] . "<br>";
    }
}

try{
    $mail = new PHPMailer(true);
    $mail->CharSet='UTF-8';

    $mail->setFrom($data["email"], $data["nome"], 0);

    $mail->addAddress("contato@pxpdigital.com.br");
    $mail->addAddress("paulo.picchetto@pxpdigital.com.br");
    $mail->addAddress("daniel@pxpdigital.com.br");
    //$mail->addAddress("deni@pxpdigital.com.br");

    $mail->Subject = "Briefing criação de website";

    $mail->msgHTML($msg);

    if ($logotipo["error"] === 0){
        $mail->addAttachment($logotipo["tmp_name"],$logotipo["name"]);
    }

    if ($materialgrafico["error"] === 0){
        $mail->addAttachment($materialgrafico["tmp_name"],$materialgrafico["name"]);
    }

    $mail->isMail();

    if (!$mail->send()){
        $return["msg"] =  "Mailer Error: " . $mail->ErrorInfo;
        $return["err"] = "true";
    } else {
        $return["msg"] = "Message sent!";
        $return["err"] = "false";
    }
} catch (Exception $exception){
    $return["msg"] = 'Message could not be sent. Mailer Error: ' . $this->ErrorInfo;
    $return["err"] = "true";
}

header("Content-type:application/json");
echo json_encode($return);