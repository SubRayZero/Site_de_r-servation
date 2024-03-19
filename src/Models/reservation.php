<?php

class Reservation{

private $id_reservation;	
private $date;	
private $id_weapon;	
private $id_person;


/**
 * Get the value of id_reservation
 */ 
public function getId_reservation()
{
return $this->id_reservation;
}

/**
 * Set the value of id_reservation
 *
 * @return  self
 */ 
public function setId_reservation($id_reservation)
{
$this->id_reservation = $id_reservation;

return $this;
}

/**
 * Get the value of date
 */ 
public function getDate()
{
return $this->date;
}

/**
 * Set the value of date
 *
 * @return  self
 */ 
public function setDate($date)
{
$this->date = $date;

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

/**
 * Get the value of id_person
 */ 
public function getId_person()
{
return $this->id_person;
}

/**
 * Set the value of id_person
 *
 * @return  self
 */ 
public function setId_person($id_person)
{
$this->id_person = $id_person;

return $this;
}
}