
{{include_once '../Controllers/PerformancesController.php'}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste</title>
</head>
<body>
<?php
    $p = new PerformancesController();

    $std = $p->getDataFromStudents(7);

    $obj = (object) array(
            'code' => 123,
            'firstname' => 'Ranilson',
            'lastname' => 'Paiva',
            'birthdate' => '1980-11-27',
            'gender' => "M",
            'grade' => 2,
            'class' => "A"
    );

    var_dump($obj);

    $obj2 = (object) array(
        'code' => 1234,
        'firstname' => 'Ranilson2',
        'lastname' => 'Paiva2',
        'birthdate' => '1981-12-28',
        'gender' => "F",
        'grade' => 3,
        'class' => "B"
    );

    var_dump($obj2);

    // Inserir novo aluno
    $p->insertNewStudent($obj);

    // Deletar um aluno (id)
    $p->deleteStudent(15);

    // Atualizar os dados de um aluno (id)
    $p->updateStudentData(14, $obj2);
?>

    <ul>
        <li>ID: <?php echo $std->id; ?></li>
        <li>Nome: <?php echo $std->firstname; ?></li>
        <li>Sobrenome: <?php echo $std->lastname; ?></li>
        <li>Nascimento: <?php echo $std->birthdate; ?></li>
    </ul>

</body>
</html>