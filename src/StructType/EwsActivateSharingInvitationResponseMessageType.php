<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ActivateSharingInvitationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivateSharingInvitationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SuggestedCalendarName
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $SuggestedCalendarName;
    /**
     * The PermissionLevel
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $PermissionLevel;
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $FolderId;
    /**
     * Constructor method for ActivateSharingInvitationResponseMessageType
     * @uses EwsActivateSharingInvitationResponseMessageType::setSuggestedCalendarName()
     * @uses EwsActivateSharingInvitationResponseMessageType::setPermissionLevel()
     * @uses EwsActivateSharingInvitationResponseMessageType::setFolderId()
     * @param string $suggestedCalendarName
     * @param string $permissionLevel
     * @param string $folderId
     */
    public function __construct(string $suggestedCalendarName, string $permissionLevel, string $folderId)
    {
        $this
            ->setSuggestedCalendarName($suggestedCalendarName)
            ->setPermissionLevel($permissionLevel)
            ->setFolderId($folderId);
    }
    /**
     * Get SuggestedCalendarName value
     * @return string
     */
    public function getSuggestedCalendarName(): string
    {
        return $this->SuggestedCalendarName;
    }
    /**
     * Set SuggestedCalendarName value
     * @param string $suggestedCalendarName
     * @return \StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setSuggestedCalendarName(string $suggestedCalendarName): self
    {
        // validation for constraint: string
        if (!is_null($suggestedCalendarName) && !is_string($suggestedCalendarName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suggestedCalendarName, true), gettype($suggestedCalendarName)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($suggestedCalendarName) && mb_strlen((string) $suggestedCalendarName) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $suggestedCalendarName)), __LINE__);
        }
        $this->SuggestedCalendarName = $suggestedCalendarName;
        
        return $this;
    }
    /**
     * Get PermissionLevel value
     * @return string
     */
    public function getPermissionLevel(): string
    {
        return $this->PermissionLevel;
    }
    /**
     * Set PermissionLevel value
     * @uses \EnumType\EwsSharingInvitationPermissionLevel::valueIsValid()
     * @uses \EnumType\EwsSharingInvitationPermissionLevel::getValidValues()
     * @throws InvalidArgumentException
     * @param string $permissionLevel
     * @return \StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setPermissionLevel(string $permissionLevel): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSharingInvitationPermissionLevel::valueIsValid($permissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSharingInvitationPermissionLevel', is_array($permissionLevel) ? implode(', ', $permissionLevel) : var_export($permissionLevel, true), implode(', ', \EnumType\EwsSharingInvitationPermissionLevel::getValidValues())), __LINE__);
        }
        $this->PermissionLevel = $permissionLevel;
        
        return $this;
    }
    /**
     * Get FolderId value
     * @return string
     */
    public function getFolderId(): string
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param string $folderId
     * @return \StructType\EwsActivateSharingInvitationResponseMessageType
     */
    public function setFolderId(string $folderId): self
    {
        // validation for constraint: string
        if (!is_null($folderId) && !is_string($folderId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folderId, true), gettype($folderId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($folderId) && mb_strlen((string) $folderId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $folderId)), __LINE__);
        }
        $this->FolderId = $folderId;
        
        return $this;
    }
}
