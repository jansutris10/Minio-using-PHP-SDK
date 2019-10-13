<?php
// $bucket = 'testbucket';
// Include the SDK using the Composer autoloader
date_default_timezone_set('America/Los_Angeles'); 
require 'aws-autoloader.php';

$s3 = new Aws\S3\S3Client([
        'version' => 'latest',
        'region'  => 'us-east-1',
        'endpoint' => 'http://192.168.40.141:9000',
        'use_path_style_endpoint' => true,
        'credentials' => [
                'key'    => '80MFCSW2PFV7I3PRWTG2',
                'secret' => '0wv0hTGqTOyBZYmdImioUcHy8isnUmT8syZN9ig+',
            ],
]);

#Send a PutObject request and get the result object.
$insert = $s3->putObject([
     'Bucket' => 'testbucket',
     'Key'    => 'testkey',
     'Body'   => 'Hello from jansutris!!'
]);
echo $insert['ObjectURL'] . PHP_EOL;
//echo $insert['Body'];
?>