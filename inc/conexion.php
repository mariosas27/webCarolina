<?php

try{
    $bd = new mysqli('localhost', 'root', 'root', 'carolina');
}catch(Exception $e){
    echo $e->getMessage(); 
    exit; 
}