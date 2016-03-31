<?php

include_once(dirname(__FILE__).'/../plugins/sfNuSoapPlugin/lib/model/nusoap.php');

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
        'ID' => array('name' => 'ID', 'type' => 'xsd:string'),
        'NPWP' => array('name' => 'NPWP', 'type' => 'xsd:string'),
        'NAMA' => array('name' => 'NAMA', 'type' => 'xsd:string'),
        'ALAMAT' => array('name' => 'ALAMAT', 'type' => 'xsd:string'),
        'EMAIL' => array('name' => 'EMAIL', 'type' => 'xsd:string'),
        'TELEPON' => array('name' => 'TELEPON', 'type' => 'xsd:string'),
        'KEKAYAAN_BERSIH' => array('name' => 'KEKAYAAN_BERSIH', 'type' => 'xsd:string'),
        'CP' => array('name' => 'CP', 'type' => 'xsd:string'),
        'CP_HP' => array('name' => 'CP_HP', 'type' => 'xsd:string'),
        'USERNAME' => array('name' => 'USERNAME', 'type' => 'xsd:string'),
        'PASSWORD' => array('name' => 'PASSWORD', 'type' => 'xsd:string'),
        'PERTANYAAN' => array('name' => 'PERTANYAAN', 'type' => 'xsd:string'),
        'JAWABAN' => array('name' => 'JAWABAN', 'type' => 'xsd:string'),
        'STATE' => array('name' => 'STATE', 'type' => 'xsd:string'),
        'WAKTU_AKTIVASI' => array('name' => 'WAKTU_AKTIVASI', 'type' => 'xsd:string'),
        'KOTA' => array('name' => 'KOTA', 'type' => 'xsd:string'),
        'FAX' => array('name' => 'FAX', 'type' => 'xsd:string'),
        'CREATED_AT' => array('name' => 'CREATED_AT', 'type' => 'xsd:string'),
        'UPDATED_AT' => array('name' => 'UPDATED_AT', 'type' => 'xsd:string'),
        'DPP_NOMOR' => array('name' => 'DPP_NOMOR', 'type' => 'xsd:string'),
        'DPP_TANGGAL_MULAI' => array('name' => 'DPP_TANGGAL_MULAI', 'type' => 'xsd:string'),
        'DPP_TANGGAL_BERLAKU' => array('name' => 'DPP_TANGGAL_BERLAKU', 'type' => 'xsd:string'),
        'DPP_STATUS' => array('name' => 'DPP_STATUS', 'type' => 'xsd:string'),
        'ID_ERP' => array('name' => 'ID_ERP', 'type' => 'xsd:string'),
        'VAT_RNUM' => array('name' => 'VAT_RNUM', 'type' => 'xsd:string'),
        'REGION_ID' => array('name' => 'REGION_ID', 'type' => 'xsd:string'),
        'COUNTRY_ID' => array('name' => 'COUNTRY_ID', 'type' => 'xsd:string'),
        'TAX_NUMBER' => array('name' => 'TAX_NUMBER', 'type' => 'xsd:string'),
        'FLAG' => array('name' => 'FLAG', 'type' => 'xsd:string'),
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
 
function getPR($token) {
    if(doAuthenticate()){
        $conn = oci_connect('root', 'root', 'localhost/XE');
        if (!$conn) {
            $e = oci_error();
            trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
        }
        $stid = oci_parse($conn, 'SELECT * FROM PERUSAHAAN where flag=0');
        oci_execute($stid);
        $array = array();
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                $array[] = $row;
        }
        /*Update flag = 1*/
        /*$query = "UPDATE PERUSAHAAN SET flag = 1 WHERE flag=0";
        $stq = oci_parse($conn, $query);
        $check = oci_execute($stq);
        if($check) {
            return $array; 
        }
*/
        return $array; 
    }    
}

function doAuthenticate(){    
    if(isset($_SERVER['PHP_AUTH_USER']) and isset($_SERVER['PHP_AUTH_PW']) )
    {  
       if($_SERVER['PHP_AUTH_USER']=="test" and $_SERVER['PHP_AUTH_PW']=="test213" )
            return true;
       else
           return  false;                   
    }
}
 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
 
$server->service($HTTP_RAW_POST_DATA);

?>