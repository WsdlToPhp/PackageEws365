<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ParticipantActivityRole EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsParticipantActivityRole extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Organizer'
     * @return string 'Organizer'
     */
    const VALUE_ORGANIZER = 'Organizer';
    /**
     * Constant for value 'Attendee'
     * @return string 'Attendee'
     */
    const VALUE_ATTENDEE = 'Attendee';
    /**
     * Constant for value 'Presenter'
     * @return string 'Presenter'
     */
    const VALUE_PRESENTER = 'Presenter';
    /**
     * Return allowed values
     * @uses self::VALUE_ORGANIZER
     * @uses self::VALUE_ATTENDEE
     * @uses self::VALUE_PRESENTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORGANIZER,
            self::VALUE_ATTENDEE,
            self::VALUE_PRESENTER,
        );
    }
}
