<?php
    require_once "config.php";

    if(!empty($_POST['txt_cardapio'])){

        $cardapio = $_POST['txt_cardapio'];
        $foto = $_FILES['file_foto']['name'];
        $foto = str_replace(" ", "", $foto);

        $foto_temp = $_FILES['file_foto']['tmp_name'];
        $destino = "img/" .$foto;

        if(move_uploaded_file($foto_temp, $destino)){
            $insert = $pdo->prepare("INSERT INTO cardapios (cardapio, foto) VALUES (?, ?)");
            $insert->bindValue(1, $cardapio);
            $insert->bindValue(2, $foto);
            $insert->execute();

            header("Location: pgCardapio.php");

    };
    };

    $cardapio = $_POST['txt_cardapio'];
    $foto = $_FILES['file_foto']['name'];

    //echo 'Cardapio: ' . $cardapio . '<br> Foto:' . $foto;
?>