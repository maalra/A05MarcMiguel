<?php

class camis
{
//definicion variables
  public $talla="XL ";
  public $marca="adidas ";
  public $color="blanco ";
  public $modelo="larga ";

//definicion de metodos
public function settalla($cambiartalla){
  $this ->talla=$cambiartalla;}

public function gettalla(){
return $this ->talla;
}
public function setmarca($cambiarmarca){
$this ->marca=$cambiarmarca;}

public function getmarca(){
return $this ->marca;
}
public function setcolor($cambiarcolor){
$this ->color=$cambiarcolor;}
public function getcolor(){
  return $this -> color;
}

public function setmodelo($cambiarmodelo){
  $this ->modelo=$cambiarmodelo;}
public function getmodelo(){
    return $this -> modelo;
}
}
?>
