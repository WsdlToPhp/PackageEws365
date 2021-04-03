<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleValueInsightContent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSingleValueInsightContent extends EwsInsightContent
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsInsightValue|null
     */
    protected ?\StructType\EwsInsightValue $Item = null;
    /**
     * Constructor method for SingleValueInsightContent
     * @uses EwsSingleValueInsightContent::setItem()
     * @param \StructType\EwsInsightValue $item
     */
    public function __construct(?\StructType\EwsInsightValue $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsInsightValue|null
     */
    public function getItem(): ?\StructType\EwsInsightValue
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\EwsInsightValue $item
     * @return \StructType\EwsSingleValueInsightContent
     */
    public function setItem(?\StructType\EwsInsightValue $item = null): self
    {
        $this->Item = $item;
        
        return $this;
    }
}
