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
     * Meta information extracted from the WSDL
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
}
