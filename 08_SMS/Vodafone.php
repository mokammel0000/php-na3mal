<?php
class Vodafone implements SMS
{
    public function sendnew($msg)
    {
        //Vodafone API
        echo $msg.'<br>';
    }

    public function deleteSms($msg)
    {
        //Vodafone API
        echo $msg.'<br>';
    }

    public function updateSms($msg)
    {
        //Vodafone API
        echo $msg.'<br>';
    }

}