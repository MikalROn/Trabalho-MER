<h1 class='m-3'> Lista de Médicos </h1>

<table class="table m-3 table-hover table-border table-striped">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Especialidade</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM Medico");

        $qtd = $response->num_rows;
        if($qtd == 0){
            echo "<p class='m-4'><b>Não existem registros!</b></p>";
        } else {
            echo "<p class='m-4'>Encontrou <b>$qtd</b> resultados.</p>";
        }
        while($row = $response->fetch_object()){
            $id_medico = $row->IDmedico;
            $nome = $row->Nome;
            $especialidade = $row->Especialidade;
            $telefone = $row->Telefone;
            $email = $row->Email;

            echo "<tr>";
                echo "<td> $id_medico</td>";
                echo "<td> $nome</td>";
                echo "<td> $especialidade</td>";
                echo "<td> $telefone</td>";
                echo "<td> $email</td>";

                echo "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=medico-editar&id=$id_medico'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=medico-salvar&acao=remover&id=$id_medico';
                            } 
                            else{false;}
                        \"
                    >
                        Remover
                    </button>
                
                    </td>";
            echo "</tr>";

        }
    ?>
</table>
