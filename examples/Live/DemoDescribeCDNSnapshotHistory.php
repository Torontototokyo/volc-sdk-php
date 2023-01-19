// Code generated by protoc-gen-volcengine-sdk
// source: DescribeCDNSnapshotHistory
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Live\Live::getInstance();
$client->setAccessKey('');
$client->setSecretKey('');


$request = new Volc\Service\Live\Models\Request\DescribeCDNSnapshotHistoryRequest();
$request->setVhost("");
$request->setApp("");
$request->setStream("");
$request->setDateFrom("");
$request->setDateTo("");
$request->setPageNum(0);
$request->setPageSize(0);
$request->setType("");


$response = new Volc\Service\Live\Models\Response\DescribeCDNSnapshotHistoryResponse();
try {
    $response = $client->DescribeCDNSnapshotHistory($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response != null && $response->getResponseMetadata() != null && $response->getResponseMetadata()->getError() != null) {
    echo $response->getResponseMetadata()->getError()->serializeToJsonString(), "\n";
} else {
    echo $response->serializeToJsonString(), "\n";
}
