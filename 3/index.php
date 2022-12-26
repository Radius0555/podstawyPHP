<?php

//Wyjątki służy do zmiany normalnego przebiegu kodu w przypadku
// wystąpienia określonego błędu(wyjątkowego).
//Oto co zwykle dzieje się po wyzwoleniu wyjątku:
//-Aktualny stan kodu został zapisany
//-Wykonanie kodu przełączy się na predefiniowaną funkcję obsługi wyjątków
//-W zależności od sytuacji handler może wznowić wykonanie z zapisanego
//stanu kodu, zakończyć wykonanie skryptu lub kontynuować skrypt z innej
//lokalizacji w kodzie.

function checkNum($number)
{
  if($number>1)
  {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

try{
  checkNum(2);
  echo 'Value must be 1 or below';
}

catch(Exception $e){
  echo 'Massage: '.$e->getMessage().'<br>';
}

?>
