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

  public function executeServer(){
    include_once(sfConfig::get('app_nusoap_dir').'/nusoap.php');
    
    $server = new nusoap_server;
     
    $server->configureWSDL('server', 'urn:server');
     
    $server->wsdl->schemaTargetNamespace = 'urn:server';
     
    $server->wsdl->addComplexType(
        'PR',
        'complexType',
        'struct',
        'all',
        '',
        array(
            'Purchase_Requisiton' => array('name' => 'Purchase_Requisiton', 'type' => 'xsd:string'),
            'Document_Type' => array('name' => 'Document_Type', 'type' => 'xsd:string'),
            'Material' => array('name' => 'Material', 'type' => 'xsd:string'),
            'Item_of_Requisition' => array('name' => 'Item_of_Requisition', 'type' => 'xsd:string'),
            'Short_Text' => array('name' => 'Short_Text', 'type' => 'xsd:string'),
            'Plant' => array('name' => 'Plant', 'type' => 'xsd:string'),
            'WBS_Element' => array('name' => 'WBS_Element', 'type' => 'xsd:string'),
            'Valuation_Price' => array('name' => 'Valuation_Price', 'type' => 'xsd:string'),
        )
    );

    $server->wsdl->addComplexType(
        'PRS',
        'complexType',
        'array',
        '',
        'SOAP-ENC:Array',
        array(),
        array(
            array('ref'=>'SOAP-ENC:arrayType',
                'wsdl:arrayType'=> 'tns:PR[]')
            ),
        'tns:PR'
    );

     
    $server->register('getPR',
                array('token' => 'xsd:string'),  //parameters
                array('return' => 'tns:PRS'),  //output
                'urn:server',   //namespace
                'urn:server#loginServer',  //soapaction
                'rpc', // style
                'encoded', // use
                'Check user login');  //description
     
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
     
    $server->service($HTTP_RAW_POST_DATA);
    
    return sfView::NONE;
  }

  public function getPR($token) {
            $arr = array(
                "Purchase_Requisiton" => "1100000051",
                "Document_Type" => "ZMKB",
                "Material" => "30000000000",
                "Item_of_Requisition" => "10",
                "Short_Text" => "BEARING 2305",
                "Plant" => "PG11",
                "WBS_Element" => "O-10-KD011181-403300.002",
                "Valuation_Price" => "50,000,000"
            );
            return array($arr);
    }

  public function executeClient(sfWebRequest $request)
  {
    include_once(sfConfig::get('app_nusoap_dir').'/nusoap.php');
    $wsdl = "http://localhost/symfony/web/backend_dev.php/home/Server";

    $client = new nusoap_client($wsdl);

    $err = $client->getError();     
    if ($err) {
      // Display the error
      echo '<h2>Constructor error</h2>' . $err;
      // At this point, you know the call that follows will fail
            exit();
    }
     
    //call second function which return complex type
    $result = $client->call('getPR',array('token' => 'selamatdatang'));
    print_r($result);
    die();
    return $result;
    $this->Purchase_Requisiton = $this->PR['Purchase_Requisiton'];

    if(true) {
        return sfView::SUCCESS;    
    } else {
      return sfView::ERROR;
    }
  }



  

  public function executePR(sfWebRequest $request)
  {
    
    $wsdl = "http://localhost/symfony/test/webserver/getPR.php?wsdl";
    $client = new nusoap_client($wsdl, 'wsdl');

    $err = $client->getError();     
    if ($err) {
      echo '<h2>Constructor error</h2>' . $err;
      exit();
    }
     
    $result = $client->call('getPR',array('token' => 'selamatdatang'));
    $this->Purchase_Requisiton = $this->PR['Purchase_Requisiton'];

    // print_r($result);

    if(true) {
        return sfView::SUCCESS;    
    } else {
    	return sfView::ERROR;
    }
  }
}
