<?php
  $lista = [
    'nome' => 'Uendel',
    'idade' => 28,
    'atributos' => [
      'forca' => 500,
      'agilidade' => 350,
      'destreza' => 350
    ],
    'vida' => 1280,
    'mana' => 1000
  ];

  echo "NOME: ".$lista['nome']."<br/>";
  echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
  echo "VIDA: ".$lista['vida'];
  echo "<br/>"; 
  echo "<br/>"; 
  echo "<br/>"; 

  for($i = 1; $i <= 10; $i++) {
    echo "N: $i </br>";
  }

  echo "<br/>"; 
  echo "<br/>"; 
  echo "<br/>"; 

  $itens = [
    'Carro',
    'Moto',
    'Navio',
    'Avião',
    'Foguete'
  ];

  foreach($itens as $chave => $item) {
    echo "Item " .($chave + 1)." : ".$item. "<br/>";
  }

?>