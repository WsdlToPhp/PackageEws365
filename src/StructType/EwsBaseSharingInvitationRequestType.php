<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $SharingInvitationId;
    /**
     * Constructor method for BaseSharingInvitationRequestType
     * @uses EwsBaseSharingInvitationRequestType::setSharingInvitationId()
     * @param string $sharingInvitationId
     */
    public function __construct(string $sharingInvitationId)
    {
        $this
            ->setSharingInvitationId($sharingInvitationId);
    }
    /**
     * Get SharingInvitationId value
     * @return string
     */
    public function getSharingInvitationId(): string
    {
        return $this->SharingInvitationId;
    }
    /**
     * Set SharingInvitationId value
     * @param string $sharingInvitationId
     * @return \StructType\EwsBaseSharingInvitationRequestType
     */
    public function setSharingInvitationId(string $sharingInvitationId): self
    {
        // validation for constraint: string
        if (!is_null($sharingInvitationId) && !is_string($sharingInvitationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sharingInvitationId, true), gettype($sharingInvitationId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($sharingInvitationId) && mb_strlen((string) $sharingInvitationId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $sharingInvitationId)), __LINE__);
        }
        $this->SharingInvitationId = $sharingInvitationId;
        
        return $this;
    }
}
