<?php

/**
 * Info form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 */
class BaseInfoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'name' => new sfWidgetFormInput(),
      'pass' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorPropelChoice(array('model' => 'Info', 'column' => 'id', 'required' => false)),
      'name' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'pass' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('info[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Info';
  }


}
