<?php

/* ----Sem autoload---
 require_once('Nomeado.php');
 require_once('Pelagem.php');
 require_once('Pessoa.php');
 require_once('Gato.php');*/




 /* ----Sem autoload---*/
include_once('autoload.php');



echo '<br>Criando Pessoa...';
$pessoa = new Pessoa('1234', 'Karol');
echo '<br>Novo:'.$pessoa->getNome();
echo '<br>CPF: '.$pessoa->getCPF();
$pessoa->setNome('Karoline Lima');
echo '<br>Novo Nome:'.$pessoa->getNome();


#Criando um gato
$gato = new Gato;
$gato->setNome('bia');
echo '<br>Meu gato é:'.$gato->getNome();
$gato->setCorPelo('branco');
echo '<br>Meu gato tem pelo:'.$gato->getCorPelo();

?>