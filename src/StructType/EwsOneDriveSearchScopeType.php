<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneDriveSearchScopeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOneDriveSearchScopeType extends AbstractStructBase
{
    /**
     * The OneDriveView
     * Meta information extracted from the WSDL
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
    public function __construct(array $oneDriveView = array())
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
     * This method is responsible for validating the values passed to the setOneDriveView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOneDriveView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOneDriveViewForArrayConstraintsFromSetOneDriveView(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $oneDriveSearchScopeTypeOneDriveViewItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsOneDriveViewType::valueIsValid($oneDriveSearchScopeTypeOneDriveViewItem)) {
                $invalidValues[] = is_object($oneDriveSearchScopeTypeOneDriveViewItem) ? get_class($oneDriveSearchScopeTypeOneDriveViewItem) : sprintf('%s(%s)', gettype($oneDriveSearchScopeTypeOneDriveViewItem), var_export($oneDriveSearchScopeTypeOneDriveViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsOneDriveViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsOneDriveViewType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OneDriveView value
     * @uses \Ews\EnumType\EwsOneDriveViewType::valueIsValid()
     * @uses \Ews\EnumType\EwsOneDriveViewType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $oneDriveView
     * @return \Ews\StructType\EwsOneDriveSearchScopeType
     */
    public function setOneDriveView(array $oneDriveView = array())
    {
        // validation for constraint: list
        if ('' !== ($oneDriveViewArrayErrorMessage = self::validateOneDriveViewForArrayConstraintsFromSetOneDriveView($oneDriveView))) {
            throw new \InvalidArgumentException($oneDriveViewArrayErrorMessage, __LINE__);
        }
        $this->OneDriveView = is_array($oneDriveView) ? implode(' ', $oneDriveView) : null;
        return $this;
    }
}
