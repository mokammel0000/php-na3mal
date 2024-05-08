<?php

class NotificationService
{
    public function sendNew(SMS $sender)
    {
        $sender->sendnew('send new message');
    }
    public function sendUpdate(SMS $sender)
    {
        $sender->updateSms('we update the message');
    }
    public function sendDelete(SMS $sender)
    {
        $sender->deleteSms('the last message is been deleted');
    }
}