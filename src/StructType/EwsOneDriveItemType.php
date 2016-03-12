<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneDriveItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: OneDrive search result item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOneDriveItemType extends EwsItemType
{
    /**
     * The ResourceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ResourceId;
    /**
     * Constructor method for OneDriveItemType
     * @uses EwsOneDriveItemType::setResourceId()
     * @param string $resourceId
     */
    public function __construct($resourceId = null)
    {
        $this
            ->setResourceId($resourceId);
    }
    /**
     * Get ResourceId value
     * @return string
     */
    public function getResourceId()
    {
        return $this->ResourceId;
    }
    /**
     * Set ResourceId value
     * @param string $resourceId
     * @return \Ews\StructType\EwsOneDriveItemType
     */
    public function setResourceId($resourceId = null)
    {
        // validation for constraint: string
        if (!is_null($resourceId) && !is_string($resourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resourceId)), __LINE__);
        }
        $this->ResourceId = $resourceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOneDriveItemType
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
