<?php

// var_Dump and Die
function dnd($data) {
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}

function in($data) {
  $data = strip_tags($data);
  return trim(htmlentities($data, ENT_QUOTES, 'UTF-8'));
}

function out($data) {
  return htmlentities($data, ENT_QUOTES, 'UTF-8');
}
