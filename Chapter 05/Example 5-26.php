<?php
$test = new User();
$test->copyright();

class User
{
    final function copyright()
    {
        echo "This class was written by Joe Smith";
    }
}
?>