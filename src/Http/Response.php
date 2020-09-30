<?php

namespace Ethereal\Http;

class Response
{
  const 
    HTTP_CONTINUE = 100,
    HTTP_SWITCHING_PROTOCOLS = 101,
    HTTP_OK = 200,
    HTTP_CREATED = 201,
    HTTP_ACCEPTED = 202,
    HTTP_NON_AUTHORITATIVE_INFORMATION = 203,
    HTTP_NO_CONTENT = 204,
    HTTP_RESET_CONTENT = 205,
    HTTP_PARTIAL_CONTENT = 206,
    HTTP_MULTIPLE_CHOICES = 300,
    HTTP_MOVED_PERMANENTLY = 301,
    HTTP_FOUND = 302,
    HTTP_SEE_OTHER = 303,
    HTTP_NOT_MODIFIED = 304,
    HTTP_USE_PROXY = 305,
    HTTP_TEMPORARY_REDIRECT = 307,
    HTTP_BAD_REQUEST = 400,
    HTTP_UNAUTHORIZED = 401,
    HTTP_PAYMENT_REQUIRED = 402,
    HTTP_FORBIDDEN = 403,
    HTTP_NOT_FOUND = 404,
    HTTP_METHOD_NOT_ALLOWED = 405,
    HTTP_NOT_ACCEPTABLE = 406,
    HTTP_PROXY_AUTHENTICATION_REQUIRED = 407,
    HTTP_REQUEST_TIMEOUT = 408,
    HTTP_CONFLIT = 409,
    HTTP_GONE = 410,
    HTTP_LENGTH_REQUIRED = 411,
    HTTP_PRECONDITION_FAILED = 412,
    HTTP_REQUESY_ENTITY_TOO_LARGE = 413,
    HTTP_URI_TOO_LONG = 414,
    HTTP_UNSUPPORTED_MEDIA_TYPE = 415,
    HTTP_REQUEST_RANGE_NOT_SATIFIABLE = 416,
    HTTP_EXCEPTATION_FAILED = 417,
    HTTP_INTERNAL_SERVER_ERROR = 500,
    HTTP_NOT_IMPLEMENTED = 501,
    HTTP_BAD_GATEWAY = 502,
    HTTP_SERVICE_UNAVAILABLE = 503,
    HTTP_GATEWAY_TIMEOUT = 504,
    HTTP_VERSION_NOT_SUPPORTED = 505;

  const HTTP_STATUS_CODE = [
    100 => "HTTP_CONTINUE",
    101 => "HTTP_SWITCHING_PROTOCOLS",
    200 => "HTTP_OK",
    201 => "HTTP_CREATED",
    202 => "HTTP_ACCEPTED",
    203 => "HTTP_NON_AUTHORITATIVE_INFORMATION",
    204 => "HTTP_NO_CONTENT",
    205 => "HTTP_RESET_CONTENT",
    206 => "HTTP_PARTIAL_CONTENT",
    300 => "HTTP_MULTIPLE_CHOICES",
    301 => "HTTP_MOVED_PERMANENTLY",
    302 => "HTTP_FOUND",
    303 => "HTTP_SEE_OTHER",
    304 => "HTTP_NOT_MODIFIED",
    305 => "HTTP_USE_PROXY",
    307 => "HTTP_TEMPORARY_REDIRECT",
    400 => "HTTP_BAD_REQUEST",
    401 => "HTTP_UNAUTHORIZED",
    402 => "HTTP_PAYMENT_REQUIRED",
    403 => "HTTP_FORBIDDEN",
    404 => "HTTP_NOT_FOUND",
    405 => "HTTP_METHOD_NOT_ALLOWED",
    406 => "HTTP_NOT_ACCEPTABLE",
    407 => "HTTP_PROXY_AUTHENTICATION_REQUIRED",
    408 => "HTTP_REQUEST_TIMEOUT",
    409 => "HTTP_CONFLIT",
    410 => "HTTP_GONE",
    411 => "HTTP_LENGTH_REQUIRED",
    412 => "HTTP_PRECONDITION_FAILED",
    413 => "HTTP_REQUESY_ENTITY_TOO_LARGE",
    414 => "HTTP_URI_TOO_LONG",
    415 => "HTTP_UNSUPPORTED_MEDIA_TYPE",
    416 => "HTTP_REQUEST_RANGE_NOT_SATIFIABLE",
    417 => "HTTP_EXCEPTATION_FAILED",
    500 => "HTTP_INTERNAL_SERVER_ERROR",
    501 => "HTTP_NOT_IMPLEMENTED",
    502 => "HTTP_BAD_GATEWAY",
    503 => "HTTP_SERVICE_UNAVAILABLE",
    504 => "HTTP_GATEWAY_TIMEOUT",
    505 => "HTTP_VERSION_NOT_SUPPORTED",
  ];
  
  protected $headers = [];
  
  protected $statusCode = 200;
  
  public function setStatusCode(int $code)
  {
    if (!issst(self::HTTP_STATUS_CODE[$code])) {
      throw new HttpResponseException($code);
    }
    
    $this->statusCode = $code;
  }
  
  public function setHeader(string $name, string $value)
  {
    $this->headers[$name] = $value;
  }
  
  public function setHeaders(array $headers)
  {
    foreach ($headers as $name => $value) {
      $this->setHeader($name, $value);
    }
  }
}
