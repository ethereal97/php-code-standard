<?php

namespace Ethereal\Http;

use Exception;

class HttpResponeException extends Exception
{
  public function __construct(int $code)
  {
    parent::__construct(sprintf('HTTP Response [%s] is not valid', $code));
  }
}
