<?php

final class Weapon_SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Weapon_Skin::class);
    }

    public function createSkinsWeapon($skinId, $weaponId)
    {
        $query = "INSERT INTO weapon_skin (id_skin, id_weapon) 
        SELECT :skinId, :weaponId 
        FROM skin, weapon
        WHERE skin.id_skin = :skinId 
        AND weapon.id_weapon = :weaponId";

        $req = $this->getDb()->prepare($query);
        $req->execute([
            'weaponId' => $weaponId,
            'skinId' => $skinId
        ]);

        //return $req->fetchAll(PDO::FETCH_CLASS, Weapon_Skin::class);
    }
}
