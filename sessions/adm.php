<?php
    require_once("config.php");
    session_unset();//limpa a variável de sessão.
    session_destroy();//Remove a sessão.
    
    if(isset($_SESSION["id_session"])){
        echo "chave de sessão: ".$_SESSION["id_session"];
    }else{
        session_start();
        session_regenerate_id();
        echo "chave de sessão: ".session_id();
        
    }
?>