<?php include('./cabecalho.html') ?>

<form method="post" action="./explode.php"  name="meuForm">

  <p>
    <div class="row">
        <div class="col-2">
          Digite um separador de plavras
        </div>
        <div class="col-2">
          <input name="frase" type="text" size="40" required class="insert-input"></input><br />
        </div>
    </div>
    <div class="row">
        <div class="col-2">
          Digite uma frase:
        </div>
        <div class="col-2">
          <input name="separador" type="text" size="1" required class="insert-input" /><br />
        </div>
    </div>
    <div class="row">
      <div class="col-2">
        <input type="submit" value="Separar" class="input-button" />
      </div>
    </div>
  </p>
</form>


 <?php include('./rodape.html') ?>
