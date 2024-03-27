<?php

final class Weapon_SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Weapon_Skin::class);
    }

    public function getSkinsWeapon($weaponId)
    {
        $query = "SELECT ws.id_skin, s.name FROM weapon_skin ws
                      INNER JOIN skin s ON ws.id_skin = s.id_skin
                      WHERE ws.id_weapon = :weaponId";

        $req = $this->getDb()->prepare($query);
        $req->execute([
            'weaponId' => $weaponId
        ]);

        return $req->fetchAll(PDO::FETCH_CLASS, Weapon_Skin::class);
    }
}
