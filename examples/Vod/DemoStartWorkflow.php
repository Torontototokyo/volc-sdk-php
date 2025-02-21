// Code generated by protoc-gen-volcengine-sdk
// source: startWorkflow
// DO NOT EDIT!
<?php
require('../../vendor/autoload.php');

$client = Volc\Service\Vod\Vod::getInstance();
$client->setAccessKey('your ak');
$client->setSecretKey('your sk');

$request = new Volc\Service\Vod\Models\Request\VodStartWorkflowRequest();
$request->setVid("your Vid");
$request->setTemplateId("your TemplateId");
$request->setInput(new Volc\Service\Vod\Models\Business\WorkflowParams());$request->setPriority(0);
$request->setCallbackArgs("your CallbackArgs");
$request->setEnableLowPriority(false);
$request->setDirectUrl(new Volc\Service\Vod\Models\Business\DirectUrl());

$response = new Volc\Service\Vod\Models\Response\VodStartWorkflowResponse();
try {
    $response = $client->startWorkflow($request);
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
