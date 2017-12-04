<?php
    require_once ($_SERVER['DOCUMENT_ROOT']."/Model/BO/UserBO.php");
    
    $userBO = new UserBO();
    
    $consult = $userBO->listUsers();
    if($consult->rowCount() == 0)
    {
        echo "Não há usuários na base.";
    }
    else
    {
        while ($user = $consult->fetch(PDO::FETCH_OBJ))
        {
            echo "<br>";
            echo "ID: ".$user->id_usuario."<br>";
            echo "Nome: ".$user->nome_usuario."<br>";
        }
    }
    echo "<br><a href=\"javascript:history.go(-1)\">Voltar</a>";
?>