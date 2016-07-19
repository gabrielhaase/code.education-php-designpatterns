<?php
//------------------------------------------------------------------------
namespace GHA\Form;

use GHA\Form\Interfaces\FormInterface;

//------------------------------------------------------------------------
class Form implements FormInterface {
	
	//------------------------------------------------------------------------
    private $name;
    private $id;
    private $action;
    private $method;
    private $fields = [];
    
	//------------------------------------------------------------------------
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

	public function getAction(){
		return $this->action;
	}

	public function setAction($action){
		$this->action = $action;
		return $this;
	}

	public function getMethod(){
		return $this->method;
	}

	public function setMethod($method){
		$this->method = $method;
		return $this;
	}
	
	//------------------------------------------------------------------------
	public function getFields(){
		return $this->fields;
	}

	public function setField($field){
		$this->fields[] = $field;
		return $this;
	}
	
	//------------------------------------------------------------------------
    public function render( $name, $action, $method ) {
    	$formString = "<form name=\"{$name}\" method=\"{$method}\" action=\"{$action}\">";
    	foreach ($this->fields as $field) {
    		$formString .= $field."<br />";
    	}
    	$formString .= "</form>";
    	return $formString;
    }
    
    //------------------------------------------------------------------------
}