<?php

//Tworzenie niestandardowej klasy wyjątków
//Aby utworzyć specjalną klasę z funkcjami, które mogą być wywołane,
//gdy wystąpi wyjątek w PHP.
//Niestandardowa klasa wyjątków dziedziczy właściwości z klasy wyjątków php
//i możesz dodać do niej niestandardowe funkcje.

class customException extends Exception
{
  public function errorMessage()
  {
    $errorMsg = 'Error on line'.$this->getLine().' in '.$this->getFile().
    ' : <b>'.$this->getMessage().'</b> is not a valid E-mail address';
    return $errorMsg;
  }
}

$email = "wp1@wp....pl";

try{
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
  {
    throw new customException($email);
  }
}

catch(customException $e)
{
  echo $e->errorMessage();
}

?>
