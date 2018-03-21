<?php
    include_once (dirname(__FILE__) . './Database.class.php');

class StudentModel
{

    public function findAll()
    {
        $connection = Database::conexao();

        $query = "SELECT * FROM students";
        $rs = $connection->query($query);
        $row = $rs->fetch(PDO::FETCH_OBJ);

        return $row;
    }

    public function findById($id)
    {
        $connection = Database::conexao();

        $query = "SELECT * FROM students WHERE id =" . $id;
        $rs = $connection->query($query);
        $row = $rs->fetch(PDO::FETCH_OBJ);

        return $row;
    }


    public function store($object)
    {
        $connection = Database::conexao();

        $code = $object->code;
        $firstname = $object->firstname;
        $lastname = $object->lastname;
        $birthdate = $object->birthdate;
        $gender = $object->gender;
        $grade = $object->grade;
        $class = $object->class;

        try {
            $statement = "INSERT INTO students (code, firstname, lastname, birthdate, gender, grade, class) VALUES ($code, '$firstname', '$lastname', '$birthdate', '$gender', $grade, '$class')";

            $insert = $connection->prepare($statement);
            $insert->execute();

            $rowCount = $insert->rowCount();

        } catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();

            $rowCount = 0;
        }

        return $rowCount;

    }

    public function update($id, $object)
    {
        $connection = Database::conexao();

        $code = $object->code;
        $firstname = $object->firstname;
        $lastname = $object->lastname;
        $birthdate = $object->birthdate;
        $gender = $object->gender;
        $grade = $object->grade;
        $class = $object->class;

        try {
            $statement = "UPDATE students SET code = $code, firstname = '$firstname', lastname = '$lastname', birthdate = '$birthdate', gender = '$gender', grade = $grade, class = '$class' WHERE id = $id";

            $update = $connection->prepare($statement);
            $update->execute();

            $rowCount = $update->rowCount();

        } catch(PDOException $e) {
            $rowCount = 0;
            echo 'Error: ' . $e->getMessage();
        }

        return $rowCount;

    }
    public function destroy($id)
    {
        $connection = Database::conexao();

        try {

            $destroy = $connection->prepare("DELETE FROM students WHERE id = $id");
            $destroy->execute();

            $rowCount = $destroy->rowCount();

        } catch(PDOException $e) {
            $rowCount = 0;

            echo 'Error: ' . $e->getMessage();
        }

        return $rowCount;
    }

}
