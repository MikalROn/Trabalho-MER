create DATABASE hospital;

use hospital;

CREATE TABLE Paciente (
IDdopaciente INT PRIMARY KEY,
Nome VARCHAR(100),
Datanascimento DATE,
Telefone VARCHAR(15),
Endereco VARCHAR(255),
Sexo CHAR(1)
);
CREATE TABLE Medico (
IDmedico INT PRIMARY KEY,
Nome VARCHAR(100),
Especialidade VARCHAR(100),
Telefone VARCHAR(15),
Email VARCHAR(100)
);
CREATE TABLE Manutencao_de_Equipamento (
IDdamanutencao INT PRIMARY KEY,
Datadamanutencao DATE,
Descricaoodamanutencao VARCHAR(255),
idEquipamento_Medico INT
);
CREATE TABLE Recepcionista (

IDrecepcionista INT PRIMARY KEY,
Nomedorecepcionista VARCHAR(100),
Turno VARCHAR(50)
);
CREATE TABLE Resultados_de_Exames (
IDdoresultado INT PRIMARY KEY,
Datadoresultado DATE,
Resultado VARCHAR(255),
idExame INT
);
CREATE TABLE Consulta (
IDdaconsulta INT PRIMARY KEY,
Datadaconsulta DATE,
Horadaconsulta TIME,
idPaciente INT,
idMedico INT
);
CREATE TABLE Enfermeiro (
IDdoenfermeiro INT PRIMARY KEY,
Nome VARCHAR(100),
Telefone VARCHAR(15),
Email VARCHAR(100)
);

CREATE TABLE Estoque_de_Medicamentos (
IDdoestoque INT PRIMARY KEY,
Quantidade INT,
Datadevalidade DATE,
idMedicamento INT,
idFarmacia INT
);
CREATE TABLE Internacao (
IDdainternacao INT PRIMARY KEY,
Datadeentrada DATE,
Datadesaida DATE,
idPaciente INT,
idQuarto INT
);
CREATE TABLE Enfermaria (
IDdaenfermaria INT PRIMARY KEY,
Nomeedaenfermaria VARCHAR(100),
Localizacao VARCHAR(255),
idEnfermeiro INT
);
CREATE TABLE Quarto (
IDdoquarto INT PRIMARY KEY,
Numerodoquarto INT,

Tipodequarto VARCHAR(50),
idEnfermaria INT
);
CREATE TABLE Prescricao (
IDdaprescricao INT PRIMARY KEY,
Datadaprescricao DATE,
idPaciente INT,
idMedico INT,
idMedicamento INT
);
CREATE TABLE Fatura (
IDdafatura INT PRIMARY KEY,
Datadafatura DATE,
Valortotal FLOAT,
idPaciente INT
);
CREATE TABLE Medicamento (
IDdomedicamento INT PRIMARY KEY,
Nomedomedicamento VARCHAR(100),
Dosagem VARCHAR(50),
FormadeAdministracao VARCHAR(50)
);
CREATE TABLE Exame (

IDdoexame INT PRIMARY KEY,
Tipodeexame VARCHAR(100),
Datadoexame DATE,
idPaciente INT,
idMedico INT
);
CREATE TABLE Pagamento (
IDdopagamento INT PRIMARY KEY,
Datadopagamento DATE,
Valorpago FLOAT,
Metododepagamento VARCHAR(50),
idFatura INT,
idRecepcionista INT
);
CREATE TABLE Equipamento_Medico (
IDdoequipamento INT PRIMARY KEY,
Datadeaquisicao DATE,
Nomedoequipamento VARCHAR(100),
Fabricante VARCHAR(100)
);
CREATE TABLE Farmacia (
IDdafarmacia INT PRIMARY KEY,
Nomefarmacia VARCHAR(100),

Localizacao VARCHAR(255)
);
ALTER TABLE Manutencao_de_Equipamento
ADD FOREIGN KEY(idEquipamento_Medico) REFERENCES
Equipamento_Medico(IDdoequipamento);
ALTER TABLE Resultados_de_Exames
ADD FOREIGN KEY(idExame) REFERENCES Exame(IDdoexame);
ALTER TABLE Consulta
ADD FOREIGN KEY(idPaciente) REFERENCES Paciente(IDdopaciente);
ALTER TABLE Consulta
ADD FOREIGN KEY(idMedico) REFERENCES Medico(IDmedico);
ALTER TABLE Estoque_de_Medicamentos
ADD FOREIGN KEY(idMedicamento) REFERENCES Medicamento(IDdomedicamento);
ALTER TABLE Estoque_de_Medicamentos
ADD FOREIGN KEY(idFarmacia) REFERENCES Farmacia(IDdafarmacia);
ALTER TABLE Internacao
ADD FOREIGN KEY(idPaciente) REFERENCES Paciente(IDdopaciente);
ALTER TABLE Internacao
ADD FOREIGN KEY(idQuarto) REFERENCES Quarto(IDdoquarto);
ALTER TABLE Enfermaria
ADD FOREIGN KEY(idEnfermeiro) REFERENCES Enfermeiro(IDdoenfermeiro);
ALTER TABLE Quarto
ADD FOREIGN KEY(idEnfermaria) REFERENCES Enfermaria(IDdaenfermaria);

ALTER TABLE Prescricao
ADD FOREIGN KEY(idPaciente) REFERENCES Paciente(IDdopaciente);
ALTER TABLE Prescricao
ADD FOREIGN KEY(idMedico) REFERENCES Medico(IDmedico);
ALTER TABLE Prescricao
ADD FOREIGN KEY(idMedicamento) REFERENCES Medicamento(IDdomedicamento);
ALTER TABLE Fatura
ADD FOREIGN KEY(idPaciente) REFERENCES Paciente(IDdopaciente);
ALTER TABLE Exame
ADD FOREIGN KEY(idPaciente) REFERENCES Paciente(IDdopaciente);
ALTER TABLE Exame
ADD FOREIGN KEY(idMedico) REFERENCES Medico(IDmedico);
ALTER TABLE Pagamento
ADD FOREIGN KEY(idFatura) REFERENCES Fatura(IDdafatura);
ALTER TABLE Pagamento
ADD FOREIGN KEY(idRecepcionista) REFERENCES
Recepcionista(IDrecepcionista);