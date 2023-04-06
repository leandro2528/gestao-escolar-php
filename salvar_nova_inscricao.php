<?php
    switch($_REQUEST["acao"]) {
        case "cadastrar_inscricao":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $numero_bi = $_POST["numero_bi"];
            $naturalidade = $_POST["naturalidade"];
            $apelido = $_POST["apelido"];
            $telefone = $_POST["telefone"];
            $estado_civil = $_POST["estado_civil"];
            $local_residencia = $_POST["local_residencia"];
            $sexo = $_POST["sexo"];
            $data_nasc = $_POST["data_nasc"];
            $pais = $_POST["pais"];
            $classe = $_POST["classe"];
            $nome_pai = $_POST["nome_pai"];
            $nome_mae = $_POST["nome_mae"];
            $telefone_pai_mae = $_POST["telefone_pai_mae"];
            $nome_escola_ant = $_POST["nome_escola_ant"];
            $ano_escola_ant = $_POST["ano_escola_ant"];
            $classe_escola_ant = $_POST["classe_escola_ant"];
            $turma_escola_ant = $_POST["turma_escola_ant"];

            $sql = "INSERT INTO inscricoes(nome,email,numero_bi,naturalidade,apelido,telefone,estado_civil,local_residencia,sexo,data_nasc,pais,classe,nome_pai,nome_mae,telefone_pai_mae,nome_escola_ant,ano_escola_ant,classe_escola_ant,turma_escola_ant) 
            VALUES 
            ('{$nome}','{$email}','{$numero_bi}','{$naturalidade}','{$apelido}','{$telefone}','{$estado_civil}','{$local_residencia}','{$sexo}','{$data_nasc}','{$pais}','{$classe}','{$nome_pai}','{$nome_mae}','{$telefone_pai_mae}','{$nome_escola_ant}','{$ano_escola_ant}','{$classe_escola_ant}','{$turma_escola_ant}')";

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script> alert('Usuário cadastrado com sucesso!!!') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            } else {
                print "<script> alert('Não foi possível cadastrar um novo usuário') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            }
    
        break;

        case "editar_inscricoes":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $numero_bi = $_POST["numero_bi"];
            $naturalidade = $_POST["naturalidade"];
            $apelido = $_POST["apelido"];
            $telefone = $_POST["telefone"];
            $estado_civil = $_POST["estado_civil"];
            $local_residencia = $_POST["local_residencia"];
            $sexo = $_POST["sexo"];
            $data_nasc = $_POST["data_nasc"];
            $pais = $_POST["pais"];
            $classe = $_POST["classe"];
            $nome_pai = $_POST["nome_pai"];
            $nome_mae = $_POST["nome_mae"];
            $telefone_pai_mae = $_POST["telefone_pai_mae"];
            $nome_escola_ant = $_POST["nome_escola_ant"];
            $ano_escola_ant = $_POST["ano_escola_ant"];
            $classe_escola_ant = $_POST["classe_escola_ant"];
            $turma_escola_ant = $_POST["turma_escola_ant"];

            $sql = "UPDATE inscricoes SET
                nome = '{$nome}',
                email = '{$email}',
                numero_bi = '{$numero_bi}',
                naturalidade = '{$naturalidade}',
                apelido = '{$apelido}',
                telefone = '{$telefone}',
                estado_civil = '{$estado_civil}',
                local_residencia = '{$local_residencia}',
                sexo = '{$sexo}',
                data_nasc = '{$data_nasc}',
                pais = '{$pais}',
                classe = '{$classe}',
                nome_pai = '{$nome_pai}',
                nome_mae = '{$nome_mae}',
                telefone_pai_mae = '{$telefone_pai_mae}',
                nome_escola_ant = '{$nome_escola_ant}',
                ano_escola_ant = '{$ano_escola_ant}',
                classe_escola_ant = '{$classe_escola_ant}',
                turma_escola_ant = '{$turma_escola_ant}'
                WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($res == true) {
                print "<script> alert('Usuário editado com sucesso!!!') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            } else {
                print "<script> alert('Não foi possível editar um novo usuário') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            }
    
        break;

        case "excluir":
            $sql = "DELETE FROM inscricoes WHERE id=".$_REQUEST["id"];
            
            $res = $conn->query($sql);

            if ($res == true) {
                print "<script> alert('Usuário excluido com sucesso!!!') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            } else {
                print "<script> alert('Não foi possível excluir um novo usuário') </script>";
                print "<script> location.href='?page=inscricoes' </script>";
            }
    
        break;

    }
    
?>