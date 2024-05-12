<?php

interface SMS
{
    public function sendnew($msg);
    public function updateSms($msg);
    public function deleteSms($msg);
}
