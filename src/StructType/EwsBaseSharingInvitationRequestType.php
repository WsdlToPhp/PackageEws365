<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSharingInvitationRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseSharingInvitationRequestType extends EwsBaseCalendarRequestType
{
    /**
     * The SharingInvitationId
     * Meta informations extracted from the WSDL
     * - use: required
     * - minLength: 1
     * @var string
     */
    public $SharingInvitationId;
    /**
     * Constructor method for BaseSharingInvitationRequestType
     * @uses EwsBaseSharingInvitationRequestType::setSharingInvitationId()
     * @param string $sharingInvitationId
     */
    public function __construct($sharingInvitationId = null)
    {
        $this
            ->setSharingInvitationId($sharingInvitationId);
    }
    /**
     * Get SharingInvitationId value
     * @return string
     */
    public function getSharingInvitationId()
    {
        return $this->SharingInvitationId;
    }
    /**
     * Set SharingInvitationId value
     * @param string $sharingInvitationId
     * @return \Ews\StructType\EwsBaseSharingInvitationRequestType
     */
    public function setSharingInvitationId($sharingInvitationId = null)
    {
        $this->SharingInvitationId = $sharingInvitationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBaseSharingInvitationRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
