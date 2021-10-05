<?php

   
    require_once("config.php");
  
    echo "chave de sessão: ".$_SESSION["id_session"];

    echo session_save_path();

?>