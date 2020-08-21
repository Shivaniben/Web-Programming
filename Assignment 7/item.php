<?php

class Item {
	
	private $item_number;
	private $name;
	private $type;
	private $make;
	private $model; 
	private $brand;
	private $description;
	
	//create constractors & $this
	
	function __construct ($anitem_number,$aname,$aType,$aMake,$aModel,$aBrand,$aDescription){
		
		$this->setItem_number($anitem_number);
		$this->setName($aname);
		$this->setAtype($aType);
		$this->setAtype($aType);
		$this->setMake($aMake);
		$this->setModel($aModel);
		$this->setBrand($aBrand);
		$this->setDescription($aDescription);
	
	}

	
    public function getItem_number()
	{
		return $this-> item_number;
	}
	public function getName()
	{
		return $this-> name;
	}
	public function getAtype(){
		return $this->type;
	}
	public function getMake(){
		return $this-> make;
	}
	public function getModel(){
		return $this->model;
	}	
	public function getBrand(){
		return $this-> brand;
	}
	public function getDescription(){
		return $this-> description;
	}
	
	
	
	public function setItem_number($anitem_number)
	{
		$this-> item_number=$anitem_number;
	}
	public function setName($aname)
	{
		$this-> name=$aname ;
	}
	public function setAtype($aType){
		$this->type=$aType;
	}
	public function setMake($aMake){
		 $this-> make=$aMake;
	}
	public function setModel($aModel){
		 $this->model=$aModel;
	}	
	public function setBrand($aBrand){
		 $this-> brand=$aBrand;
	}
	public function setDescription($aDescription){
		 $this-> description=$aDescription;
	}
}
?>