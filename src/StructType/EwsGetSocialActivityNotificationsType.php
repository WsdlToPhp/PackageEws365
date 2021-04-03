<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSocialActivityNotificationsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSocialActivityNotificationsType extends EwsBaseRequestType
{
    /**
     * The OldestTimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $OldestTimeStamp;
    /**
     * The MaxItems
     * @var int|null
     */
    protected ?int $MaxItems = null;
    /**
     * The SocialActivityActionType
     * @var string|null
     */
    protected ?string $SocialActivityActionType = null;
    /**
     * Constructor method for GetSocialActivityNotificationsType
     * @uses EwsGetSocialActivityNotificationsType::setOldestTimeStamp()
     * @uses EwsGetSocialActivityNotificationsType::setMaxItems()
     * @uses EwsGetSocialActivityNotificationsType::setSocialActivityActionType()
     * @param string $oldestTimeStamp
     * @param int $maxItems
     * @param string $socialActivityActionType
     */
    public function __construct(string $oldestTimeStamp, ?int $maxItems = null, ?string $socialActivityActionType = null)
    {
        $this
            ->setOldestTimeStamp($oldestTimeStamp)
            ->setMaxItems($maxItems)
            ->setSocialActivityActionType($socialActivityActionType);
    }
    /**
     * Get OldestTimeStamp value
     * @return string
     */
    public function getOldestTimeStamp(): string
    {
        return $this->OldestTimeStamp;
    }
    /**
     * Set OldestTimeStamp value
     * @param string $oldestTimeStamp
     * @return \StructType\EwsGetSocialActivityNotificationsType
     */
    public function setOldestTimeStamp(string $oldestTimeStamp): self
    {
        // validation for constraint: string
        if (!is_null($oldestTimeStamp) && !is_string($oldestTimeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldestTimeStamp, true), gettype($oldestTimeStamp)), __LINE__);
        }
        $this->OldestTimeStamp = $oldestTimeStamp;
        
        return $this;
    }
    /**
     * Get MaxItems value
     * @return int|null
     */
    public function getMaxItems(): ?int
    {
        return $this->MaxItems;
    }
    /**
     * Set MaxItems value
     * @param int $maxItems
     * @return \StructType\EwsGetSocialActivityNotificationsType
     */
    public function setMaxItems(?int $maxItems = null): self
    {
        // validation for constraint: int
        if (!is_null($maxItems) && !(is_int($maxItems) || ctype_digit($maxItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItems, true), gettype($maxItems)), __LINE__);
        }
        $this->MaxItems = $maxItems;
        
        return $this;
    }
    /**
     * Get SocialActivityActionType value
     * @return string|null
     */
    public function getSocialActivityActionType(): ?string
    {
        return $this->SocialActivityActionType;
    }
    /**
     * Set SocialActivityActionType value
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $socialActivityActionType
     * @return \StructType\EwsGetSocialActivityNotificationsType
     */
    public function setSocialActivityActionType(?string $socialActivityActionType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($socialActivityActionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsUserSocialActivityActionTypeEnum', is_array($socialActivityActionType) ? implode(', ', $socialActivityActionType) : var_export($socialActivityActionType, true), implode(', ', \EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->SocialActivityActionType = $socialActivityActionType;
        
        return $this;
    }
}
