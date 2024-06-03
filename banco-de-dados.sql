CREATE TABLE Paciente 
( 
 IDdopaciente INT PRIMARY KEY,  
 Nome VARCHAR(255),  
 Datanascimento DATE,  
 Telefone INT,  
 Endereco VARCHAR(255),  
 Sexo CHAR(1)  
); 

CREATE TABLE Medico 
( 
 IDmedico INT PRIMARY KEY,  
 Nome VARCHAR(255),  
 Especialidade VARCHAR(255),  
 Telefone INT,  
 Email VARCHAR(255)  
); 

CREATE TABLE Manutencao_de_Equipamento 
( 
 IDdamanutencao INT PRIMARY KEY,  
 Datadamanutencao DATE,  
 Descricaodamanutencao VARCHAR(255),  
 idEquipamento_Medico INT,  
 FOREIGN KEY (idEquipamento_Medico) REFERENCES Equipamento_Medico(IDdoequipamento)
); 

CREATE TABLE Recepcionista 
( 
 IDrecepcionista INT PRIMARY KEY,  
 Nomedorecepcionista VARCHAR(255),  
 Turno VARCHAR(255)  
); 

CREATE TABLE Resultados_de_Exames 
( 
 IDdoresultado INT PRIMARY KEY,  
 Datadoresultado DATE,  
 Resultado VARCHAR(255),  
 idExame INT,  
 FOREIGN KEY (idExame) REFERENCES Exame(IDdoexame)
); 

CREATE TABLE Consulta 
( 
 IDdaconsulta INT PRIMARY KEY,  
 Datadaconsulta DATE,  
 Horadaconsulta TIME,  
 idPaciente INT,  
 idMedico INT,  
 FOREIGN KEY (idPaciente) REFERENCES Paciente(IDdopaciente), 
 FOREIGN KEY (idMedico) REFERENCES Medico(IDmedico)
); 

CREATE TABLE Enfermeiro 
( 
 IDdoenfermeiro INT PRIMARY KEY,  
 Nome VARCHAR(255),  
 Telefone INT,  
 Email VARCHAR(255)  
); 

CREATE TABLE Estoque_de_Medicamentos 
( 
 IDdoestoque INT PRIMARY KEY,  
 Quantidade INT,  
 Datadevalidade DATE,  
 idMedicamento INT,  
 idFarmacia INT,  
 FOREIGN KEY (idMedicamento) REFERENCES Medicamento(IDdomedicamento), 
 FOREIGN KEY (idFarmacia) REFERENCES Farmacia(IDdafarmacia)
); 

CREATE TABLE Internacao 
( 
 IDdainternacao INT PRIMARY KEY,  
 Datadeentrada DATE,  
 Datadesaida DATE,  
 idPaciente INT,  
 idQuarto INT,  
 FOREIGN KEY (idPaciente) REFERENCES Paciente(IDdopaciente), 
 FOREIGN KEY (idQuarto) REFERENCES Quarto(IDdoquarto)
); 

CREATE TABLE Enfermaria 
( 
 IDdaenfermaria INT PRIMARY KEY,  
 Nomeedaenfermaria VARCHAR(255),  
 Localizacao VARCHAR(255),  
 idEnfermeiro INT,  
 FOREIGN KEY (idEnfermeiro) REFERENCES Enfermeiro(IDdoenfermeiro)
); 

CREATE TABLE Quarto 
( 
 IDdoquarto INT PRIMARY KEY,  
 Numerodoquarto INT,  
 Tipodequarto VARCHAR(255),  
 idEnfermaria INT,  
 FOREIGN KEY (idEnfermaria) REFERENCES Enfermaria(IDdaenfermaria)
); 

CREATE TABLE Prescricao 
( 
 IDdaprescricao INT PRIMARY KEY,  
 Datadaprescricao DATE,  
 idPaciente INT,  
 idMedico INT,  
 idMedicamento INT,  
 FOREIGN KEY (idPaciente) REFERENCES Paciente(IDdopaciente), 
 FOREIGN KEY (idMedico) REFERENCES Medico(IDmedico), 
 FOREIGN KEY (idMedicamento) REFERENCES Medicamento(IDdomedicamento)
); 

CREATE TABLE Fatura 
( 
 IDdafatura INT PRIMARY KEY,  
 Datadafatura DATE,  
 Valortotal FLOAT,  
 idPaciente INT,  
 FOREIGN KEY (idPaciente) REFERENCES Paciente(IDdopaciente)
); 

CREATE TABLE Medicamento 
( 
 IDdomedicamento INT PRIMARY KEY,  
 Nomedomedicamento VARCHAR(255),  
 Dosagem VARCHAR(255),  
 FormadeAdministracao VARCHAR(255)  
); 

CREATE TABLE Exame 
( 
 IDdoexame INT PRIMARY KEY,  
 Tipodeexame VARCHAR(255),  
 Datadoexame DATE,  
 idPaciente INT,  
 idMedico INT,  
 FOREIGN KEY (idPaciente) REFERENCES Paciente(IDdopaciente), 
 FOREIGN KEY (idMedico) REFERENCES Medico(IDmedico)
); 

CREATE TABLE Pagamento 
( 
 IDdopagamento INT PRIMARY KEY,  
 Datadopagamento DATE,  
 Valorpago FLOAT,  
 Metododepagamento VARCHAR(255),  
 idFatura INT,  
 idRecepcionista INT,  
 FOREIGN KEY (idFatura) REFERENCES Fatura(IDdafatura), 
 FOREIGN KEY (idRecepcionista) REFERENCES Recepcionista(IDrecepcionista)
); 

CREATE TABLE Equipamento_Medico 
( 
 IDdoequipamento INT PRIMARY KEY,  
 Datadeaquisicao DATE,  
 Nomedoequipamento VARCHAR(255),  
 Fabricante VARCHAR(255)  
); 

CREATE TABLE Farmacia 
( 
 IDdafarmacia INT PRIMARY KEY,  
 Nomefarmacia VARCHAR(255),  
 Localizacao VARCHAR(255)  
);
