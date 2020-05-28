<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupDetailsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupDetailsType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The GroupDetailsResponseShape
     * Meta information extracted from the WSDL
     * - ref: t:GroupDetailsResponseShape
     * @var string
     */
    public $GroupDetailsResponseShape;
    /**
     * Constructor method for GetUnifiedGroupDetailsType
     * @uses EwsGetUnifiedGroupDetailsType::setGroupDetailsResponseShape()
     * @param string $groupDetailsResponseShape
     */
    public function __construct($groupDetailsResponseShape = null)
    {
        $this
            ->setGroupDetailsResponseShape($groupDetailsResponseShape);
    }
    /**
     * Get GroupDetailsResponseShape value
     * @return string|null
     */
    public function getGroupDetailsResponseShape()
    {
        return $this->GroupDetailsResponseShape;
    }
    /**
     * Set GroupDetailsResponseShape value
     * @uses \Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::valueIsValid()
     * @uses \Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $groupDetailsResponseShape
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsType
     */
    public function setGroupDetailsResponseShape($groupDetailsResponseShape = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::valueIsValid($groupDetailsResponseShape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType', is_array($groupDetailsResponseShape) ? implode(', ', $groupDetailsResponseShape) : var_export($groupDetailsResponseShape, true), implode(', ', \Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::getValidValues())), __LINE__);
        }
        $this->GroupDetailsResponseShape = $groupDetailsResponseShape;
        return $this;
    }
}
