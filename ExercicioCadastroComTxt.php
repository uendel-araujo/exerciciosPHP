
<form  method="POST">
  <strong>New Name</strong> 
  <br>
  <label for="newName">
    <input type="text" name="name" id="newName">
  </label>
  <input type="submit" value="Adicionar">
</form>

<h1>Lista de Nomes</h1>

<?php 

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
  if(isset($name) && $name != ''){
    $list = file_get_contents('list.txt');
    $list .= "\n$name";
    file_put_contents('list.txt', $list);
    $list = explode("\n", $list);
    echo "<ul>";
      foreach($list as $item){
        echo"<li>".$item."</li>";
      }
    echo "</ul>";
  }
  else {
    $list = file_get_contents('list.txt');
        $list = explode("\n", $list);
        echo "<ul>";
        foreach($list as $item) {
            echo "<li>".$item."</li>";
        }  
        echo "</ul>";
  }

?>