<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    protected \ArrayType\EwsNonEmptyArrayOfItemIdsType $ItemIds;
    /**
     * Constructor method for ExportItemsType
     * @uses EwsExportItemsType::setItemIds()
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds)
    {
        $this
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemIds value
     * @return \ArrayType\EwsNonEmptyArrayOfItemIdsType
     */
    public function getItemIds(): \ArrayType\EwsNonEmptyArrayOfItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds
     * @return \StructType\EwsExportItemsType
     */
    public function setItemIds(\ArrayType\EwsNonEmptyArrayOfItemIdsType $itemIds): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
}
