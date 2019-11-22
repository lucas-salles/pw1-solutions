<?php

include_once('autoload.php');

echo '<br>Criando Pessoa...';
$pessoa = new App\Pessoa('1234', 'Karol');
echo '<br>Novo:'.$pessoa->getNome();
echo '<br>CPF: '.$pessoa->getCPF();
$pessoa->setNome('Karoline Lima');
echo '<br>Novo Nome:'.$pessoa->getNome();


#Criando um gato
$gato = new \App\Bixo\Gato;
$gato->setNome('bia');
echo '<br>Meu gato é:'.$gato->getNome();
$gato->setCorPelo('branco');
echo '<br>Meu gato tem pelo:'.$gato->getCorPelo();

$pessoa->setPet($gato);
echo 'Cor do eu gato '.$pessoa->getPet()->getCorPelo();
?>