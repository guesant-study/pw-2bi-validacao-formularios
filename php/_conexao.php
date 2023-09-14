<?php
function bd_conectar()
{
  $_con = mysqli_connect('pw-mysql', 'root', 'root', 'bd_pw');

  if ($_con === FALSE) {
    echo "Não foi possível conectar ao Servidor de banco de dados";
    exit();
  }

  return $_con;
}

function bd_desconectar($_con)
{
  mysqli_close($_con);
}

?>