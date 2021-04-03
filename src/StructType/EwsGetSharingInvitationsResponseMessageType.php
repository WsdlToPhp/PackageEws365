<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfSharingInvitation
     */
    protected \ArrayType\EwsArrayOfSharingInvitation $SharingInvitations;
    /**
     * Constructor method for GetSharingInvitationsResponseMessageType
     * @uses EwsGetSharingInvitationsResponseMessageType::setSharingInvitations()
     * @param \ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     */
    public function __construct(\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations)
    {
        $this
            ->setSharingInvitations($sharingInvitations);
    }
    /**
     * Get SharingInvitations value
     * @return \ArrayType\EwsArrayOfSharingInvitation
     */
    public function getSharingInvitations(): \ArrayType\EwsArrayOfSharingInvitation
    {
        return $this->SharingInvitations;
    }
    /**
     * Set SharingInvitations value
     * @param \ArrayType\EwsArrayOfSharingInvitation $sharingInvitations
     * @return \StructType\EwsGetSharingInvitationsResponseMessageType
     */
    public function setSharingInvitations(\ArrayType\EwsArrayOfSharingInvitation $sharingInvitations): self
    {
        $this->SharingInvitations = $sharingInvitations;
        
        return $this;
    }
}
