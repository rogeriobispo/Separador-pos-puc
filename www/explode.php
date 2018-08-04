<?php include('./cabecalho.html') ?>
<?php
    $frase = $_POST['frase'];
    $separador = $_POST['separador'];
    echo $separador;
    $palavras = explode($separador, $frase);
    if(count($palavras)>1){
      $auxSaida = implode(', ', $palavras);
      echo '<p> Palvras que compoem a frase: '.$auxSaida. '</p>';
    }
    else{
      echo '<p> Não pude encontrar palavras baseado no separador '.$separador.'</p>';
    }

 ?>
<?php include('./rodape.html') ?>
