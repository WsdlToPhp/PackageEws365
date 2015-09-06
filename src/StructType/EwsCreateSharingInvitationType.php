<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateSharingInvitationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateSharingInvitationType extends EwsBaseCalendarRequestType
{
    /**
     * The SharingInvitation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSharingInvitation
     */
    public $SharingInvitation;
    /**
     * Constructor method for CreateSharingInvitationType
     * @uses EwsCreateSharingInvitationType::setSharingInvitation()
     * @param \Ews\StructType\EwsSharingInvitation $sharingInvitation
     */
    public function __construct(\Ews\StructType\EwsSharingInvitation $sharingInvitation = null)
    {
        $this
            ->setSharingInvitation($sharingInvitation);
    }
    /**
     * Get SharingInvitation value
     * @return \Ews\StructType\EwsSharingInvitation
     */
    public function getSharingInvitation()
    {
        return $this->SharingInvitation;
    }
    /**
     * Set SharingInvitation value
     * @param \Ews\StructType\EwsSharingInvitation $sharingInvitation
     * @return \Ews\StructType\EwsCreateSharingInvitationType
     */
    public function setSharingInvitation(\Ews\StructType\EwsSharingInvitation $sharingInvitation = null)
    {
        $this->SharingInvitation = $sharingInvitation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateSharingInvitationType
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
