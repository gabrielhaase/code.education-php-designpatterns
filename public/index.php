<?php
//------------------------------------------------------------------------------------------------------------
require_once('../inc/autoload.php');

//------------------------------------------------------------------------------------------------------------
use GHA\Form\Form;
use GHA\Form\Fields\FieldCommon;
use GHA\Form\Fields\FieldOptions;
use GHA\Form\Fields\FieldTextarea;
use GHA\Form\Request;
use GHA\Form\Validator;

//------------------------------------------------------------------------------------------------------------
$request = new Request();
$validator = new Validator($request);

//------------------------------------------------------------------------------------------------------------
$form1 = new Form($validator);
$fieldName = new FieldCommon();
$fieldEmail = new FieldCommon();
$fieldTelefone = new FieldCommon();
$fieldGenero = new FieldOptions();
$fieldDescricao = new FieldTextarea();
$fieldNewsletter = new FieldCommon();
$fieldSend = new FieldCommon();

$form1
->setField( $fieldName->setClass('my-class my-class2')->setLabel('Nome')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;', 'required' => 'required'])->createField('input', 'name') )
->setField( $fieldEmail->setClass('my-class')->setLabel('E-mail')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;', 'required' => 'required'] )->createField('email', 'email') )
->setField( $fieldTelefone->setClass('my-class')->setLabel('Telefone')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;'] )->createField('input', 'telefone') )
->setField( $fieldGenero->setClass('my-select-class')->setLabel('Gênero')->setOptions(['m' => 'Masculino', 'f' => 'Feminino'])->setOtherAttributes(['style' => 'width: 200px;'])->createField('select', 'genero') )
->setField( $fieldDescricao->setClass('my-class')->setLabel('Descrição')->setOtherAttributes(['style' => 'width: 300px;'] )->createField('textarea', 'descricao') )
->setField( $fieldNewsletter->setClass('my-news-class')->setLabel('Deseja receber nossa newsletter?')->createField('checkbox', 'newsletter') )
->setField( $fieldSend->setClass('btn-class')->setValue('Salvar')->createField('submit', 'sendButton') );

//------------------------------------------------------------------------------------------------------------
$form2 = new Form($validator);
$fieldLogradouro = new FieldCommon();
$fieldNumero = new FieldCommon();
$fieldComplemento = new FieldCommon();
$fieldBairro = new FieldCommon();
$fieldCep = new FieldCommon();
$fieldCidade = new FieldCommon();
$fieldEstado = new FieldCommon();
$fieldPais = new FieldCommon();

$form2
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Logradouro')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 300px;'] )->createField('input', 'logradouro') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Número')->setOtherAttributes(['maxlength' => '20', 'style' => 'width: 80px;'] )->createField('input', 'numero') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Complemento')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'complemento') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Bairro')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'bairro') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('CEP')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'cep') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Cidade')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'cidade') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('Estado')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'estado') )
->setField( $fieldLogradouro->setClass('my-class')->setLabel('País')->setOtherAttributes(['maxlength' => '200', 'style' => 'width: 150px;'] )->createField('input', 'pais') )
->setField( $fieldSend->setClass('btn-class')->setValue('Salvar')->createField('submit', 'sendButton') );

//------------------------------------------------------------------------------------------------------------
$form3 = new Form($validator);
$fieldTipos = new FieldOptions();
$fieldCor = new FieldOptions();

$form3
->setField( $fieldTipos->setClass('my-radio-class')->setLabel('Quais os tipos escolhidos?')->setOptions(['1' => 'Tipo 1', '2' => 'Tipo2', '3' => 'Tipo 3'])->createField('checkbox', 'preferencia') )
->setField( $fieldSend->setClass('btn-class')->setValue('Salvar')->createField('submit', 'sendButton') );

//------------------------------------------------------------------------------------------------------------
$form4 = new Form($validator);
$fieldCor = new FieldOptions();
$fieldAnimal = new FieldOptions();

$form4
->setField( $fieldCor->setClass('my-radio-class')->setLabel('Qual sua cor predileta?')->setOptions(['azul' => 'Azul', 'verde' => 'Verde', 'vermelho' => 'Vermelho'])->createField('radio', 'cor-predileta') )
->setField( $fieldAnimal->setClass('my-radio-class')->setLabel('Qual seu animal favorito?')->setOptions(['gato' => 'Gato', 'cachorro' => 'Cachorro', 'passaro' => 'Pássaro'])->createField('radio', 'animal-favorito') )
->setField( $fieldSend->setClass('btn-class')->setValue('Salvar')->createField('submit', 'sendButton') );

//------------------------------------------------------------------------------------------------------------
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Design Patterns</title>
    <link href="assets/stylesheets/screen.css" rel="stylesheet" type="text/css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>  
</head>
<body>
    <div class="page-header">
        <h1>Formulário <small>Design Patterns</small></h1>
    </div>
    <ul class="forms-list">
        <li>
            <h3>Dados Pessoais</h3>
            <?php echo $form1->render('pessoais', null, 'POST'); ?>            
        </li>
        <li>
            <h3>Endereço</h3>
            <?php echo $form2->render('endereco', null, 'POST'); ?>             
        </li>
        <li>
            <h3>Preferências</h3>
            <?php echo $form3->render('preferencias', null, 'POST'); ?>             
        </li>        
        <li>
            <h3>Enquete</h3>
            <?php echo $form4->render('enquete', null, 'POST'); ?>             
        </li>        
    </ul>
</body>
</html>