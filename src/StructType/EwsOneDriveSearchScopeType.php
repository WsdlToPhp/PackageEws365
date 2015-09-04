<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneDriveSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsOneDriveSearchScopeType extends AbstractStructBase
{
    /**
     * The OneDriveView
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $OneDriveView;
    /**
     * Constructor method for OneDriveSearchScopeType
     * @uses EwsOneDriveSearchScopeType::setOneDriveView()
     * @param string[] $oneDriveView
     */
    public function __construct($oneDriveView = null)
    {
        $this
            ->setOneDriveView($oneDriveView);
    }
    /**
     * Get OneDriveView value
     * @return string[]
     */
    public function getOneDriveView()
    {
        return $this->OneDriveView;
    }
    /**
     * Set OneDriveView value
     * @uses \Ews\EnumType\EwsOneDriveViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsOneDriveViewType::getValidValues()
     * @param string[] $oneDriveView
     * @return \Ews\StructType\EwsOneDriveSearchScopeType
     */
    public function setOneDriveView($oneDriveView = null)
    {
        if (!\Ews\EnumType\EwsOneDriveViewType::valueIsValid($oneDriveView)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oneDriveView, implode(', ', \Ews\EnumType\EwsOneDriveViewType::getValidValues())), __LINE__);
        }
        $this->OneDriveView = $oneDriveView;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOneDriveSearchScopeType
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
