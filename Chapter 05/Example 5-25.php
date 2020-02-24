<?php
$obj = new Tiger();

echo "Tiger have...<br>";
echo "Fur: " . $obj->fur . "<br>";
echo "Stripes: " . $obj->stripes;

class Wildcat
{
    public $fur;

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}
?>