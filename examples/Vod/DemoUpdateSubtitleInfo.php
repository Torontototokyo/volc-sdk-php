// Code generated by protoc-gen-volcengine-sdk
// source: updateSubtitleInfo
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodUpdateSubtitleInfoRequest();
$request->setVid("your Vid");
$request->setFileId("your FileId");
$request->setLanguage("your Language");
$request->setFormat("your Format");
$request->setTitleUnwrapped();
$request->setTagUnwrapped();


$response = new Volc\Service\Vod\Models\Response\VodUpdateSubtitleInfoResponse();
try {
    $response = $client->updateSubtitleInfo($request);
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
