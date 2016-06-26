<?php
namespace GHA\Form\Interfaces;

//------------------------------------------------------------------------------------------------------------
interface FieldInterface {
    
    function setField( $type, $name, $id=null, $maxlength=null, $cols=null,  $class=null, $value=null );
    
}

//------------------------------------------------------------------------------------------------------------