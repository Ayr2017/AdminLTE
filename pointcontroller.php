<?php

function getPoint($data)
{
    if($data) return $data+0.00001;
    return 37.8002;
}
echo  getPoint(json_decode($_GET["ltt"]));