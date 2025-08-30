<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addTurma'])) {
        $nome = $_POST['nome'];
        $serie = $_POST['serie'];

        $sql = "INSERT INTO turmas(nome, serie) VALUES ('$nome', '$serie')";

        if ($conn->query($sql) === true) {
            echo "Registro Adicionado";
            $conn->close();
            exit();
        } else {
            echo "Erro" . $sql . "<br>" . $conn->error;
            $conn->close();
        };
    }
    if (isset($_POST['addProfessor'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $materia = $_POST['materia'];
        $fk_turma = $_POST['fk_turma'];

        $sql = "INSERT INTO professores(nome, email, materia, fk_turma) VALUES ('$nome', '$email', '$materia', '$fk_turma')";

        if ($conn->query($sql) === true) {
            echo "Registro Adicionado";
            $conn->close();
            exit();
        } else {
            echo "Erro" . $sql . "<br>" . $conn->error;
            $conn->close();
        };
    }
    if (isset($_POST['addAluno'])) {
        $nome = $_POST['nome'];
        $fk_turma = $_POST['fk_turma'];

        $sql = "INSERT INTO alunos(nome, fk_turma) VALUES ('$nome', '$fk_turma')";

        if ($conn->query($sql) === true) {
            echo "Registro Adicionado";
            $conn->close();
            exit();
        } else {
            echo "Erro" . $sql . "<br>" . $conn->error;
            $conn->close();
        };
    }
    if (isset($_POST['addAtividade'])) {
        $descricao = $_POST['descricao'];
        $fk_professor = $_POST['fk_professor'];
        $fk_turma = $_POST['fk_turma'];

        $sql = "INSERT INTO atividades(descricao, fk_professor, fk_turma) VALUES ('$descricao', '$fk_professor', '$fk_turma')";

        if ($conn->query($sql) === true) {
            echo "Registro Adicionado";
            $conn->close();
            exit();
        } else {
            echo "Erro" . $sql . "<br>" . $conn->error;
            $conn->close();
        };
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Registros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="padding: 5px; display: flex; gap: 100px;">
    <form method="POST">
        <label for="turma">
            <h2>Adicionar turma:</h2>
        </label><br>
        <input type="text" name="nome" placeholder="Nome da Turma" style="color: black;"><br>
        <input type="text" name="serie" placeholder="Série da Turma" style="color: black; placeholder-opacity-max:0.5;"><br>
        <button type="submit" class="btn btn-secondary" name="addTurma">Enviar</button>
    </form>
    <form method="POST">
        <label for="turma">
            <h2>Adicionar professor:</h2>
        </label><br>
        <input type="text" name="nome" placeholder="Nome do Professor" style="color: black;"><br>
        <input type="email" name="email" placeholder="Email do Professor" style="color: black;"><br>
        <input type="text" name="fk_turma" placeholder="Turma (ID)" style="color: black;"><br>
        <select name="materia" class="form-select" multiple aria-label="Multiple select example" style="width: 70%;">
            <option selected>Matérias</option>
            <option value="ciencias">Ciências</option>
            <option value="matematica">Matemática</option>
            <option value="historia">História</option>
            <option value="portugues">Português</option>
        </select><br>
        <button type="submit" class="btn btn-secondary" name="addProfessor">Enviar</button>
    </form>
    <form method="POST">
        <label for="turma">
            <h2>Adicionar aluno:</h2>
        </label><br>
        <input type="text" name="nome" placeholder="Nome da Turma" style="color: black;"><br>
        <input type="text" name="fk_turma" placeholder="Turma (ID)" style="color: black;"><br>
        <button type="submit" class="btn btn-secondary" name="addAluno">Enviar</button>
    </form>
    <form method="POST">
        <label for="atividade">
            <h2>Adicionar atividade:</h2>
        </label><br>
        <input type="text" name="descricao" placeholder="Descrição" style="color: black;"><br>
        <input type="text" name="fk_professor" placeholder="Professor (ID)" style="color: black;"><br>
        <input type="text" name="fk_turma" placeholder="Turma (ID)" style="color: black;"><br>
        <button type="submit" class="btn btn-secondary" name="addAtividade">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>