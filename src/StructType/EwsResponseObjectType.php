<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseObjectType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Abstract base type for reply objects
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
abstract class EwsResponseObjectType extends EwsResponseObjectCoreType
{
    /**
     * The ObjectName
     * Meta informations extracted from the WSDL
     * - documentation: The name of this reply object class as an English string. The client application is required to translate it if it's running in a different locale
     * - use: optional
     * @var string
     */
    public $ObjectName;
    /**
     * Constructor method for ResponseObjectType
     * @uses EwsResponseObjectType::setObjectName()
     * @param string $objectName
     */
    public function __construct($objectName = null)
    {
        $this
            ->setObjectName($objectName);
    }
    /**
     * Get ObjectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->ObjectName;
    }
    /**
     * Set ObjectName value
     * @param string $objectName
     * @return \Ews\StructType\EwsResponseObjectType
     */
    public function setObjectName($objectName = null)
    {
        $this->ObjectName = $objectName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsResponseObjectType
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
