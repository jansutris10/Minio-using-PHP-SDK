<?php
require 'aws-autoloader.php';

date_default_timezone_set('America/Los_Angeles'); 

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
$key = 'roy.jpg';
$result = $s3->putObject([
	'Bucket' => 'bucket3',
	'Key'    => $key,
	'Body'   => 'this is the body!',
	'SourceFile' => 'C:\Users\COMPUTER\Pictures\inganta.jpg',
    'ContentType' => 'image/jpg',
    ]);

$retrive = $s3->getObject([
    'Bucket' => 'bucket3',
    'Key'    => $key,
    'SaveAs' => 'roy_sayang.jpg',
    'DestinationFile' => 'C:\Users\COMPUTER\Pictures\ganteng.jpg',
]);

// Print the body of the result by indexing into the result object.
var_dump($retrive);