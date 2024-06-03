<h1 class="m-3"> Editar Médico </h1>

<?php
    $id = @$_REQUEST['id'];
    $sql = "SELECT * FROM Medico WHERE IDmedico = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>

<form action="?page=medico-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="editar"/>
    <label> Nome </label>
    <input type="hidden" name="id_medico" value="<?php echo $id; ?>">
    <input type="text" name="nome" value="<?php echo $row->Nome; ?>" class="form-control">
    <label class="mt-3"> Especialidade </label>
    <input type="text" name="especialidade" value="<?php echo $row->Especialidade; ?>" class="form-control">
    <label class="mt-3"> Telefone </label>
    <input type="tel" name="telefone" value="<?php echo $row->Telefone; ?>" class="form-control">
    <label class="mt-3"> Email </label>
    <input type="email" name="email" value="<?php echo $row->Email; ?>" class="form-control">
    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Editar
        </button>
    </div>
</form>
