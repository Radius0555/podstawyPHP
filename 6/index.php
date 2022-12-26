<?php

//Ponowne zgłaszanie wyjątków

class customException extends Exception
{
  public function errorMessage(){
    $errorMsg = $this->getMessage().' nie jest walidacją E-mail';
    return $errorMsg;
  }
}

$email = "rad1@example.pl";

try{
  try{
    if(strpos($email, "example") !== FALSE){
      throw new Exception($email);
    }
  }
  catch(Exception $e){
    throw new customException($email);
  }
}

catch(customException $e){
  echo $e->errorMessage().'<br>';
}

//Ustaw obsługę wyjątków najwyższego poziomu

function myException($exception){
  echo '<b>Exception:<b> '.$exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Błąd!');

?>
