<?php

final class Weapon_SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM student');

        return $data->fetchAll(PDO::FETCH_CLASS, Weapon_Skin::class);
    }
}