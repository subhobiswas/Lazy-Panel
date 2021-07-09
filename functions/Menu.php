<?php
function ActiveMenu($pages){
    $page=basename($_SERVER['PHP_SELF']);
    if(in_array($page,$pages)){
        echo 'active';
    }
}