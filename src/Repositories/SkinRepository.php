<?php


final class SkinRepository extends Db
{

    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM skin');

        return $data->fetchAll(PDO::FETCH_CLASS, Skin::class);
    }

    public function getSkinId($skin_id)
    {
        $req = $this->getDb()->prepare('SELECT * FROM skin WHERE id_skin = :id_skin');

        $req->execute([
            'id_person' => $skin_id
        ]);
        return $req->fetchAll(PDO::FETCH_CLASS, Skin::class);
    }
}