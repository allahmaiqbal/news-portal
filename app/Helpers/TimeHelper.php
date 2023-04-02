<?php

namespace App\Helpers;

use NumberFormatter;

function formatElapsedTime($elapsedTime)
{
    $formatter = new NumberFormatter('bn_BD', NumberFormatter::DECIMAL);
    $timeUnits = [
        'second' => 'সেকেন্ড',
        'minute' => 'মিনিট',
        'hour' => 'ঘন্টা',
        'day' => 'দিন',
        'week' => 'সপ্তাহ',
        'month' => 'মাস',
        'year' => 'বছর'
    ];

    foreach ($timeUnits as $unit => $label) {
        $pattern = '/(\d+)\s+' . $unit . '/';
        preg_match($pattern, $elapsedTime, $matches);
        if (isset($matches[1])) {
            $value = (float) $matches[1];
            if ($value == 1) {
                $label = rtrim($label, 's');
            }
            $replacement = $formatter->format($value) . ' ' . $label;
            $elapsedTime = preg_replace($pattern, $replacement, $elapsedTime);
        }
    }

    $elapsedTime = $formatter->format((float) $elapsedTime) . ' আগে';
    return $elapsedTime;
}