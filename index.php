<?php 

require_once __DIR__.'/vendor/autoload.php'; // Chargement automatique des fichiers à l'aide de Composer autoload 
/*require __DIR__."/anthony/app/Calcul.php";*/
use Calcul\Mlay\Calcul;

echo Calcul::math(4,5);

