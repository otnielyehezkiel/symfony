<?php

/**
 * home actions.
 *
 * @package    jobeet
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    if(true) {
        return sfView::SUCCESS;    
    } else {
    	return sfView::ERROR;
    }
  }

  function getPR()
  {
    include_once(sfConfig::get('sf_plugins_dir').'/sfNuSoapPlugin/lib/model/nusoap.php');
    $wsdl = "http://localhost/symfony/test/webserver/getPR.php?wsdl";
    //create client object
    $client = new nusoap_client($wsdl, 'wsdl');
     
    $err = $client->getError();
    if ($err) {
      // Display the error
      echo '<h2>Constructor error</h2>' . $err;
      // At this point, you know the call that follows will fail
            exit();
    }
     
    //call second function which return complex type
    $result = $client->call('getPR',array('token' => 'selamatdatang'));
    return $result;
  }

  public function executeGetJsonPR(sfWebRequest $request)
  {
    if ($request->isXmlHttpRequest()) {
      include_once(sfConfig::get('sf_plugins_dir').'/sfNuSoapPlugin/lib/model/nusoap.php');
      $wsdl = "http://localhost/symfony/test/webserver/getPR.php?wsdl";
      //create client object
      $client = new nusoap_client($wsdl, 'wsdl');
       
      $err = $client->getError();
      if ($err) {
        // Display the error
        echo '<h2>Constructor error</h2>' . $err;
        // At this point, you know the call that follows will fail
              exit();
      }
       
      //call second function which return complex type
      $result = $client->call('getPR',array('token' => 'selamatdatang'));
      return $this->renderText(json_encode($result));
    }
     return sfView::NONE;
  }

  public function executePR(sfWebRequest $request)
  {
    
    $this->PR = $this->getPR();
    $this->Purchase_Requisiton = $this->PR['Purchase_Requisiton'];

    if(true) {
        return sfView::SUCCESS;    
    } else {
    	return sfView::ERROR;
    }
  }
}
