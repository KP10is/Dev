<?php

/**
 * @param string $valeur Valeur à nettoyer
 * @return string Valeur nettoyée
 */
function escape($valeur)
{
    return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
}

/**
 * Gère la connexion à la base de données
 * @return 
 */
function getBdd() {
    return new PDO("mysql:host=localhost;dbname=BD_kp10is_V0;charset=utf8","root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}