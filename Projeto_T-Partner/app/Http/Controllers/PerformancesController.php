<?php

    include_once '../Models/StudentModel.class.php';

class PerformancesController
{
    public function getDataFromStudents($id)
    {
        $studentData = new StudentModel();

        $row = $studentData->findById($id);

        return $row;
    }

    public function insertNewStudent($object)
    {
        $studentData = new StudentModel();

        $studentData->store($object);
    }

    public function updateStudentData($id, $object)
    {
        $studentData = new StudentModel();

        $studentData->update($id, $object);
    }

    public function deleteStudent($id)
    {
        $studentData = new StudentModel();

        $studentData->destroy($id);
    }

}