<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupBaseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents base unified group
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupBaseType extends AbstractStructBase
{
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * The LegacyDN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LegacyDN;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The AccessType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccessType;
    /**
     * Constructor method for UnifiedGroupBaseType
     * @uses EwsUnifiedGroupBaseType::setSmtpAddress()
     * @uses EwsUnifiedGroupBaseType::setLegacyDN()
     * @uses EwsUnifiedGroupBaseType::setDisplayName()
     * @uses EwsUnifiedGroupBaseType::setAccessType()
     * @param string $smtpAddress
     * @param string $legacyDN
     * @param string $displayName
     * @param string $accessType
     */
    public function __construct($smtpAddress = null, $legacyDN = null, $displayName = null, $accessType = null)
    {
        $this
            ->setSmtpAddress($smtpAddress)
            ->setLegacyDN($legacyDN)
            ->setDisplayName($displayName)
            ->setAccessType($accessType);
    }
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsUnifiedGroupBaseType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get LegacyDN value
     * @return string|null
     */
    public function getLegacyDN()
    {
        return $this->LegacyDN;
    }
    /**
     * Set LegacyDN value
     * @param string $legacyDN
     * @return \Ews\StructType\EwsUnifiedGroupBaseType
     */
    public function setLegacyDN($legacyDN = null)
    {
        // validation for constraint: string
        if (!is_null($legacyDN) && !is_string($legacyDN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($legacyDN)), __LINE__);
        }
        $this->LegacyDN = $legacyDN;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsUnifiedGroupBaseType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get AccessType value
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->AccessType;
    }
    /**
     * Set AccessType value
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $accessType
     * @return \Ews\StructType\EwsUnifiedGroupBaseType
     */
    public function setAccessType($accessType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupAccessType::valueIsValid($accessType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $accessType, implode(', ', \Ews\EnumType\EwsUnifiedGroupAccessType::getValidValues())), __LINE__);
        }
        $this->AccessType = $accessType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupBaseType
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
