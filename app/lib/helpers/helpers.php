<?php

function dnd($data) //debug function
{
 echo '<pre>';
 var_dump($data);
 echo '</pre>';
  die;

}

function saitize($dirty)
{
   return htmlentities($dirty, ENT_QUOTES , 'UTF-8');
}
