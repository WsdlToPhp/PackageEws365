<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConvertIdType StructType
 * Meta information extracted from the WSDL
 * - documentation: Converts the passed source ids into the destination format. Change keys are not returned.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConvertIdType extends EwsBaseRequestType
{
    /**
     * The SourceIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    protected \StructType\EwsNonEmptyArrayOfAlternateIdsType $SourceIds;
    /**
     * The DestinationFormat
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $DestinationFormat;
    /**
     * Constructor method for ConvertIdType
     * @uses EwsConvertIdType::setSourceIds()
     * @uses EwsConvertIdType::setDestinationFormat()
     * @param \StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds
     * @param string $destinationFormat
     */
    public function __construct(\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds, string $destinationFormat)
    {
        $this
            ->setSourceIds($sourceIds)
            ->setDestinationFormat($destinationFormat);
    }
    /**
     * Get SourceIds value
     * @return \StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function getSourceIds(): \StructType\EwsNonEmptyArrayOfAlternateIdsType
    {
        return $this->SourceIds;
    }
    /**
     * Set SourceIds value
     * @param \StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds
     * @return \StructType\EwsConvertIdType
     */
    public function setSourceIds(\StructType\EwsNonEmptyArrayOfAlternateIdsType $sourceIds): self
    {
        $this->SourceIds = $sourceIds;
        
        return $this;
    }
    /**
     * Get DestinationFormat value
     * @return string
     */
    public function getDestinationFormat(): string
    {
        return $this->DestinationFormat;
    }
    /**
     * Set DestinationFormat value
     * @uses \EnumType\EwsIdFormatType::valueIsValid()
     * @uses \EnumType\EwsIdFormatType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $destinationFormat
     * @return \StructType\EwsConvertIdType
     */
    public function setDestinationFormat(string $destinationFormat): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIdFormatType::valueIsValid($destinationFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIdFormatType', is_array($destinationFormat) ? implode(', ', $destinationFormat) : var_export($destinationFormat, true), implode(', ', \EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->DestinationFormat = $destinationFormat;
        
        return $this;
    }
}
