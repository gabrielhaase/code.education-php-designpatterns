<?php
namespace GHA\Form\Interfaces;

//------------------------------------------------------------------------------------------------------------
interface FieldCommonInterface {
    function setField( $type, $name, $id=null, $maxlength=null, $class=null, $value=null );
}

//------------------------------------------------------------------------------------------------------------