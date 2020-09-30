<?php

if (!function_exists('env')) {
  /**
   * Get the value of environmental variables
   * 
   * @param string $name
   * @param null|mixed $fallback
   * 
   * @return mixed
   */
  function env(string $name, $fallback = null)
  {
    return $_ENV[$name] ?? getenv($name) ?: $fallback;
  }
}

if (!function_exists('is_assoc')) {
  /**
   * Check the array is associative.
   *
   * @paranm array $arr
   * 
   * @return bool
   */
  function is_assoc(array $arr)
  {
    $keys = array_keys($arr);
    
    return !($keys === array_keys($keys));
  }
}