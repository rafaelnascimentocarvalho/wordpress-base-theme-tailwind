<?php 

function get_single_value($array) {
  return is_array($array) ? reset($array) : $array;
}

function get_fields($id){
  $meta_data = get_post_meta($id);
  $fields = [];

  foreach ($meta_data as $key => $value) {
    $reduced_value = get_single_value($value);
    $fields[$key] = $reduced_value;
  }

  return $fields;
}