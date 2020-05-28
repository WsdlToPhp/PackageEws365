<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExportItemsType extends EwsBaseRequestType
{
    /**
     * The ItemIds
     * Meta information extracted from the WSDL
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
}
