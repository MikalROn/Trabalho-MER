<?php
    $acao = @$_REQUEST['acao'];
    switch ($acao) {
        case 'editar':
            $id_medico = @$_REQUEST['id_medico'];
            $nome = @$_REQUEST['nome'];
            $especialidade = @$_REQUEST['especialidade'];
            $telefone = @$_REQUEST['telefone'];
            $email = @$_REQUEST['email'];
            $sql = "UPDATE Medico SET Nome = '$nome', Especialidade = '$especialidade', Telefone = '$telefone', Email = '$email' WHERE IDmedico = '$id_medico'";
            $resultado = $conn->query($sql);
            if ($resultado) {
                echo "<script>alert('Edição de médico concluída com sucesso!')</script>";
                echo "<script>location.href='?page=medico-listar'</script>";
            } else {
                echo "<script>alert('Erro ao editar médico!')</script>";
                echo "<script>location.href='?page=medico-listar'</script>";
            }
            break;
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
        case 'remover':
                    $id_medico = @$_REQUEST['id'];
                    // Assuming $conn is your database connection object
                    // Make sure to sanitize user inputs before using them in SQL queries to prevent SQL injection
                    $sql = "DELETE FROM Medico WHERE IDmedico = '$id_medico'";
                    $resultado = $conn->query($sql);
                    if ($resultado) {
                        echo "<script>alert('Médico removido com sucesso!')</script>";
                        echo "<script>location.href='?page=medico-listar'</script>";
                    } else {
                        echo "<script>alert('Erro ao remover médico!')</script>";
                        echo "<script>location.href='?page=medico-listar'</script>";
                    }
                    break;
    }
?>
