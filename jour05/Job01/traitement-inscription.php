<?php
require_once "config.php";

header('Content-Type: application/json');
$erreur = [];

$prenom = trim($_SESSION['prenom'] ?? '');
$nom = trim($_SESSION['npm'] ?? '');
$email = trim($_SESSION['email'] ?? '');
$password = $_SESSION['password'] ?? '';
$confirm = $_SESSION['confirm'] ?? '';

if(strlen($prenom) < 2) $erreur['prenom'] = "Prénom Trop Court";
if(strlen($nom) < 2) $erreur['nom'] = "Nom Trop Court";








?>