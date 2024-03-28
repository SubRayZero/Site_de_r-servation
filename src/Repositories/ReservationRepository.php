<?php

final class ReservationRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM reservation');

        return $data->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }

    public function create($date, $id_weapon, $id_person)
    {
        $query = 'INSERT INTO reservation (date, id_weapon, id_person) VALUES (:date, :id_weapon, :id_person)';

        $req = $this->getDb()->prepare($query);

        $req->execute([
            'date' => $date,
            'id_weapon' => $id_weapon,
            'id_person' => $id_person,
        ]);

        return $req->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }
}
