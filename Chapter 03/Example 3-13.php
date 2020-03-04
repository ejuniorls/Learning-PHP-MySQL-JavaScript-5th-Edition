<?php
function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}

echo longdate(time()) . "<br>";
echo longdate(time() - 17 * 24 * 60 *60);
?>
