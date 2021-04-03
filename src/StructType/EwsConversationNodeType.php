<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationNodeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationNodeType extends AbstractStructBase
{
    /**
     * The InternetMessageId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternetMessageId = null;
    /**
     * The ParentInternetMessageId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ParentInternetMessageId = null;
    /**
     * The Items
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAllItemsType $Items = null;
    /**
     * Constructor method for ConversationNodeType
     * @uses EwsConversationNodeType::setInternetMessageId()
     * @uses EwsConversationNodeType::setParentInternetMessageId()
     * @uses EwsConversationNodeType::setItems()
     * @param string $internetMessageId
     * @param string $parentInternetMessageId
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     */
    public function __construct(?string $internetMessageId = null, ?string $parentInternetMessageId = null, ?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null)
    {
        $this
            ->setInternetMessageId($internetMessageId)
            ->setParentInternetMessageId($parentInternetMessageId)
            ->setItems($items);
    }
    /**
     * Get InternetMessageId value
     * @return string|null
     */
    public function getInternetMessageId(): ?string
    {
        return $this->InternetMessageId;
    }
    /**
     * Set InternetMessageId value
     * @param string $internetMessageId
     * @return \StructType\EwsConversationNodeType
     */
    public function setInternetMessageId(?string $internetMessageId = null): self
    {
        // validation for constraint: string
        if (!is_null($internetMessageId) && !is_string($internetMessageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internetMessageId, true), gettype($internetMessageId)), __LINE__);
        }
        $this->InternetMessageId = $internetMessageId;
        
        return $this;
    }
    /**
     * Get ParentInternetMessageId value
     * @return string|null
     */
    public function getParentInternetMessageId(): ?string
    {
        return $this->ParentInternetMessageId;
    }
    /**
     * Set ParentInternetMessageId value
     * @param string $parentInternetMessageId
     * @return \StructType\EwsConversationNodeType
     */
    public function setParentInternetMessageId(?string $parentInternetMessageId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentInternetMessageId) && !is_string($parentInternetMessageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentInternetMessageId, true), gettype($parentInternetMessageId)), __LINE__);
        }
        $this->ParentInternetMessageId = $parentInternetMessageId;
        
        return $this;
    }
    /**
     * Get Items value
     * @return \StructType\EwsNonEmptyArrayOfAllItemsType|null
     */
    public function getItems(): ?\StructType\EwsNonEmptyArrayOfAllItemsType
    {
        return $this->Items;
    }
    /**
     * Set Items value
     * @param \StructType\EwsNonEmptyArrayOfAllItemsType $items
     * @return \StructType\EwsConversationNodeType
     */
    public function setItems(?\StructType\EwsNonEmptyArrayOfAllItemsType $items = null): self
    {
        $this->Items = $items;
        
        return $this;
    }
}
