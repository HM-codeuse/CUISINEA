<?php 

try 
{
    $pdo = new PDO('mysql:dbname=hayiri_live_cuisinea;host=mysql-hayiri.alwaysdata.net;charset=utf8mb4', 'hayiri_cuisinea', 'Wandema190489$');
}
catch (Exception $e)
{
    die('Erreur: '. $e->getMessage());
}