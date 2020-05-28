<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSharingInvitationsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSharingInvitationsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SharingInvitations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public $SharingInvitations;
    /**
     * Constructor method for GetSharingInvitationsResponseMessageType
     * @uses EwsGetSharingInvitationsResponseMessageType::setSharingInvitations()
     * @param \Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations = null)
    {
        $this
            ->setSharingInvitations($sharingInvitations);
    }
    /**
     * Get SharingInvitations value
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public function getSharingInvitations()
    {
        return $this->SharingInvitations;
    }
    /**
     * Set SharingInvitations value
     * @param \Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     * @return \Ews\StructType\EwsGetSharingInvitationsResponseMessageType
     */
    public function setSharingInvitations(\Ews\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations = null)
    {
        $this->SharingInvitations = $sharingInvitations;
        return $this;
    }
}
