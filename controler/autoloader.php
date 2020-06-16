<?php
function chargerClasse($classname)
{
  include './class/'.$classname.'.php';
}

spl_autoload_register('chargerClasse');

?>