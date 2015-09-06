<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SenderAddInEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderAddInEntityType extends AbstractStructBase
{
    /**
     * The ExtensionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExtensionId;
    /**
     * Constructor method for SenderAddInEntityType
     * @uses EwsSenderAddInEntityType::setExtensionId()
     * @param string $extensionId
     */
    public function __construct($extensionId = null)
    {
        $this
            ->setExtensionId($extensionId);
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
     * @return \Ews\StructType\EwsSenderAddInEntityType
     */
    public function setExtensionId($extensionId = null)
    {
        $this->ExtensionId = $extensionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSenderAddInEntityType
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
