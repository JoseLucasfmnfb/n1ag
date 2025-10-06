<?php global $info; ?>
<section id="contato">	
	<article>
		<div class="container">
			<h2 class="text-center">Contato</h2>
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<form id="form">
						<input type="hidden" name="para" placeholder="para" value="<?php echo $info['email']; ?>">
						<input type="hidden" name="assunto" placeholder="assunto" value="Formulário de contato">
						<input type="text" required="require" name="nome" placeholder="Nome">
						<input type="email" required="require" name="email" placeholder="Email">
						<input type="text" required="require" name="telefone" placeholder="Telefone" class="telefone_celular">
						<!-- <input required="require" type="file" name="arquivos[]" multiple placeholder="Arquivos"> -->
						<textarea required="require" name="mensagem" placeholder="Mensagem"></textarea>
						<input class="primary-button" type="submit" value="Enviar">
					</form>
				</div>
			</div>
		</div>
	</article>
</section>