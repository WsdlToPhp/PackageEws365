<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetImItemListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetImItemListType extends EwsBaseRequestType
{
    /**
     * The ExtendedProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $ExtendedProperties = null;
    /**
     * Constructor method for GetImItemListType
     * @uses EwsGetImItemListType::setExtendedProperties()
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null)
    {
        $this
            ->setExtendedProperties($extendedProperties);
    }
    /**
     * Get ExtendedProperties value
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs|null
     */
    public function getExtendedProperties(): ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
    {
        return $this->ExtendedProperties;
    }
    /**
     * Set ExtendedProperties value
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties
     * @return \StructType\EwsGetImItemListType
     */
    public function setExtendedProperties(?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs $extendedProperties = null): self
    {
        $this->ExtendedProperties = $extendedProperties;
        
        return $this;
    }
}
