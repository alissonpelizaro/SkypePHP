<?php

/*
* Alisson Pelizaro (alissonpelizaro@hotmail.com)
* Github: https://github.com/alissonpelizaro/SkypePHP
*
* Pt: Arquivo de exepmlo de utilização
* En: Utilization exemple file
*/


include '../Core.php';

$sk = new SkypePHP;
$sh->login('username', 'password') or die ('Nome de usuário ou senha inválidos');

$sh->sendMessage('skype_id', 'Mensagem');

 ?>
