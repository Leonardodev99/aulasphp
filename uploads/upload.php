<?php
/*
$photo = $_FILES['imagem'];
$path = 'imgs/';

/

if(move_uploaded_file($photo['tmp_name'], $path . $photo['name'])) {
    echo 'Sucesso!';
} else {
    echo 'Falhar no upload';
}
    */
    $photo = $_FILES['imagem'];
    $path = 'imgs/';
    
  for($i = 0; $i < count($photo['name']); $i ++) {
    $j = $i + 1;
      
    if(move_uploaded_file($photo['tmp_name'][$i], $path . $photo['name'][$i])) {
        echo "Sucesso ao mover o arquivo {$j}! <br>";
    } else {
        echo "Falhar no upload {$j} <br>";
    }
  }
    
