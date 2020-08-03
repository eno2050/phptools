<?php
namespace eno2050;
error_reporting(E_ALL);
require_once './vendor/autoload.php';
use Eno2050\Phptools\SpiderTools;

$config = array(
    'url' => 'https://www.88ys.com/',
);

$spider = new SpiderTools($config);

$spider->spiderListToDetail();


