<?php $xml_data = '<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <SendTransactionsAction xmlns="http://tempuri.org/">
      <strUserName> USERNAME HERE </strUserName>
      <strPassword> PASSWORD HERE </strPassword>
      <strSecureKey> XXXXXXXXXXXXXXXXXX </strSecureKey>
      <strFirstName>'.$_REQUEST['strFirstName'].'</strFirstName>
      <strLastName>'.$_REQUEST['strLastName'].'</strLastName>
      <strPhoneNumber>'.$_REQUEST['strPhoneNumber'].'</strPhoneNumber>
      <strStreetNumber>'.$_REQUEST['strStreetNumber'].'</strStreetNumber>
      <strUnitNumber>'.$_REQUEST['strUnitNumber'].'</strUnitNumber>
      <strStreetName>'.$_REQUEST['strStreetName'].'</strStreetName>
      <strCity>'.$_REQUEST['strCity'].'</strCity>
      <strState>'.$_REQUEST['strState'].'</strState>
      <strZipCode>'.$_REQUEST['strZipCode'].'</strZipCode>
      <strEmailAddress>'.$_REQUEST['strEmailAddress'].'</strEmailAddress>
      <strBankName>'.$_REQUEST['strBankName'].'</strBankName>
      <strRoutingNo>'.$_REQUEST['strRoutingNo'].'</strRoutingNo>
      <strAccountNumber>'.$_REQUEST['strAccountNumber'].'</strAccountNumber>
      <strCheckNo>'.$_REQUEST['strCheckNo'].'</strCheckNo>
      <strAmount>'.$_REQUEST['strAmount'].'</strAmount>
      <strNotes>'.$_REQUEST['strFirstName'].'</strNotes>
    </SendTransactionsAction>
  </soap12:Body>
</soap12:Envelope>';
$URL = "http://69.94.141.22/SaveTransactions.asmx";

$ch = curl_init($URL);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "$xml_data");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);


if($output==111){echo "Success";} else {echo $output;};
?>