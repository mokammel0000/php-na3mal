<?php

class BalanceException extends Exception
{
}

class LimitException extends Exception
{
}


function transfer($person, $amount, $dailyLim)
{
    //the old code(we don't use exceptions in it)
    /*if($person->budget < $amount){
        return [
            'status'=> false, 
            'messege'=>'your budget is insuffesunt'
        ];
    }
    if($person->dailyLimit > $dailyLim){
        return[
            'status'=> false, 
            'messege'=>'you are exceeding your daily limit'
        ];
    }
    return[
        'status'=> true, 
        'messege'=>'succsesful operation'
    ];*/


    if($person->budget < $amount){
        throw new BalanceException('Low balance', 3003);
    }

    if($person->dailyLimit < $dailyLim){
        throw new LimitException('You have exceeded the limit', 502);
    }
    return 'Transfer Done';

}


try{
    
$ahmed = new stdClass();
$ahmed->budget = 10000;
$ahmed->dailyLimit = 500;

$result = transfer($ahmed, 500, 30000);
echo $result;

}catch(BalanceException $e){
    echo 'there is no enough money in your balance <br>';
    echo $e->getMessage(). '<br>';
    echo $e->getCode(). '<br>';
    echo $e->getFile(). '<br>';
    echo $e->getline(). '<br>';
    echo $e->getTrace(). '<br>'; 
              //if u have alot of files, and u don't know which of them is throwing the exeption

}catch(LimitException $e){
    echo 'you have excedeed the daily limit <br>';
    echo $e->getMessage(). '<br>';
    echo $e->getCode(). '<br>';
    echo $e->getFile(). '<br>';
    echo $e->getline(). '<br>';
    echo $e->getTrace(). '<br>';

}catch(Exception $e){
    echo 'other Exceptions <br>';
    echo $e->getMessage(). '<br>';
    echo $e->getCode();

}
