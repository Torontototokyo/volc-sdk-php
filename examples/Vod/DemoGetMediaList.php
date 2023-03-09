// Code generated by protoc-gen-volcengine-sdk
// source: getMediaList
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodGetMediaListRequest();
$request->setSpaceName("your SpaceName");
$request->setVid("your Vid");
$request->setStatus("your Status");
$request->setOrder("your Order");
$request->setTags("your Tags");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");
$request->setOffset("your Offset");
$request->setPageSize("your PageSize");
$request->setClassificationIds("your ClassificationIds");
$request->setTosStorageClasses("your TosStorageClasses");


$response = new Volc\Service\Vod\Models\Response\VodGetMediaListResponse();
try {
    $response = $client->getMediaList($request);
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
