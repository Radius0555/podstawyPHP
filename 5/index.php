<?php

//Wiele wyjątków

class customException extends Exception
{
  public function errorMessage()
  {
    $errorMsg = 'Error w lini = '.$this->getLine().' w '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> nie zwalidował E-mail';
    return $errorMsg;
  }
}

$email = 'wp1@wp....pl';

try{
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
    throw new customException($email);
  }
  if(strpos($email, "wp1") !== FALSE){
    throw new Exception("$email jest przykładem email");
  }
}

catch(customException $e){
  echo $e->errorMessage();
}

catch(Exception $e){
  echo $e->getMessage();
}

?>
