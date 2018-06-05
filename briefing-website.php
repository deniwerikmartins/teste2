<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Briefing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js" integrity="sha256-UiqIqgNXwR8ChFMaD8VrY0tBUIl/soqb7msaauJWZVc=" crossorigin="anonymous"></script>

	<style type="text/css">
	.form-control:focus {
		background-color: #fff;
		border-color: #495057;
		outline: 0;
		box-shadow: none;
	}
</style>
</head>
<body>
<header>
    <div  class="py-5" style="background-color: black; text-align: center" >
        <img src="/images/logo-pxp.png" alt="logo" class="img-flui" style="width: 16%;">
    </div>
</header>

<section class="py-4">
	<div class="container">
	    <h1>Briefing criação de website</h1>
	    <h3>Informações básicas</h3>
	    <form action="" id="briefing" enctype="multipart/form-data">
	    	<div class="form-group">
		        <label for="nome">Nome:</label>
		        <input type="text" name="nome" class="form-control" id="nome" required>
		    </div>
	        
	        <div class="form-group">
		        <label for="email">E-mail:</label>
		        <input type="email" name="email" class="form-control" id="email" required>
	    	</div>

	    	<div class="form-row pb-2">
	    		<div class="col">
	    			<label for="telefone">Telefone:</label>
	    			<input type="tel" name="telefone" class="form-control" id="telefone">
	    		</div>
	    		<div class="col">
	    			<label for="empresa">Empresa:</label>
	    			<input type="text" name="empresa" class="form-control"  id="empresa">
	    		</div>
	    	</div>

	    	<div class="form-row pb-2">
	    		<div class="col">
	    			 <label for="cidade">Cidade:</label>
	    			 <input type="text" name="cidade" class="form-control" id="cidade">
	    		</div>
	    		<div class="col">
	    			<label for="estado">Estado:</label>
	    			<input type="text" name="estado" class="form-control" id="estado">
	    		</div>
	    	</div>
	       
	       <div class="form-group pt-2">
				<label for="projeto">Projeto novo ou re-design?</label>
				<div class="form-check">
					<input  class="form-check-input" type="radio" name="projeto" id="novo" value="novo">
	            	<label class="form-check-label" for="novo">Novo</label>
	           	</div>
	           	<div class="form-check">
	            	<input  class="form-check-input" type="radio" name="projeto" id="redesign" value="redesign">
	           	 	<label class="form-check-label" for="redesign">Re-design</label>
	           	</div>
	       </div>

	       <div class="form-group pb-3">
		        <label for="site">Caso seja re-design, informar site atual:</label>
		       	<input  class="form-control" type="text" name="site" id="site" disabled>
	    	</div>

	    	 <div class="dropdown-divider"></div>

	    	<h3>Informação da marca / empresa</h3>
			
			<div class="form-group">
		        <label for="logotipo">Possui um logotipo ou manual de identidade? Por favor enviar os arquivos com o briefing</label>
		        <input type="file" name="logotipo"  class="form-control-file" id="logotipo">
		    </div>

		    <div class="form-group">
		         <label for="materialgrafico"> Possui algum material gráfico? (Cartão de Visitas, Envelope, Pasta, Banners) Por favor enviar os arquivos com o briefing </label>
		        <input type="file" class="form-control-file" name="materialgrafico" id="materialgrafico">
		    </div>
			

			<div class="form-group">
	        	<label for="redessociais" class="pb-2">Possui redes sociais? Se sim, quais?</label>

	        	<div class="form-row pb-3">
	        		<div class="col-sm-2">
	        			<div class="form-check form-check-inline">
	        				<input class="form-check-input" type="checkbox" name="facebook" id="facebook" value="facebook">
	        				<label for="facebook" class="col-form-label">Facebook</label>
	        			</div>
	        		</div>
	        		<div class="col-sm-10">
	        			<input class="form-control" type="text" name="urlfacebook" id="urlfacebook" placeholder="Endereço" disabled>
	        		</div>
	        	</div>

	        	<div class="form-row pb-3">
	        		<div class="col-sm-2">
	        			<div class="form-check form-check-inline">
	        				<input class="form-check-input" type="checkbox" name="instagram" id="instagram" value="instagram">
	        				<label for="instagram" class="col-form-label"> Instagram</label>
	        			</div>
	        		</div>
	        		<div class="col-sm-10">
	        			 <input class="form-control" type="text" name="urlinstagram" id="urlinstagram" placeholder="Endereço" disabled>
	        		</div>
	        	</div>

	        	<div class="form-row pb-3">
	        		<div class="col-sm-2">
	        			<div class="form-check form-check-inline">
	        				<input class="form-check-input" type="checkbox" name="linkedin" id="linkedin" value="linkedin">
	        				<label for="linkedin" class="col-form-label">LinkedIn</label>
	        			</div>
	        		</div>
	        		<div class="col-sm-10">
	        			 <input class="form-control" type="text" name="urllinkedin" id="urllinkedin" placeholder="Endereço" disabled>
	        		</div>
	        	</div>

	        	<div class="form-row pb-3">
	        		<div class="col-sm-2">
	        			<div class="form-check form-check-inline">
	        				<input class="form-check-input" type="checkbox" name="outros" id="outros" value="outros">
	        				<label for="outros" class="col-form-label">Outros</label>
	        			</div>
	        		</div>
	        		<div class="col-sm-10">
	        			 <textarea class="form-control" name="urloutros" id="urloutros" cols="30" rows="3" placeholder="Endereços" disabled></textarea>
	        		</div>
	        	</div>
	        </div>
	          
			<div class="form-group">					
				<label for="descricaopalavras">Descreva seu Projeto/Empresa em 3 palavras:</label>
				<textarea class="form-control" name="descricaopalavras" id="descricaopalavras   " cols="60" rows="1"></textarea>
			</div>

			<div class="form-group">
				<label for="descricaodetalhada"> Descreva seu Projeto/Empresa detalhadamente:</label>
				<textarea class="form-control" name="descricaodetalhada" id="descricaodetalhada" cols="60" rows="3"></textarea>
			</div>

			<div class="form-row pb-2">
	    		<div class="col">
	    			<label for="ramoatuacao">Ramo de atuação:</label>
	    			<input class="form-control" type="text" name="ramo" id="ramo">
	    		</div>
	    		<div class="col">
	    			<label for="produtosservicos">Produtos e serviços:</label>
	    			<input class="form-control" type="text" name="produtosservicos" id="produtosservicos">
	    		</div>
	    	</div>

	    	<div class="form-row pb-2">
	    		<div class="col">
	    			<label for="publicoalvo">Público alvo:</label>
	    			<input class="form-control" type="text" name="publicoalvo" id="publicoalvo">
	    		</div>
	    		<div class="col">
	    			<label for="concorrentes">Concorrentes (Seus principais concorrentes):</label>
	    			<input class="form-control" type="text" name="concorrentes" id="concorrentes">
	    		</div>
	    	</div>

	    	<div class="form-group pb-3">
		         <label for="diferencial"> Diferencial:</label>
		       	<input  class="form-control" type="text" name="diferencial" id="diferencial">
	    	</div>
	        
			
			<div class="dropdown-divider"></div>

			<h3>Informações técnicas para a criação do website</h3>

			<div class="form-group">
		          <label for="transmitir">Que mensagem deve transmitir?</label>
		       	<input  class="form-control" type="text" name="transmitir" id="transmitir">
	    	</div>

	    	<div class="form-group">
		         <label for="naotransmitir">Que mensagem não deve transmitir?</label>
		       	<input  class="form-control" type="text" name="naotransmitir" id="naotransmitir">
	    	</div>

	        <div class="form-group">
	        	<label for="metas">Metas para o projeto? Selecione as principais metas que seu projeto deva atingir com seus clientes:</label>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="vendas" id="vendas" value="vendas">
	        		<label class="form-check-label" for="vendas">
	        			Geração de receita (vendas)
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="clientes" id="clientes" value="clientes">
	        		<label class="form-check-label" for="clientes">
	        			Captação de clientes
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="visitas" id="visitas" value="visitas">
	        		<label class="form-check-label" for="visitas">
	        			 Engajamento de visitas 
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="engajamentoredessociais" id="engajamentoredessociais" value="engajamentoredessociais">
	        		<label class="form-check-label" for="engajamentoredessociais">
	        			Engajamento redes sociais
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="divulgacao" id="divulgacao" value="divulgacao">
	        		<label class="form-check-label" for="divulgacao">
	        			Divulgação de projetos e serviços 
	        		</label>
	        	</div>
	        </div>

	        <div class="form-group">
		          <label for="metanaomencionada"> Possui alguma meta não mencionada?</label>
		       	<input  class="form-control" type="text" name="metanaomencionada" id="metanaomencionada">
	    	</div>

	    	 <div class="form-group">
		          <label for="cores"> Cores desejadas / Cores indesejadas:</label>
		       	<input  class="form-control" type="text" name="cores" id="cores">
	    	</div>

	    	<div class="form-group">
				<label for="referencias">Referências (Sites, Projetos, Portfólios):</label>
				<textarea class="form-control" name="referencias" id="referencias" cols="60" rows="3"></textarea>
			</div>

			 <div class="form-group">
		          <label for="referenciaspositivas"> O que você gosta nas referências mencionadas?</label>
		       	<input  class="form-control" type="text" name="referenciaspositivas" id="referenciaspositivas">
	    	</div>

	    	 <div class="form-group">
		          <label for="referenciasnegativas">O que você <strong>NÃO</strong> gosta nas referências mencionadas?</label>
		       	<input  class="form-control" type="text" name="referenciasnegativas" id="referenciasnegativas">
	    	</div>

	    	<div class="form-group">
	        	<label for="necessidades">Necessidades técnicas:</label>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="emailnewsletter" id="emailnewsletter" value="emailnewsletter">
	        		<label class="form-check-label" for="emailnewsletter">
	        			 E-mail marketing e newsletter
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="blog" id="blog" value="blog">
	        		<label class="form-check-label" for="blog">
	        			Blog
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="forum" id="forum" value="forum">
	        		<label class="form-check-label" for="forum">
	        			 Fórum 
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="faturas" id="faturas" value="faturas">
	        		<label class="form-check-label" for="faturas">
	        			Sistema de faturas
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="calendarioagendamento" id="calendarioagendamento" value="calendarioagendamento">
	        		<label class="form-check-label" for="calendarioagendamento">
	        			Calendario e agendamento
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="lojavirtual" id="lojavirtual" value="lojavirtual">
	        		<label class="form-check-label" for="lojavirtual">
	        			Loja virtual
	        		</label>
	        	</div>

	        	<div class="form-check">
	        		<input class="form-check-input" type="checkbox" name="manutencaosuporte" id="manutencaosuporte" value="manutencaosuporte">
	        		<label class="form-check-label" for="manutencaosuporte">
	        			Manutenção e suporte
	        		</label>
	        	</div>
	        </div>

	        <div class="form-group">
		          <label for="metanaomencionada"> Possui alguma necessidade não mencionada?</label>
		       	<input  class="form-control" type="text" name="necessidadenaomencionada" id="necessidadenaomencionada">
	    	</div>

	    	 <div class="form-group pt-2">
				<label for="conteudo">Conteúdo em mais de um idioma?</label>
				<div class="form-check">
					<input  class="form-check-input" type="radio" name="idiomas" id="idiomasnao" value="0">
	            	<label class="form-check-label" for="idiomasnao">Não</label>
	           	</div>
	           	<div class="form-check">
	            	<input  class="form-check-input" type="radio" name="idiomas" id="idiomassim" value="1">
	           	 	<label class="form-check-label" for="idiomassim">Sim</label>
	           	</div>
	       </div>

	       <div class="form-group pb-3">
		        <label for="quais">Quais?</label>
		       	<input  class="form-control" name="idiomasquais" id="idiomasquais" disabled>
	    	</div>
			

	    	<div class="form-group">
	    		<label for="sistema">Sistema de loja virtual? Se sim, descriminar as formas de pagamento(Pagseguro, Paypal, etc.) e meio de entrega (Correios, transportadora própria, etc.)</label>
	    		<div class="form-check">
	    			<input  class="form-check-input" type="radio" name="sistema" id="sistemanao" value="0">
	    			<label class="form-check-label" for="sistemanao">Não</label>
	    		</div>
	    		<div class="form-check">
	    			<input  class="form-check-input" type="radio" name="sistema" id="sistemasim" value="1">
	    			<label class="form-check-label" for="sistemasim">Sim</label>
	    		</div>
	    	</div>

	    	<div class="form-group">
	    		<label for="formaspagamento">Formas de Pagamento?</label>
	    		<input  class="form-control" name="formaspagamento" id="formaspagamento" disabled>
	    	</div>


	    	<div class="form-group">
	    		<label for="imprescindiveis">Quais páginas/funcionalidades são imprescindíveis pasa o seu site? Veja alguns exemplos:</label>

	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="home" id="home" value="home">
	    			<label class="form-check-label" for="home">
	    				Home (Página inicial)
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="institucional" id="institucional" value="institucional">
	    			<label class="form-check-label" for="institucional">
	    				Institucional (Quem somos/Missão/Visão)
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="produtos" id="produtos" value="produtos">
	    			<label class="form-check-label" for="produtos">
	    				Produtos
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="servicos" id="servicos" value="servicos">
	    			<label class="form-check-label" for="servicos">
	    				Serviços
	    			</label> 
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="noticiasblog" id="noticiasblog" value="noticiasblog">
	    			<label class="form-check-label" for="noticiasblog">
	    				Notícias/blog
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="parceiros" id="parceiros" value="parceiros">
	    			<label class="form-check-label" for="parceiros">
	    				Parceiros
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="representantes" id="representantes" value="representantes">
	    			<label class="form-check-label" for="representantes">
	    				Representantes
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="galeriafotos" id="galeriafotos" value="galeria de fotos">
	    			<label class="form-check-label" for="galeriafotos">
	    				Galeria de fotos
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="galeriavideos" id="galeriavideos" value="galeria de videos">
	    			<label class="form-check-label" for="galeriavideos">
	    				Galeria de videos
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="trabalheconosco" id="trabalheconosco" value="trabalhe conosco">
	    			<label class="form-check-label" for="trabalheconosco">
	    				Trabalhe conosco
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="contato" id="contato" value="contato">
	    			<label class="form-check-label" for="contato">
	    				Contato (Fale conosco)
	    			</label>
	    		</div>
	    		<div class="form-check">
	    			<input class="form-check-input" type="checkbox" name="vitrine" id="vitrine" value="vitrine">
	    			<label class="form-check-label" for="evitrine">
	    				Vitrine/E-commerce/Ferramenta de venda online
	    			</label>
	    		</div>

	    		<div class="form-row pb-3">
	        		<div class="col-sm-1">
	        			<div class="form-check form-check-inline">
	        				<input class="form-check-input" type="checkbox" name="outrosimprescindiveis" id="outrosimprescindiveis" value="outros imprescindiveis">
	        				<label for="outrosimprescindiveis" class="col-form-label">Outros</label>
	        			</div>
	        		</div>
	        		<div class="col-sm-10">
	        			<input class="form-control" type="text" name="outrosimprescindiveisquais" id="outrosimprescindiveisquais" disabled>
	        		</div>
	        	</div>
	    	</div>
	    	<button type="submit" class="btn btn-primary" id="enviar" style="background-color: #ff7e14; border-color: transparent;">ENVIAR</button>
	    </form>
	</div>
</section>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="/scripts/jquery-3.3.1.js"></script>
<script src="/scripts/main4.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>
</html>