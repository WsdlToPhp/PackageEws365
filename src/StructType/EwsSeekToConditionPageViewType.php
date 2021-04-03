<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeekToConditionPageViewType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSeekToConditionPageViewType extends EwsBasePagingType
{
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsRestrictionType
     */
    protected \StructType\EwsRestrictionType $Condition;
    /**
     * The BasePoint
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $BasePoint;
    /**
     * Constructor method for SeekToConditionPageViewType
     * @uses EwsSeekToConditionPageViewType::setCondition()
     * @uses EwsSeekToConditionPageViewType::setBasePoint()
     * @param \StructType\EwsRestrictionType $condition
     * @param string $basePoint
     */
    public function __construct(\StructType\EwsRestrictionType $condition, string $basePoint)
    {
        $this
            ->setCondition($condition)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Condition value
     * @return \StructType\EwsRestrictionType
     */
    public function getCondition(): \StructType\EwsRestrictionType
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \StructType\EwsRestrictionType $condition
     * @return \StructType\EwsSeekToConditionPageViewType
     */
    public function setCondition(\StructType\EwsRestrictionType $condition): self
    {
        $this->Condition = $condition;
        
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
     * @return \StructType\EwsSeekToConditionPageViewType
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
