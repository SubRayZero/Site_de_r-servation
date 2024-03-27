<?php


final class LogInRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM person');

        return $data->fetchAll(PDO::FETCH_CLASS, Person::class);
    }

    public function login($email)
    {
        $query = 'SELECT * FROM person WHERE email = :email';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'email' => $email,
        ]);

        return $req->fetch(PDO::FETCH_ASSOC);
    }
}
