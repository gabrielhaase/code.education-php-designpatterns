<?php
//------------------------------------------------------------------------------------------------------------
require_once('./inc/autoload.php');

//------------------------------------------------------------------------------------------------------------
use GHA\Form\Form;
use GHA\Form\Fields\FieldCommon;
use GHA\Form\Fields\FieldOptions;

//------------------------------------------------------------------------------------------------------------
$form = new Form();
$fieldName = new FieldCommon();
$fieldEmail = new FieldCommon();
$fieldEndereco = new FieldCommon();
$fieldGenero = new FieldOptions();
$fieldTipos = new FieldOptions();
$fieldCor = new FieldOptions();
$fieldNewsletter = new FieldCommon();
$fiendSend = new FieldCommon();

//------------------------------------------------------------------------------------------------------------
$form
->setField( $fieldName->setClass('my-class my-class2')->setLabel('Nome')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;'])->renderField('input', 'name') )
->setField( $fieldEndereco->setClass('my-class')->setLabel('Endreço')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;'])->renderField('input', 'endereco') )
->setField( $fieldEmail->setClass('my-class')->setLabel('E-mail')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;'])->renderField('email', 'email') )
->setField( $fieldGenero->setClass('my-select-class')->setLabel('Gênero')->setOptions(['m' => 'Masculino', 'f' => 'Feminino'])->setOtherAttributes(['style' => 'width: 200px;'])->renderField('select', 'genero') )
->setField( $fieldTipos->setClass('my-checkbox-class')->setLabel('Tipos')->setOptions(['t1' => 'Tipo 1', 't2' => 'Tipo 2', 't3' => 'Tipo 3'])->renderField('checkbox', 'tipos') )
->setField( $fieldCor->setClass('my-radio-class')->setLabel('Qual sua cor predileta?')->setOptions(['azul' => 'Azul', 'verde' => 'Verde', 'vermelho' => 'Vermelho'])->renderField('radio', 'cor-predileta') )
->setField( $fieldNewsletter->setClass('my-news-class')->setLabel('Deseja receber nossa newsletter?')->renderField('checkbox', 'newsletter') )
->setField( $fiendSend->setClass('btn-class')->setValue('Enviar')->renderField('button', 'sendButton') );

//------------------------------------------------------------------------------------------------------------
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Design Patterns</title>
    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->
</head>
<body>
    <h3>Formulário de cadastro</h3>
    <?php echo $form->render('cadastro', null, 'POST'); ?>
</body>
</html>