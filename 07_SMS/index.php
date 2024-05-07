<?php
spl_autoload_register(function($class){
    require $class.'.php';
});

require 'Vodafone.php';

$sender = new NotificationService();
$sender->sendnew(new vodafone);

$sender->sendUpdate(new We);

$sender->senddelete(new We);