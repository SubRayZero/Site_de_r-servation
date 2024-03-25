<?php

final class ReservationRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM reservation');

        return $data->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }

}
