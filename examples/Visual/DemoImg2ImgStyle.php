<?php
require('../../vendor/autoload.php');
use Volc\Service\Visual;

$client = Visual::getInstance();
// call below method if you dont set ak and sk in ～/.volc/config

$client->setAccessKey($ak);
$client->setSecretKey($sk);

echo "\nDemo Img2ImgStyle\n";

$body = [
    'req_key' => 'img2img_style',
    'prompt' => 'xxxx',
    'strength' => 0.5,
    'seed' => -1,
    // 'binary_data_base64' => [""],
    'image_url' => 'https://xxxx',
];
$response = $client->Img2ImgStyle(['json' => $body]);
echo $response;