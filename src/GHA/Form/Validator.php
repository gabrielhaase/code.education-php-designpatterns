<?php
//------------------------------------------------------------------------
namespace GHA\Form;

use GHA\Form\Request;

//------------------------------------------------------------------------
class Validator {
    private $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }
}

//------------------------------------------------------------------------