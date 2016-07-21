<?php
//------------------------------------------------------------------------
namespace GHA\Form;

use GHA\Form\Interfaces\FormInterface;
use GHA\Form\Validator;

//------------------------------------------------------------------------
class Form implements FormInterface {
	//------------------------------------------------------------------------
    private $name;
    private $id;
    private $action;
    private $method;
    private $fields = [];
    private $validator;
    
    //------------------------------------------------------------------------
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }    
    
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
    	$formString = "
    	<form name=\"{$name}\" method=\"{$method}\" action=\"{$action}\">
    		<fieldset>
    			<ul>";
			    	foreach ($this->fields as $field) {
			    		$formString .= "<li>".$field."</li><br />";
			    	}
		$formString .= "
				</ul>
    		</fieldset>
    	</form>";
    	return $formString;
    }
    
    //------------------------------------------------------------------------
}