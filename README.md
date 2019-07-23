![logo](/src/assets/Skype.png)
===========
SkypePHP 
===========
Alisson Pelizaro (alissonpelizaro@hotmail.com)
Yes, it works!

NOTICE
======
It is a Skype PHP-API that is able to send and receive messages, get contacts, get conversations and much more!
It is still development and I am loneny in this project, so be patient...
Pull requests are always welcome!!

Installation
============
We are suggesting you to use composer, with the following : `php composer.phar require alissonpelizaro/SkypePHP`.

Basic usage
============
Include `src/Core.php` before of all.
```php
$sk = new Skype;
$sk->login('username', 'password') or die ('Username or password is invalid');
```
Documentation
=============
Sorry, I have no time to publish a clean documentation at the moment. You can see `exemple/exemple.php` for technical details. For special support see: https://developer.microsoft.com/en-us/skype/bots/docs

Special Thanks
==============
Special thanks goes to @fujimoto, you low-level knowledge heps me a lot.
