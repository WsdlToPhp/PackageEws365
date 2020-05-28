<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsRestrictionType
     */
    public $Condition;
    /**
     * The BasePoint
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $BasePoint;
    /**
     * Constructor method for SeekToConditionPageViewType
     * @uses EwsSeekToConditionPageViewType::setCondition()
     * @uses EwsSeekToConditionPageViewType::setBasePoint()
     * @param \Ews\StructType\EwsRestrictionType $condition
     * @param string $basePoint
     */
    public function __construct(\Ews\StructType\EwsRestrictionType $condition = null, $basePoint = null)
    {
        $this
            ->setCondition($condition)
            ->setBasePoint($basePoint);
    }
    /**
     * Get Condition value
     * @return \Ews\StructType\EwsRestrictionType
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \Ews\StructType\EwsRestrictionType $condition
     * @return \Ews\StructType\EwsSeekToConditionPageViewType
     */
    public function setCondition(\Ews\StructType\EwsRestrictionType $condition = null)
    {
        $this->Condition = $condition;
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
     * @return \Ews\StructType\EwsSeekToConditionPageViewType
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
