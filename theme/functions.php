<?php

function get_title($title) {
  global $tartarus;
  return htmlentities($title . (isset($tartarus->titleAppend) ? $tartarus->titleAppend : null));
}