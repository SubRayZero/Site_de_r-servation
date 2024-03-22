<?php

final class PersonRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

   /* public function findByID($studentId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM student WHERE id = :id');

        $req->execute([
            'id' => $studentId
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function create($name, $surname, $birthdate, $email, $department_id)
    {

        $req = $this->getDb()->prepare('INSERT INTO student(name, surname, birthdate, email, department_id)  VALUES (:name, :surname, :birthdate, :email :department_id');

        $req->execute([
            'name' => $name,
            'surname' => $surname,
            'birthdate' => $birthdate,
            'email' => $email,
            'department_id' => $department_id
        ]);

        return $req->fetchAll(PDO::FETCH_CLASS, Student::class);
    }


    public function delete($studentId)
    {
        $req = $this->getDb()->prepare('DELETE FROM student WHERE id = :id');

        $req->execute([
            'id' => $studentId
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function update($id, $name, $surname, $birthdate, $email, $department_id)
    {
        $query = 'UPDATE student set name = :name, surname= :surname, birthdate= :birthdate, email= :email, department_id= :department_id WHERE id= :id';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id' => $id,
            'name' => $name,
            'surname' => $surname,
            'birthdate' => $birthdate,
            'email' => $email,
            'department_id' => $department_id

        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }*/
}
