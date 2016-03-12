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
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($oldestTimeStamp)), __LINE__);
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
        if (!is_null($maxItems) && !is_int($maxItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($maxItems)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $socialActivityActionType, implode(', ', \Ews\EnumType\EwsUserSocialActivityActionTypeEnum::getValidValues())), __LINE__);
        }
        $this->SocialActivityActionType = $socialActivityActionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsType
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
