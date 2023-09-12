<?php
$_con = mysqli_connect('pw-mysql', 'root', 'root', 'bd_pw');

if ($_con === FALSE) {
  echo "Não foi possível conectar ao Servidor de banco de dados";
} else {
  echo "Foi possível conectar ao Servidor de banco de dados";
  mysqli_close($_con);
}

?>