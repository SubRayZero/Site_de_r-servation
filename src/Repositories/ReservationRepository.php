<?php

final class ReservationRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Reservation::class);
    }
}
