<?php

/**
 * InfoPost form base class.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 */
class BaseInfoPostForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInput(),
      'title'      => new sfWidgetFormInput(),
      'text'       => new sfWidgetFormTextarea(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'InfoPost', 'column' => 'id', 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 20)),
      'title'      => new sfValidatorString(array('max_length' => 50)),
      'text'       => new sfValidatorString(),
      'created_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('info_post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'InfoPost';
  }


}
