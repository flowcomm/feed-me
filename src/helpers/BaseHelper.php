<?php
namespace verbb\feedme\helpers;

use Craft;

class BaseHelper
{
    // Public Methods
    // =========================================================================

    public static function parseBoolean($value)
    {
        $result = filter_var($value, FILTER_VALIDATE_BOOLEAN);

        // Additional checks
        if (is_array($value)) {
            return;
        }

        // Also check for translated values of boolean-like terms
        if (strtolower($value) === Craft::t('app', 'yes')) {
            $result = true;
        }

        if (strtolower($value) === Craft::t('app', 'on')) {
            $result = true;
        }

        if (strtolower($value) === Craft::t('app', 'open')) {
            $result = true;
        }

        if (strtolower($value) === Craft::t('app', 'enabled')) {
            $result = true;
        }

        if (strtolower($value) === Craft::t('app', 'live')) {
            $result = true;
        }


        if (strtolower($value) === Craft::t('app', 'no')) {
            $result = false;
        }

        if (strtolower($value) === Craft::t('app', 'off')) {
            $result = false;
        }

        if (strtolower($value) === Craft::t('app', 'closed')) {
            $result = false;
        }

        if (strtolower($value) === Craft::t('app', 'disabled')) {
            $result = false;
        }

        return $result;
    }

    public static function getBrowserName($userAgent)
    {
        if (strpos($userAgent, 'Opera') || strpos($userAgent, 'OPR/')) {
            return 'Opera';
        } else if (strpos($userAgent, 'Edge')) {
            return 'Edge';
        } else if (strpos($userAgent, 'Chrome')) {
            return 'Chrome';
        } else if (strpos($userAgent, 'Safari')) {
            return 'Safari';
        } else if (strpos($userAgent, 'Firefox')) {
            return 'Firefox';
        } else if (strpos($userAgent, 'MSIE') || strpos($userAgent, 'Trident/7')) {
            return 'Internet Explorer';
        }

        return 'Other';
    }

}
