<?php
require('../../vendor/autoload.php');

use Volc\Service\Vod\Models\Request\VodCreateSpaceRequest;
use Volc\Service\Vod\Models\Response\VodCreateSpaceResponse;
use Volc\Service\Vod\Vod;


$client = Vod::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$req = new VodCreateSpaceRequest();
$req->setSpaceName("your space name");
$req->setDescription("your desc");
$req->setProjectName("your project");
$response = new VodCreateSpaceResponse();
try {
    $response = $client->createSpace($req);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}
