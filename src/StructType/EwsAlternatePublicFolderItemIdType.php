<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AlternatePublicFolderItemIdType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an alternate public folder item Id.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAlternatePublicFolderItemIdType extends EwsAlternatePublicFolderIdType
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $ItemId;
    /**
     * Constructor method for AlternatePublicFolderItemIdType
     * @uses EwsAlternatePublicFolderItemIdType::setItemId()
     * @param string $itemId
     */
    public function __construct($itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return string
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \Ews\StructType\EwsAlternatePublicFolderItemIdType
     */
    public function setItemId($itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAlternatePublicFolderItemIdType
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
