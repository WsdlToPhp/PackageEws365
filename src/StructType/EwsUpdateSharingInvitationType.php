<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateSharingInvitationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateSharingInvitationType extends EwsBaseSharingInvitationRequestType
{
    /**
     * The SharingInvitation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsSharingInvitation
     */
    protected \StructType\EwsSharingInvitation $SharingInvitation;
    /**
     * Constructor method for UpdateSharingInvitationType
     * @uses EwsUpdateSharingInvitationType::setSharingInvitation()
     * @param \StructType\EwsSharingInvitation $sharingInvitation
     */
    public function __construct(\StructType\EwsSharingInvitation $sharingInvitation)
    {
        $this
            ->setSharingInvitation($sharingInvitation);
    }
    /**
     * Get SharingInvitation value
     * @return \StructType\EwsSharingInvitation
     */
    public function getSharingInvitation(): \StructType\EwsSharingInvitation
    {
        return $this->SharingInvitation;
    }
    /**
     * Set SharingInvitation value
     * @param \StructType\EwsSharingInvitation $sharingInvitation
     * @return \StructType\EwsUpdateSharingInvitationType
     */
    public function setSharingInvitation(\StructType\EwsSharingInvitation $sharingInvitation): self
    {
        $this->SharingInvitation = $sharingInvitation;
        
        return $this;
    }
}
