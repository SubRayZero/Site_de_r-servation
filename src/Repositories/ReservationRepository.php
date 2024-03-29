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


    public function getPersonName()
    {
        $query = 'SELECT reservation.*, person.name AS person_name
                  FROM reservation
                  INNER JOIN person ON reservation.id_person = person.id_person';

        $data = $this->getDb()->query($query);

        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPWeaponName()
    {
        $query = 'SELECT reservation.*, weapon.name AS weapon_name
                  FROM reservation
                  INNER JOIN weapon ON reservation.id_weapon = weapon.id_weapon';

        $data = $this->getDb()->query($query);

        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDateId($date_id)
    {
        $req = $this->getDb()->prepare('SELECT * FROM reservation WHERE id_reservation = :id_reservation');

        $req->execute([
            'id_reservation' => $date_id
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Weapon::class);
    }

  }

