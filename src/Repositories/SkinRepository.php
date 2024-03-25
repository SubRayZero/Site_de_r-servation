<?php


final class SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM skin');

        return $data->fetchAll(PDO::FETCH_CLASS, Skin::class);
    }
}