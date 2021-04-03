<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndexedPageViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIndexedPageViewType extends EwsBasePagingType
{
    /**
     * The Offset
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $Offset;
    /**
     * The BasePoint
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $BasePoint;
    /**
     * Constructor method for IndexedPageViewType
     * @uses EwsIndexedPageViewType::setOffset()
     * @uses EwsIndexedPageViewType::setBasePoint()
     * @param int $offset
     * @param string $basePoint
     */
    public function __construct(int $offset, string $basePoint)
    {
        $this
            ->setOffset($offset)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Offset value
     * @return int
     */
    public function getOffset(): int
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \StructType\EwsIndexedPageViewType
     */
    public function setOffset(int $offset): self
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        
        return $this;
    }
    /**
     * Get BasePoint value
     * @return string
     */
    public function getBasePoint(): string
    {
        return $this->BasePoint;
    }
    /**
     * Set BasePoint value
     * @uses \EnumType\EwsIndexBasePointType::valueIsValid()
     * @uses \EnumType\EwsIndexBasePointType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $basePoint
     * @return \StructType\EwsIndexedPageViewType
     */
    public function setBasePoint(string $basePoint): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsIndexBasePointType::valueIsValid($basePoint)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsIndexBasePointType', is_array($basePoint) ? implode(', ', $basePoint) : var_export($basePoint, true), implode(', ', \EnumType\EwsIndexBasePointType::getValidValues())), __LINE__);
        }
        $this->BasePoint = $basePoint;
        
        return $this;
    }
}
