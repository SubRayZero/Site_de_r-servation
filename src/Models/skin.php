<?php

class Skin
{
    private $id_skin;
    private $name;

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
}
