<h1 class="m-3"> Cadastrar Paciente </h1>

<form action="?page=paciente-salvar" method="POST" class="m-3">
    <input type="hidden" name="acao" value="cadastrar"/>
    
    <label> Nome </label>
    <input type="text" name="nome" class="form-control" required>
    
    <label class="mt-3"> Data de Nascimento </label>
    <input type="date" name="data_nascimento" class="form-control" required>
    
    <label class="mt-3"> Telefone </label>
    <input type="tel" name="telefone" class="form-control" required>
    
    <label class="mt-3"> Endereço </label>
    <input type="text" name="endereco" class="form-control" required>
    
    <label class="mt-3"> Sexo </label>
    <select name="sexo" class="form-control" required>
        <option value="" disabled selected>Selecione</option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
        <option value="O">Outro</option>
    </select>
    
    <div class="mt-3">  
        <button type="submit" value="Cadastrar" class="btn btn-success">
            Cadastrar
        </button>
    </div>
</form>
