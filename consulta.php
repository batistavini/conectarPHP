<?php
    include "conecta.php";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    echo"<BR>Nomes que começam com 'c'<br>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome like 'c%'";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    echo"<BR>Lista ordenada por email<br>";
    $sql = "SELECT id, nome, senha, email FROM usuario order by email";
    $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0){
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo "id: " . $registro["id"]. " nome: " . $registro["nome"].
            " senha: ". $registro["senha"]. "email:". $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    }
    ?>
    