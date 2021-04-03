<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExportItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * Constructor method for ExportItemsResponseMessageType
     * @uses EwsExportItemsResponseMessageType::setItemId()
     * @uses EwsExportItemsResponseMessageType::setData()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $data
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null, ?string $data = null)
    {
        $this
            ->setItemId($itemId)
            ->setData($data);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsExportItemsResponseMessageType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \StructType\EwsExportItemsResponseMessageType
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
}
