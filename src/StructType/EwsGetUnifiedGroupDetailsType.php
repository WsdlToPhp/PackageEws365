<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupDetailsType StructType
 * Meta informations extracted from the WSDL
 * - ref: t:GroupDetailsResponseShape
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupDetailsType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The GroupDetailsResponseShape
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
     * @param string $groupDetailsResponseShape
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsType
     */
    public function setGroupDetailsResponseShape($groupDetailsResponseShape = null)
    {
        if (!\Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::valueIsValid($groupDetailsResponseShape)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $groupDetailsResponseShape, implode(', ', \Ews\EnumType\EwsUnifiedGroupDetailsResponseShapeType::getValidValues())), __LINE__);
        }
        $this->GroupDetailsResponseShape = $groupDetailsResponseShape;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
