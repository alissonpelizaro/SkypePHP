![logo](/src/assets/Skype.png)
SkypePHP 
===========
LinkedIn: [Alisson Pelizaro](https://br.linkedin.com/in/alisson-pelizaro) \
Yes, it works!

## NOTICE
It is a Skype PHP API interface, that is able to send and receive messages, get contacts, get conversations and much more!
It is still development and I am loneny in this project, so be patient...
Pull requests are always welcome!!

#### IMPORTANT NOTE: In the current version, only pure text messages working in chat.

## Installation
We are suggesting you to use composer, with the following : 
```shell
php composer.phar require alissonpelizaro/SkypePHP
```

## Basic usage
Include `src/Core.php` before of all.
```php
$sk = new Skype;
$sk->login('username', 'password') or die ('Username or password is invalid');
```

> NOTE: If the login returns Authentication failed with the right user and password, it's possible that the Skype API is asking for a CAPTCHA quizz. In This case, you will need to perform a login/relogin manually using a browser to solve the CAPTCHA. After that, you can try to perfom an API login again.

After login, you'll be able to run the following Skype functions:

### Getting basic informations 
_Get your local ID:_
```php
$sk->getLocalUserId();
```

_Get you profile info:_
```php
$sk->readMyProfile();
```

### Handling contacts 
_Get your conversation list:_
```php
$sk->getConversationsList();
```

_Get contacts list:_
```php
$sk->getContactsList();
```

_Get users profile info:_
```php
$sk->readProfile([{USER_ID}, {USER_ID}]);
```
> NOTE: The parameter must be an array of users id, at least 1 item 

_Search a Skype user by username:_
```php
$sk->searchSomeone('jonny_depp');
```

_Add a contact by username:_
```php
$sk->addContact('jonny_depp', 'Hi Jonny, please add me to talk about pirates');
```

### Handling chats 
_Get messages in a chat:_
```php
$sk->getMessagesList({USER_ID}, $size = 10);
```
>NOTE: Size is optional. Default is 100, that means will bring the 100 last messages chatted

_Send a chat message:_
```php
$sk->sendMessage({USER_ID}, 'Hi, how are you doing today?');
```

### Handling groups 
_Creates a group:_
```php
$sk->createGroup([{USER_ID}, {USER_ID}], 'Next trip group');
```

_Changes the group name:_
```php
$sk->setGroupTopic({GROUP_ID}, '(cancelled) Next trip group :( ');
```

_Gets group info:_
```php
$sk->getGroupInfo({GROUP_ID});
```

_Adds someone to group:_
```php
$sk->addUserToGroup({GROUP_ID}, {USER_ID});
```

_Removes someone from group:_
```php
$sk->kickUser({GROUP_ID}, {USER_ID});
```

_Leaves a group:_
```php
$sk->leaveGroup({GROUP_ID});
```

> For groups messaging, you can use the same mothods for chat messaging. You'll only need to provide the group id instead the chat id.

## Documentation
Sorry, I hadn't time to publish a clean documentation at the moment. You can see `example/example.php` for technical details. For Skype API support see: https://developer.microsoft.com/en-us/skype/bots/docs

#### I really hope this can helps you somehow, good luck! 
