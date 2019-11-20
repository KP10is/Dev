
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=BD_kp10is_V0', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>