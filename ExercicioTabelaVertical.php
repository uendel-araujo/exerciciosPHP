<?php 

$array = [
  'nome' => 'Uendel',
  'idade' => '28',
  'empresa' => 'Ardagh Group',
  'cor' => 'Branco',
  'profissao' => 'Mecânico de Produção'
];

?>

<table border="1">
  <?php foreach($array as $chave => $valor): ?>
    <tr>
      <th><?php echo $chave; ?></th>
      <td><?php echo $valor; ?></td>
    </tr>
  <?php endforeach; ?>
</table>