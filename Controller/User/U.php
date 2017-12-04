<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/UserBO.php");
    
    $userBO = new UserBO();
    
    if ((!empty($_POST['id']))&&(!empty($_POST['username'])&&(!empty($_POST['password']))))
    {
        $userBO->updateUser($_POST['id'],$_POST['username'],$_POST['password']);
    }
    else
    {
        echo "Não é possível atualizar usuário com campos vazios.";
    }
    
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>