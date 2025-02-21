// Code generated by protoc-gen-volcengine-sdk
// source: describeVodSpaceAIStatisData
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\DescribeVodSpaceAIStatisDataRequest();
$request->setSpaceList("your SpaceList");
$request->setStartTime("your StartTime");
$request->setEndTime("your EndTime");
$request->setMediaAiType("your MediaAiType");
$request->setTaskStageList("your TaskStageList");
$request->setAggregation(0);
$request->setDetailFieldList("your DetailFieldList");


$response = new Volc\Service\Vod\Models\Response\DescribeVodSpaceAIStatisDataResponse();
try {
    $response = $client->describeVodSpaceAIStatisData($request);
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
