<?php

trait CommonMethods
{
    public function foo()
    {
        echo 'Foo Method';
    }
    public function print_this()
    {
        echo '<pre>';
        var_dump($this);
        echo '</pre>';
    }
}
