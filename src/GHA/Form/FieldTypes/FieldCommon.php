<?php
//------------------------------------------------------------------------------------------------------------
namespace GHA\Form\FieldTypes;

//------------------------------------------------------------------------------------------------------------
use GHA\Form\Interfaces\FieldCommonInterface;

//------------------------------------------------------------------------------------------------------------
class FieldCommon implements FieldCommonInterface {
    
    // private $type;
    // private $name;
    // private $id;
    // private $maxlength;
    // private $class;
    // private $value;
    
    //------------------------------------------------------------------------------------------------------------    
    public function setField( $type, $name, $id=null, $maxlength=null, $class=null, $value=null ) {
        $fieldString = "<input type=\"{$type}\" name=\"{$name}\" id=\"{$id}\" maxlength=\"{$maxlength}\" class=\"{$class}\" value=\"{$value}\" >";
        return $fieldString;
    }
    
    //------------------------------------------------------------------------------------------------------------    
	public function getType(){
		return $this->type;
	}

	public function setType($type){
		$this->type = $type;
		return $this;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
		return $this;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
		return $this;
	}

	public function getMaxlength(){
		return $this->maxlength;
	}

	public function setMaxlength($maxlength){
		$this->maxlength = $maxlength;
		return $this;
	}

	public function getClass(){
		return $this->class;
	}

	public function setClass($class){
		$this->class = $class;
		return $this;
	}

	public function getValue(){
		return $this->value;
	}

	public function setValue($value){
		$this->value = $value;
		return $this;
	} 
	
    //------------------------------------------------------------------------------------------------------------    	
}



