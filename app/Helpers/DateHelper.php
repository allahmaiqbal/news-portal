<?php

namespace App\Helpers;

use DateTime;
use IntlDateFormatter;

function formatDate($dateTimeStr, $formatStr) {
    $formatter = new IntlDateFormatter('bn_BD', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $formatter->setPattern($formatStr);
    $dateTime = new DateTime($dateTimeStr);
    return $formatter->format($dateTime);
}