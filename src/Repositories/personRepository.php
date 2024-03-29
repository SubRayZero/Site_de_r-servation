<?php


final class PersonRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM person');

        return $data->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function create($name, $first_name, $email, $password)
    {
        $query = 'INSERT INTO person (name, first_name, email, password) 
        VALUES (:name, :first_name, :email, :password)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'name' => $name,
            'first_name' => $first_name,
            'email' => $email,
            'password' => $password,
        ]);

        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function update($name, $first_name, $email, $password)
    {
        $query = 'UPDATE person SET name = :name, first_name = :first_name, email= :email, password= :password 
        WHERE email = :email';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'name' => $name,
            'first_name' => $first_name,
            'email' => $email,
            'password' => $password,
        ]);

        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function delete($person_id)
    {
        $query = 'DELETE FROM person WHERE id_person = :id_person';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'id_person' => $person_id,
            //"email" => $email
        ]);

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPersonId($person_id)
    {
        $req = $this->getDb()->prepare('SELECT * FROM person WHERE id_person = :id_person');

        $req->execute([
            'id_person' => $person_id
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Person::class);
    }
}
