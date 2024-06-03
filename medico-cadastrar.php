<h1 class="m-3"> Cadastrar Médico </h1>

<form action="?page=medico-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>
    <label> Nome </label>
    <input type="text" name="nome" class="form-control">
    <label class="mt-3"> Especialidade </label>
    <input type="text" name="especialidade" class="form-control">
    <label class="mt-3"> Telefone </label>
    <input type="tel" name="telefone" class="form-control">
    <label class="mt-3"> Email </label>
    <input type="email" name="email" class="form-control">
    <div class="mt-3">
        <button type="submit" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>

