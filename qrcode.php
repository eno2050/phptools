<?php
/*================================================================
*   Copyright (C) 2020 Freeman  Ltd. All rights reserved.
*
*   文件名称：qrcode.php
*   创 建 者：Eno2050
*   创建日期：2020年06月29日
*   描    述：
*
================================================================*/


namespace Eno2050\Phptools;

require "./vendor/autoload.php";

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

function makeQrcode() {
    $time = time();
    $start = intval($time.'1');
    $end = intval($time.'8');
    return range($start, $end);
}

$codes = makeQrcode();

$result = [];
foreach($codes as $v){
    $url = 'http://www.niuleme.net/api/wechat/machine?id='.$v;
    $qrCode = new Qrcode($url);
    $data = $qrCode->writeDataUri();
    array_push($result, $data);
}

var_dump($result);







