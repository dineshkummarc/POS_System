<?php
/**
 * SmsSpeedLimitTimeUnit
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */

/**
 * Infobip Client API Libraries OpenAPI Specification
 *
 * OpenAPI specification containing public endpoints supported in client API libraries.
 *
 * Contact: support@infobip.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Infobip\Model;

use Infobip\ObjectSerializer;

/**
 * SmsSpeedLimitTimeUnit Class Doc Comment
 *
 * @category Class
 * @description The time unit to define when setting a messaging speed limit. Defaults to &#x60;MINUTE&#x60;.
 * @package  Infobip
 * @author   Infobip Support
 * @link     https://www.infobip.com
 */
class SmsSpeedLimitTimeUnit
{
    /**
     * Possible values of this enum
     */
    public const MINUTE = 'MINUTE';
    public const HOUR = 'HOUR';
    public const DAY = 'DAY';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MINUTE,
            self::HOUR,
            self::DAY,
        ];
    }
}
