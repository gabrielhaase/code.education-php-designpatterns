<?php
//------------------------------------------------------------------------
namespace GHA\Form;

//------------------------------------------------------------------------
class Form {
	//------------------------------------------------------------------------
    public $formName;
    public $fields = [];
    
    //------------------------------------------------------------------------
    # NAME
	public function getFormName(){
		return $this->formName;
	}

	public function setFormName($formName){
		$this->formName = $formName;
	}  
	
	//------------------------------------------------------------------------
	# FIELDS
	public function getFields(){
		return $this->fields;
	}

	public function setFields($fields){
		//$this->fields[] = $fields;
	}
	
	public function setField($field){
		$this->fields[] = $field;
		return $this;
	}	
	
	//------------------------------------------------------------------------
    
    
}