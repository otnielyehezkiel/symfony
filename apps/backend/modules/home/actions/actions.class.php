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

    $material = new Material();
    $material->setMATNR($this->matnumber);
    $material->setMTART($this->mattype);
    $material->setMBRSH($this->isec);
    $material->setMAKTX($this->matdes);
    $material->setMEINS($this->bum);
    $material->setMATKL($this->matgroup);

    $material->save();
    
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

  public function executePR(sfWebRequest $request)
  {
    if(true) {
        return sfView::SUCCESS;    
    } else {
      return sfView::ERROR;
    }
  }

  public function executeSubmitPR(sfWebRequest $request){
    $this->pr = $request->getParameter('pr');
    $this->dt = $request->getParameter('dt');
    $this->ior = $request->getParameter('ior');
    $this->material = $request->getParameter('material');
    $this->st = $request->getParameter('st');
    $this->plant = $request->getParameter('plant');
    $this->wbs = $request->getParameter('wbs');
    $this->vp = $request->getParameter('vp');
    var_dump($this->pr);
    var_dump($this->dt);
    var_dump($this->ior);
    var_dump($this->material);
    var_dump($this->st);
    var_dump($this->plant);
    var_dump($this->wbs);
    var_dump($this->vp);
  

    die();
    return sfView::none;  
  }

   public function executePO(sfWebRequest $request)
  {
    if(true) {
        return sfView::SUCCESS;    
    } else {
      return sfView::ERROR;
    }
  }

  public function executeSubmitPO(sfWebRequest $request){
    $this->pr = $request->getParameter('pr');
    $this->pd = $request->getParameter('pd');
    $this->dt = $request->getParameter('dt');
    $this->createdon = $request->getParameter('createdon');
    $this->vendor = $request->getParameter('vendor');
    $this->po = $request->getParameter('po');
    $this->pg = $request->getParameter('pg');
    $this->dd = $request->getParameter('dd');
    $this->qn = $request->getParameter('qn');
    $this->st = $request->getParameter('st');
    $this->material = $request->getParameter('material');
    $this->sl = $request->getParameter('sl');
    $this->mg = $request->getParameter('mg');
    $this->tq = $request->getParameter('tq');
    $this->ou = $request->getParameter('ou');
    $this->np = $request->getParameter('np');
    $this->pu = $request->getParameter('pu');
    $this->pu = $request->getParameter('gv');
    var_dump($this->pr);
    var_dump($this->pd);
    var_dump($this->dt);
    var_dump($this->createdon);
    var_dump($this->vendor);
    var_dump($this->po);
    var_dump($this->pg);
    var_dump($this->dd);
    var_dump($this->qn);
    var_dump($this->st);
    var_dump($this->material);
    var_dump($this->mg);
    var_dump($this->tq);
    var_dump($this->ou);
    var_dump($this->np);
    var_dump($this->pu);
    var_dump($this->gv);

    die();
    return sfView::none;  
  }

     public function executeVendor(sfWebRequest $request)
  {
    if(true) {
        return sfView::SUCCESS;    
    } else {
      return sfView::ERROR;
    }
  }

  public function executeSubmitVendor(sfWebRequest $request){
    $this->an = $request->getParameter('an');
    $this->ck = $request->getParameter('ck');
    $this->name = $request->getParameter('name');
    $this->city = $request->getParameter('city');
    $this->vendor = $request->getParameter('pc');
    $this->region = $request->getParameter('region');
    $this->sf = $request->getParameter('sf');
    $this->hnas = $request->getParameter('hnas');
    $this->address = $request->getParameter('address');
    $this->stfms = $request->getParameter('stfms');
    $this->stfms2 = $request->getParameter('stfms2');
    $this->vendor = $request->getParameter('vendor');
    $this->date = $request->getParameter('date');
    $this->nameper = $request->getParameter('nameper');
    $this->vag = $request->getParameter('vag');
    $this->lkey = $request->getParameter('lkey');
    $this->ftn = $request->getParameter('ftn');
    $this->sctn = $request->getParameter('sctn');
    $this->fn = $request->getParameter('fn');
    $this->vat = $request->getParameter('vat');
    $this->status = $request->getParameter('status');
    $this->tn5 = $request->getParameter('tn5');
    var_dump($this->an);
    var_dump($this->ck);
    var_dump($this->name);
    var_dump($this->city);
    var_dump($this->vendor);
    var_dump($this->region);
    var_dump($this->sf);
    var_dump($this->hnas);
    var_dump($this->address);
    var_dump($this->date);
    var_dump($this->nameper);
    var_dump($this->vag);
    var_dump($this->lkey);
    var_dump($this->ftn);
    var_dump($this->sctn);
    var_dump($this->fn);
    var_dump($this->vat);
    var_dump($this->status);
    var_dump($this->tn5);

    die();
    return sfView::none;  
  }

  /*request from database eproc*/

  public function executeGetPR(sfWebRequest $request)
  {
    include_once(sfConfig::get('sf_plugins_dir').'/sfNuSoapPlugin/lib/model/nusoap.php');
    $wsdl = "http://localhost/project/test/connection.php?wsdl";
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
    $client->setCredentials("test","test213","basic");
    $result = $client->call('getPR',array('token' => 'selamatdatang'));
    //var_dump($result);
    //die();
    /*
    $wsdl = "http://erpdvqa.ptpn10.co.id:8052/sap/bc/srt/wsdl/flv_10002A1112D1/bndg_url/sap/bc/srt/rfc/sap/zws_get_vendor/521/zws_get_vendor/zws_get_vendor?sap-client=521";*/
      //$client = new nusoap_client($wsdl, 'wsdl');
      //create client object
      /*$client = new nusoap_client($wsdl, 'wsdl');
      //$header('Authorization: Basic '. base64_encode("mukhlis:bismillah"));
      $client->setCredentials("test","test213","basic");
      $err = $client->getError();
      if ($err) {
        // Display the error
        echo '<h2>Constructor error</h2>' . $err;
        // At this point, you know the call that follows will fail
              exit();
      }
       
      //call second function which return complex type*/

      //}
      //$client->setCredentials("mukhlis","bismillah","basic");
      //$result = $client->call('ZFM_VENDOR',array('NAME' => 'Z'));
      /*var_dump($client);
      die();*/
      var_dump($result);
      echo '<h2>Debug</h2>';
      echo '<h2>Request</h2>';
      echo '<pre>' . htmlspecialchars($client ->request, ENT_QUOTES) . '</pre>';
      echo '<h2>Response</h2>';
      echo '<pre>' . htmlspecialchars($client ->response, ENT_QUOTES) . '</pre>';
      echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
      echo '<h2>Error</h2>';
      echo '<pre>' . htmlspecialchars($client->getError(), ENT_QUOTES) . '</pre>';
      echo '<h2>Fault</h2>';
      echo '<pre>' . htmlspecialchars($client->fault, ENT_QUOTES) . '</pre>';
      die();
  }
}
