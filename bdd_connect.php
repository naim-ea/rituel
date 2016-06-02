<?php

try
{
	$bdd = new PDO('mysql:host=baptistevillain.fr;dbname=rituel;charset=utf8', 'nem', 'dalle');
  echo "wowowowow";
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>