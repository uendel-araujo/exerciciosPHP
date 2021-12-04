<?php 

  $diaSemana = function($dataAtual){
    $dataAtual = date($dataAtual);
    return $dataAtual;
  };

  switch($diaSemana('l')) {

    case 'Sunday':
      echo 'Domingo';
      break;
    case 'Monday':
      echo 'Segunda-Feira';
      break;
    case 'Tuesday':
      echo 'Terça-Feira';
      break;
    case 'Wednesday':
      echo 'Quarta-Feira';
      break;
    case 'Thursday':
      echo 'Quinta-Feira';
      break;
    case 'Friday':
      echo 'Sexta-Feira';
      break;
    case 'Saturday':
      echo 'Sábado';
      break;
    
  } 

?>