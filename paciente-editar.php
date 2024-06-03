<h1 class="m-3"> Editar Paciente </h1>

<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM paciente WHERE IDdopaciente = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

<form action="?page=paciente-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>
    <label> Nome </label>
    <input type="hidden" name="id_paciente" value="<?php echo $id; ?>">
    <input type="text" name="nome" value="<?php echo $row->Nome; ?>" class="form-control">
    <label class="mt-3"> Data de Nascimento </label>
    <input type="date" name="data_nascimento" value="<?php echo $row->Datanascimento; ?>" class="form-control">
    <label class="mt-3"> Telefone </label>
    <input type="tel" name="telefone" value="<?php echo $row->Telefone; ?>" class="form-control">
    <label class="mt-3"> Endereço </label>
    <input type="text" name="endereco" value="<?php echo $row->Endereco; ?>" class="form-control">
    <label class="mt-3"> Sexo </label>
    <select name="sexo" class="form-control">
        <option value="M" <?php if($row->Sexo == "M") echo "selected"; ?>>Masculino</option>
        <option value="F" <?php if($row->Sexo == "F") echo "selected"; ?>>Feminino</option>
        <option value="O" <?php if($row->Sexo == "O") echo "selected"; ?>>Outro</option>
    </select>
    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Editar
        </button>
    </div>
</form>
