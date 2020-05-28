<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $OldestTimeStamp;
    /**
     * The MaxItems
     * @var int
     */
    public $MaxItems;
    /**
     * The SocialActivityActionType
     * @var string
     */
    public $SocialActivityActionType;
    /**
     * Constructor method for GetSocialActivityNotificationsType
     * @uses EwsGetSocialActivityNotificationsType::setOldestTimeStamp()
     * @uses EwsGetSocialActivityNotificationsType::setMaxItems()
     * @uses EwsGetSocialActivityNotificationsType::setSocialActivityActionType()
     * @param string $oldestTimeStamp
     * @param int $maxItems
     * @param string $socialActivityActionType
     */
    public function __construct($oldestTimeStamp = null, $maxItems = null, $socialActivityActionType = null)
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
    public function getOldestTimeStamp()
    {
        return $this->OldestTimeStamp;
    }
    /**
     * Set OldestTimeStamp value
     * @param string $oldestTimeStamp
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsType
     */
    public function setOldestTimeStamp($oldestTimeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($oldestTimeStamp) && !is_string($oldestTimeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldestTimeStamp, true), gettype($oldestTimeStamp)), __LINE__);
        }
        $this->OldestTimeStamp = $oldestTimeStamp;
        return $this;
    }
    /**
     * Get MaxItems value
     * @return int|null
     */
    public function getMaxItems()
    {
        return $this->MaxItems;
    }
    /**
     * Set MaxItems value
     * @param int $maxItems
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsType
     */
    public function setMaxItems($maxItems = null)
    {
        // validation for constraint: int
        if (!is_null($maxItems) && !(is_int($maxItems) || ctype_digit($maxItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItems, true), gettype($maxItems)), __LINE__);
        }
        $this->MaxItems = $maxItems;
        return $this;
    }
    /**
     * Get SocialActivityActionType value
     * @return string|null
     */
    public function getSocialActivityActionType()
    {
        return $this->SocialActivityActionType;
    }
    /**
     * Set SocialActivityActionType value
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid()
     * @uses \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $socialActivityActionType
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsType
     */
    public function setSocialActivityActionType($socialActivityActionType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUserSocialActivityActionTypeEnum::valueIsValid($socialActivityActionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUserSocialActivityActionTypeEnum', is_array($socialActivityActionType) ? implode(', ', $socialActivityActionType) : var_export($socialActivityActionType, true), implode(', ', \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->SocialActivityActionType = $socialActivityActionType;
        return $this;
    }
}
