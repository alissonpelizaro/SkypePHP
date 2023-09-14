
![logo](/src/assets/Skype.png)
SkypePHP 
===========
LinkedIn: [Alisson Pelizaro](https://br.linkedin.com/in/alisson-pelizaro) 

Welcome to the Skype PHP API Interface, a versatile tool that enables you to seamlessly send and receive messages, access contacts, retrieve conversations, and much more! While this project is currently in active development, your support and contributions are greatly appreciated

## Project Status: In Development

Please keep in mind that this project is an ongoing endeavor, and we are continuously working to enhance its functionality and capabilities. Your patience and understanding are invaluable as we strive to make this interface the best it can be.

## Contributions

We invite you to become a part of this project's journey by contributing through pull requests. Your ideas, enhancements, and bug fixes are invaluable in shaping the future of this interface. Together, we can make it even more powerful and user-friendly.

#### IMPORTANT NOTE: In the current version, only pure text messages working in chat.

## Installation
We are suggesting you to use composer, with the following : 
```shell
php composer.phar require alissonpelizaro/SkypePHP
```

## Basic usage
```php
include 'src/Core.php';

$sk = new Skype;
$sk->login('username', 'password') or die ('Username or password is invalid');
```

> NOTE: If the login returns with an error of Authentication failed with the correct username and password, its asking for CAPTCHA, Please perform a login/(re)login manually using a browser to solve the CAPTCHA. After that, you can try to perfom the API login again.

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

> For groups messaging, you can use the same method for chat. You'll only need to provide the group id instead the chat id.

## Documentation
Please note that a comprehensive documentation is currently in the works, but hasn't been finalized yet due to time constraints. In the meantime, you can explore the technical details by referring to the `example/example.php` file provided within the project.

For additional information and support related to the Skype API, please visit the official Skype API documentation at: [Skype API Documentation](https://developer.microsoft.com/en-us/skype/bots/docs)

#### I really hope this can helps you somehow, good luck! 
