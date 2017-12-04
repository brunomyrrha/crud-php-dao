<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/UserBO.php");    
  
    $userBO = new UserBO();

    if(!empty($_POST['id']))
    {
        $userBO->deleteUser($_POST['id']);        
    }
    else
    {
        echo "Não é possível remover sem o ID.";
    }
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>