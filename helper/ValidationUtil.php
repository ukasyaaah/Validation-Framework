<?php

class ValidationUtil
{
  static function validateReflection($request)
  {
    $reflection = new ReflectionClass($request);
    $properties =  $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
    foreach ($properties as $property) {
      if (!$property->isInitialized($request)) {
        throw new ValidationException("$property->name ga di set");
      } else if (is_null($property->getValue($request))) {
        throw new ValidationException("$property->name kosong");
      }
    }
    echo "Kamu Berhasil Login";
  }
}
