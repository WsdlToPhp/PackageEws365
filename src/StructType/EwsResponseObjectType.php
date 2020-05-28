<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseObjectType StructType
 * Meta information extracted from the WSDL
 * - documentation: Abstract base type for reply objects
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsResponseObjectType extends EwsResponseObjectCoreType
{
    /**
     * The ObjectName
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($objectName) && !is_string($objectName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectName, true), gettype($objectName)), __LINE__);
        }
        $this->ObjectName = $objectName;
        return $this;
    }
}
