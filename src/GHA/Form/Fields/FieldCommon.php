<?php
//------------------------------------------------------------------------------------------------------------
namespace GHA\Form\Fields;

//------------------------------------------------------------------------------------------------------------
use GHA\Form\Interfaces\FieldInterface;

//------------------------------------------------------------------------------------------------------------
class FieldCommon implements FieldInterface {
    
    private $label;
    private $id;
    private $class;
    private $value;
    private $otherAttributes;

    public function __construct(){

    }
    
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

	public function getLabel(){
		return $this->label;
	}

	public function setLabel($label){
		$this->label = $label;
		return $this;
	}
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
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

	public function getOtherAttributes(){
		return $this->otherAttributes;
	}

	public function setOtherAttributes($otherAttributes){
		$this->otherAttributes = $otherAttributes;
		return $this;
	}    
    
    //------------------------------------------------------------------------------------------------------------    
    public function renderField( $type, $name ) {
    	$rendered = '';
        $this->setType($type);
        $this->setName($name);
        
        $params['type'] = $this->type;
        $params['name'] = $this->name;
        
        if( !empty($this->id) ) $params['id'] = $this->id;
        if( !empty($this->class) ) $params['class'] = $this->class;
        if( !empty($this->value) ) $params['value'] = $this->value;
        if( !empty($this->otherAttributes) ) $params['otherAttributes'] = $this->otherAttributes;
        
        $paramsString = $this->generateParamsString($params);
        if( !empty($this->label) ) $rendered .= "<label for=\"{$this->name}\">{$this->label}</label>\n";
        $rendered .= "<input {$paramsString} />";
        
        return $rendered;
    }
    
    //------------------------------------------------------------------------------------------------------------    
    private function generateParamsString($params) {
    	$paramsString = '';
        foreach ($params as $key=>$param) {
            if(!is_array($param)) {
                $paramsString .= $key.'="'.$param.'" ';
            } else {
                $paramsString .= $this->generateParamsString($param);
            }
        }
        return $paramsString;
    }
	
    //------------------------------------------------------------------------------------------------------------    	

    
}



