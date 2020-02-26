<?php
$month = 2; // September (only has 30 days)
$day = 25; // 31st
$year = 2020; // 2022

if (checkdate($month, $day, $year))
    echo "Date is valid";
else echo "Date is invalid";
?>