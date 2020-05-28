<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Offset;
    /**
     * The BasePoint
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BasePoint;
    /**
     * Constructor method for IndexedPageViewType
     * @uses EwsIndexedPageViewType::setOffset()
     * @uses EwsIndexedPageViewType::setBasePoint()
     * @param int $offset
     * @param string $basePoint
     */
    public function __construct($offset = null, $basePoint = null)
    {
        $this
            ->setOffset($offset)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Offset value
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \Ews\StructType\EwsIndexedPageViewType
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !(is_int($offset) || ctype_digit($offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offset, true), gettype($offset)), __LINE__);
        }
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get BasePoint value
     * @return string
     */
    public function getBasePoint()
    {
        return $this->BasePoint;
    }
    /**
     * Set BasePoint value
     * @uses \Ews\EnumType\EwsIndexBasePointType::valueIsValid()
     * @uses \Ews\EnumType\EwsIndexBasePointType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $basePoint
     * @return \Ews\StructType\EwsIndexedPageViewType
     */
    public function setBasePoint($basePoint = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIndexBasePointType::valueIsValid($basePoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsIndexBasePointType', is_array($basePoint) ? implode(', ', $basePoint) : var_export($basePoint, true), implode(', ', \Ews\EnumType\EwsIndexBasePointType::getValidValues())), __LINE__);
        }
        $this->BasePoint = $basePoint;
        return $this;
    }
}
