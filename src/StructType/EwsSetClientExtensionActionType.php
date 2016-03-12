<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetClientExtensionActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetClientExtensionActionType extends AbstractStructBase
{
    /**
     * The ActionId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ActionId;
    /**
     * The ClientExtension
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsClientExtensionType
     */
    public $ClientExtension;
    /**
     * The ExtensionId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ExtensionId;
    /**
     * Constructor method for SetClientExtensionActionType
     * @uses EwsSetClientExtensionActionType::setActionId()
     * @uses EwsSetClientExtensionActionType::setClientExtension()
     * @uses EwsSetClientExtensionActionType::setExtensionId()
     * @param string $actionId
     * @param \Ews\StructType\EwsClientExtensionType $clientExtension
     * @param string $extensionId
     */
    public function __construct($actionId = null, \Ews\StructType\EwsClientExtensionType $clientExtension = null, $extensionId = null)
    {
        $this
            ->setActionId($actionId)
            ->setClientExtension($clientExtension)
            ->setExtensionId($extensionId);
    }
    /**
     * Get ActionId value
     * @return string
     */
    public function getActionId()
    {
        return $this->ActionId;
    }
    /**
     * Set ActionId value
     * @uses \Ews\EnumType\EwsSetClientExtensionActionIdType::valueIsValid()
     * @uses \Ews\EnumType\EwsSetClientExtensionActionIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $actionId
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function setActionId($actionId = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSetClientExtensionActionIdType::valueIsValid($actionId)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $actionId, implode(', ', \Ews\EnumType\EwsSetClientExtensionActionIdType::getValidValues())), __LINE__);
        }
        $this->ActionId = $actionId;
        return $this;
    }
    /**
     * Get ClientExtension value
     * @return \Ews\StructType\EwsClientExtensionType|null
     */
    public function getClientExtension()
    {
        return $this->ClientExtension;
    }
    /**
     * Set ClientExtension value
     * @param \Ews\StructType\EwsClientExtensionType $clientExtension
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function setClientExtension(\Ews\StructType\EwsClientExtensionType $clientExtension = null)
    {
        $this->ClientExtension = $clientExtension;
        return $this;
    }
    /**
     * Get ExtensionId value
     * @return string|null
     */
    public function getExtensionId()
    {
        return $this->ExtensionId;
    }
    /**
     * Set ExtensionId value
     * @param string $extensionId
     * @return \Ews\StructType\EwsSetClientExtensionActionType
     */
    public function setExtensionId($extensionId = null)
    {
        // validation for constraint: string
        if (!is_null($extensionId) && !is_string($extensionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extensionId)), __LINE__);
        }
        $this->ExtensionId = $extensionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetClientExtensionActionType
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
