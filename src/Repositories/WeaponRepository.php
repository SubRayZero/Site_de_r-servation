<?php

final class WeaponRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM weapon');

        return $data->fetchAll(PDO::FETCH_CLASS, Weapon::class);
    }

    public function getId_weapon($id_weapon)
    {
        $req = $this->getDb()->prepare('SELECT * FROM weapon WHERE id_weapon = :id_weapon');

        $req->execute([
            'id_weapon' => $id_weapon
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Weapon::class);
    }
}