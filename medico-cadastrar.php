<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'cadastrar':
            $nome = @$_REQUEST['nome'];
            $especialidade = @$_REQUEST['especialidade'];
            $telefone = @$_REQUEST['telefone'];
            $email = @$_REQUEST['email'];
            $sql = "INSERT INTO Medico (Nome, Especialidade, Telefone, Email) VALUES ('$nome', '$especialidade', '$telefone', '$email')";
            $resultado = $conn->query($sql);
            if ($resultado) {
                echo "<script>alert('Médico cadastrado com sucesso!')</script>";
                echo "<script>location.href='?page=medico-listar'</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar médico!')</script>";
                echo "<script>location.href='?page=medico-listar'</script>";
            }
            break;
    }
?>
