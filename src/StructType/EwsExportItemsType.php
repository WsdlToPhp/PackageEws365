<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsExportItemsType extends EwsBaseRequestType
{
    /**
     * The ItemIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public $ItemIds;
    /**
     * Constructor method for ExportItemsType
     * @uses EwsExportItemsType::setItemIds()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null)
    {
        $this
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     * @return \Ews\StructType\EwsExportItemsType
     */
    public function setItemIds(\Ews\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExportItemsType
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
