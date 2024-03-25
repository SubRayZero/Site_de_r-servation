<?php

final class ReservationRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM reservation');

        return $data->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }

    /*public function findByID($personId)
    {
        $req = $this->getDb()->prepare('SELECT * FROM reservation WHERE id = :id');

        $req->execute([
            'id' => $personId
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }
*/
}
