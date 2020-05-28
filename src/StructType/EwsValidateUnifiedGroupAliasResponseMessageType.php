<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateUnifiedGroupAliasResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsValidateUnifiedGroupAliasResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IsAliasUnique
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsAliasUnique;
    /**
     * The Alias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * Constructor method for ValidateUnifiedGroupAliasResponseMessageType
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setIsAliasUnique()
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setAlias()
     * @uses EwsValidateUnifiedGroupAliasResponseMessageType::setSmtpAddress()
     * @param bool $isAliasUnique
     * @param string $alias
     * @param string $smtpAddress
     */
    public function __construct($isAliasUnique = null, $alias = null, $smtpAddress = null)
    {
        $this
            ->setIsAliasUnique($isAliasUnique)
            ->setAlias($alias)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get IsAliasUnique value
     * @return bool|null
     */
    public function getIsAliasUnique()
    {
        return $this->IsAliasUnique;
    }
    /**
     * Set IsAliasUnique value
     * @param bool $isAliasUnique
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setIsAliasUnique($isAliasUnique = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAliasUnique) && !is_bool($isAliasUnique)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAliasUnique, true), gettype($isAliasUnique)), __LINE__);
        }
        $this->IsAliasUnique = $isAliasUnique;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alias, true), gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
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
     * @return \Ews\StructType\EwsValidateUnifiedGroupAliasResponseMessageType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
}
