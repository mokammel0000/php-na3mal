<?php

spl_autoload_register(function ($class) {
    require $class . '.php';
});


$sender = new NotificationService();
$sender->sendnew(new We());

$sender->sendUpdate(new We());

$sender->senddelete(new We());
