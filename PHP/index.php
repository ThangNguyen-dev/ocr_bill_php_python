<?php

require_once './vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

$targetImg = './US-1.jpg';

$data = (new TesseractOCR($targetImg))->lang('eng')->run(10000);
file_put_contents('./storage/text.txt', $data);
