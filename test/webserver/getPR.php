<?php

include_once(dirname(__FILE__).'/../../plugins/sfNuSoapPlugin/lib/model/nusoap.php');
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
 
$server->register('getPR',
            array('token' => 'xsd:string'),  //parameters
            array('return' => 'tns:PR'),  //output
            'urn:server',   //namespace
            'urn:server#loginServer',  //soapaction
            'rpc', // style
            'encoded', // use
            'Check user login');  //description
 
function getPR($token) {
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
        return $arr;
}
 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
 
$server->service($HTTP_RAW_POST_DATA);