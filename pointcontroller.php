<?php

function getPoint($data)
{
    if($data && $data < 37.8007) return $data+0.00001;
    elseif($data && $data >= 37.8007) return 37.8007;
    return 37.8002;
}
echo  getPoint(json_decode($_GET["ltt"]));