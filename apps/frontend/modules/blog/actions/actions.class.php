<?php

/**
 * blog actions.
 *
 * @package    sf_sandbox
 * @subpackage blog
 * @author     Your name here
 */
class blogActions extends sfActions
{
  public function executeLogin(sfWebRequest $request)
  {
		//$this->hello='welcome';
		if($request->isMethod('post'))
		{
			$u=$request->getParameter('name');
			$p=$request->getParameter('password');
			//echo "post";
			$c = new Criteria();
			$c->add(InfoPeer::NAME,$u,Criteria::EQUAL);
			$c->add(InfoPeer::PASS,$p);
			$this->info_list = InfoPeer::doSelectOne($c);
			if($this->info_list)
			{
			//if(!$this->getUser()->isAuthenticated())
			//{
				$this->getUser()->setAuthenticated(true);
				$this->getUser()->addCredential('user');
			//	echo $user->getId();
				//echo $this->info_list->getName();
				$this->getUser()->setAttribute('user_id',$this->info_list->getId(),'user');
				$this->getUser()->setAttribute('username',$this->info_list->getName(),'user');
				
				
			//}
			$this->redirect('blog/home');
		    }
		}
		
				
  }
  
  public function executeLogout()
  {
	  $this->getUser()->setAuthenticated(false);
	  $this->getUser()->clearCredentials();
	  $this->getUser()->getAttributeHolder()->removeNamespace('user');
	  $this->redirect('blog/login');
  }
  
  public function executeHome(sfWebRequest $request)
  {
	  //$this->redirect('blog/')
  }
  public function executePost(sfWebRequest $request)
  {
	  		if($request->isMethod('post'))
{
	  $username=$this->getUser()->getAttribute('username','','user');
	  $txt=$request->getParameter('text');
	  $in=new InfoPost();
	  $in->setText($txt);
	  $in->setName($username);
	  $in->save();
}	  
  }
  public function executeView(sfWebRequest $request)
  {
	  $c1=new Criteria();
	  $username=$this->getUser()->getAttribute('username','','user');
	  //echo $username;
	  //$txt1=$request->getParameter('text');
	  //echo $txt1;
	  //$in1=new InfoPost();
	  $c1->add(InfoPostPeer::NAME,$username,CRITERIA::EQUAL);
	  //$c1->add(InfoPostPeer::TEXT,$in1->getText($txt1));	  
	  $this->info_list=InfoPostPeer::doSelect($c1);
	  
	  
  }
  public function executeIndex(sfWebRequest $request)
  {
    $this->info_list = InfoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->info = InfoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->info);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new InfoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new InfoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($info = InfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfoForm($info);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($info = InfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $this->form = new InfoForm($info);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($info = InfoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object info does not exist (%s).', $request->getParameter('id')));
    $info->delete();

    $this->redirect('blog/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $info = $form->save();

      $this->redirect('blog/edit?id='.$info->getId());
    }
  }
}
