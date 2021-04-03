<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    protected string $OneDriveView;
    /**
     * Constructor method for OneDriveSearchScopeType
     * @uses EwsOneDriveSearchScopeType::setOneDriveView()
     * @param array|string $oneDriveView
     */
    public function __construct($oneDriveView)
    {
        $this
            ->setOneDriveView($oneDriveView);
    }
    /**
     * Get OneDriveView value
     * @return string
     */
    public function getOneDriveView(): string
    {
        return $this->OneDriveView;
    }
    /**
     * This method is responsible for validating the values passed to the setOneDriveView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOneDriveView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOneDriveViewForArrayConstraintsFromSetOneDriveView(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $oneDriveSearchScopeTypeOneDriveViewItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsOneDriveViewType::valueIsValid($oneDriveSearchScopeTypeOneDriveViewItem)) {
                $invalidValues[] = is_object($oneDriveSearchScopeTypeOneDriveViewItem) ? get_class($oneDriveSearchScopeTypeOneDriveViewItem) : sprintf('%s(%s)', gettype($oneDriveSearchScopeTypeOneDriveViewItem), var_export($oneDriveSearchScopeTypeOneDriveViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsOneDriveViewType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsOneDriveViewType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OneDriveView value
     * @uses \EnumType\EwsOneDriveViewType::valueIsValid()
     * @uses \EnumType\EwsOneDriveViewType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $oneDriveView
     * @return \StructType\EwsOneDriveSearchScopeType
     */
    public function setOneDriveView($oneDriveView): self
    {
        // validation for constraint: list
        if ('' !== ($oneDriveViewArrayErrorMessage = self::validateOneDriveViewForArrayConstraintsFromSetOneDriveView(is_string($oneDriveView) ? explode(' ', $oneDriveView) : $oneDriveView))) {
            throw new InvalidArgumentException($oneDriveViewArrayErrorMessage, __LINE__);
        }
        $this->OneDriveView = is_array($oneDriveView) ? implode(' ', $oneDriveView) : $oneDriveView;
        
        return $this;
    }
}
