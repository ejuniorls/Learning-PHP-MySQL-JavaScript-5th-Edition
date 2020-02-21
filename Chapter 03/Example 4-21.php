<?php
$bank_balance = 200;
$savings = 0;

if ($bank_balance < 100)
{
    $money = 1000;
    $bank_balance += $money;
    echo $money . "<br>";
    echo $bank_balance . "<br>";
}
elseif ($bank_balance > 200)
{
    $savings += 100;
    $bank_balance -= 100;
    echo $savings . "<br>";
    echo $bank_balance . "<br>";
}
else
{
    $savings += 50;
    $bank_balance -= 50;
    echo $savings . "<br>";
    echo $bank_balance . "<br>";
}
?>