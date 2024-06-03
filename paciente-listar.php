<h1 class='m-3'> Lista de Pacientes </h1>

<table class="table m-3 table-hover table-border table-striped">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Sexo</th>
        <th>Ações</th>
    </tr>
    
    <?php
        $response = $conn->query("SELECT * FROM `paciente`");

        $qtd = $response->num_rows;
        if($qtd == 0){
            echo "<p class='m-4'><b>Não existem registros!</b></p>";
        } else {
            echo "<p class='m-4'>Encontrou <b>$qtd</b> resultados.</p>";
        }
        while($row = $response->fetch_object()){
            $id_paciente = $row->IDdopaciente;
            $nome = $row->Nome;
            $data_nascimento = $row->Datanascimento;
            $telefone = $row->Telefone;
            $endereco = $row->Endereco;
            $sexo = $row->Sexo;

            echo "<tr>";
                echo "<td> $id_paciente</td>";
                echo "<td> $nome</td>";
                echo "<td> $data_nascimento</td>";
                echo "<td> $telefone</td>";
                echo "<td> $endereco</td>";
                echo "<td> $sexo</td>";

                echo "<td>
                    <button class='btn btn-success' onclick=\"location.href='?page=paciente-editar&id=$id_paciente'\"> 
                        Editar
                    </button>
                    
                    <button class='btn btn-danger'
                        onclick=
                        \"
                            let resposta = confirm('Tem certeza que deseja Remover ?');
                            if (resposta)
                            {
                                location.href = '?page=paciente-salvar&acao=remover&id=$id_paciente';
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
