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

  public function executeMaterial(sfWebRequest $request)
  {
    if(true) {
        return sfView::SUCCESS;    
    } else {
      return sfView::ERROR;
    }
  }

  public function executeSubmitMaterial(sfWebRequest $request){
    $this->matnumber = $request->getParameter('matnumber');
    $this->mattype = $request->getParameter('mattype');
    $this->isec = $request->getParameter('isec');
    $this->matdes = $request->getParameter('matdes');
    $this->bum = $request->getParameter('bum');
    $this->matgroup = $request->getParameter('matgroup');
    var_dump($this->matnumber);
    var_dump($this->mattype);
    var_dump($this->isec);
    var_dump($this->matdes);
    var_dump($this->bum);
    var_dump($this->matgroup);
    die();

    include_once(sfConfig::get('app_nusoap_dir').'/nusoap.php');
    
    $wsdl = "http://erpdvqa.ptpn10.co.id:8052/sap/bc/srt/wsdl/flv_10002A1112D1/bndg_url/sap/bc/srt/rfc/sap/zws_get_vendor/521/zws_get_vendor/zws_get_vendor?sap-client=521";

    $client = new nusoap_client($wsdl, array('soap_version' => SOAP_1_2));

    $a = $client->setCredentials("mukhlis","bismillah","basic");

    if ($client) {
        $result = $client->call("ZFM_VENDOR", array("NAME" => "z"));
    }

    if ($client->fault) {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    } else {
        $error = $client->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        } else {
            var_dump($result);
        }
    }
    return sfView::none;  
  }
}
