<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetItemType extends EwsBaseRequestType
{
    /**
     * The ItemShape
     * @var \StructType\EwsItemResponseShapeType|null
     */
    protected ?\StructType\EwsItemResponseShapeType $ItemShape = null;
    /**
     * The ItemIds
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * Constructor method for GetItemType
     * @uses EwsGetItemType::setItemShape()
     * @uses EwsGetItemType::setItemIds()
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     */
    public function __construct(?\StructType\EwsItemResponseShapeType $itemShape = null, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this
            ->setItemShape($itemShape)
            ->setItemIds($itemIds);
    }
    /**
     * Get ItemShape value
     * @return \StructType\EwsItemResponseShapeType|null
     */
    public function getItemShape(): ?\StructType\EwsItemResponseShapeType
    {
        return $this->ItemShape;
    }
    /**
     * Set ItemShape value
     * @param \StructType\EwsItemResponseShapeType $itemShape
     * @return \StructType\EwsGetItemType
     */
    public function setItemShape(?\StructType\EwsItemResponseShapeType $itemShape = null): self
    {
        $this->ItemShape = $itemShape;
        
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsGetItemType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
}
