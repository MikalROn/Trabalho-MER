<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome = @$_REQUEST['nome'];
            $data_nascimento = @$_REQUEST['data_nascimento'];
            $telefone = @$_REQUEST['telefone'];
            $endereco = @$_REQUEST['endereco'];
            $sexo = @$_REQUEST['sexo'];
            $sql = "INSERT INTO paciente (Nome, Datanascimento, Telefone, Endereco, Sexo) VALUES ('$nome', '$data_nascimento', '$telefone', '$endereco', '$sexo')";
            $resultado = $conn->query($sql);
            if ($resultado) {
                echo "<script>alert('Paciente cadastrado com sucesso!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar paciente!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            }
            break;

        case 'remover':
            $id = @$_REQUEST['id'];
            $sql = "DELETE FROM paciente WHERE IDdopaciente = $id";
            $resultado = $conn->query($sql);
            if ($resultado) {
                echo "<script>alert('Paciente removido com sucesso!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            } else {
                echo "<script>alert('Erro ao remover paciente!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            }
            break;

        case 'editar':
            $id_paciente = @$_REQUEST['id_paciente'];
            $nome = @$_REQUEST['nome'];
            $data_nascimento = @$_REQUEST['data_nascimento'];
            $telefone = @$_REQUEST['telefone'];
            $endereco = @$_REQUEST['endereco'];
            $sexo = @$_REQUEST['sexo'];
            $sql = "UPDATE paciente SET Nome = '$nome', Datanascimento = '$data_nascimento', Telefone = '$telefone', Endereco = '$endereco', Sexo = '$sexo' WHERE IDdopaciente = '$id_paciente'";
            $resultado = $conn->query($sql);
            if ($resultado) {
                echo "<script>alert('Edição de paciente concluída com sucesso!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            } else {
                echo "<script>alert('Erro ao editar paciente!')</script>";
                echo "<script>location.href='?page=paciente-listar'</script>";
            }
            break;
    }
?>
