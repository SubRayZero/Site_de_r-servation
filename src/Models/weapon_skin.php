<?php

class Weapon_Skin
{
    private $id_weapon_decoration;
    private $id_skin;
    private $id_weapon;

    /**
     * Get the value of id_weapon_decoration
     */
    public function getId_weapon_decoration()
    {
        return $this->id_weapon_decoration;
    }

    /**
     * Set the value of id_weapon_decoration
     *
     * @return  self
     */
    public function setId_weapon_decoration($id_weapon_decoration)
    {
        $this->id_weapon_decoration = $id_weapon_decoration;

        return $this;
    }

    /**
     * Get the value of id_skin
     */
    public function getId_skin()
    {
        return $this->id_skin;
    }

    /**
     * Set the value of id_skin
     *
     * @return  self
     */
    public function setId_skin($id_skin)
    {
        $this->id_skin = $id_skin;

        return $this;
    }

    /**
     * Get the value of id_weapon
     */
    public function getId_weapon()
    {
        return $this->id_weapon;
    }

    /**
     * Set the value of id_weapon
     *
     * @return  self
     */
    public function setId_weapon($id_weapon)
    {
        $this->id_weapon = $id_weapon;

        return $this;
    }
}
