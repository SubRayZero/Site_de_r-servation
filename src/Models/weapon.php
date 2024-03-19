<?php

class Weapon{
    private $id_weapon;	
    private $name;	
    private $type;

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

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}