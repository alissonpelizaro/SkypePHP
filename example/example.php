<?php

/*
* Alisson Pelizaro (alissonpelizaro@hotmail.com)
* Github: https://github.com/alissonpelizaro/SkypePHP
*
* Pt: Arquivo de exemplo de utilização
* En: Exemple usage file
*/

include '../src/Core.php';

$sk = new Skype;
$sk->login('username', 'password') or die ('Username or password is invalid');


/*
* Pt: Enviar uma mensagen
* En: Send a message
*/
$sk->sendMessage('skype_id', 'Mensagem');

/*
* Pt: Obter array de todas as conversas
* En: Get array of all conversations
*/
//$sk->getConversationsList();

/*
* Pt: Obter mensagens de uma conversa
* En: Get conversation messages
*/
//$sk->getMessagesList('contact_id');



 ?>
