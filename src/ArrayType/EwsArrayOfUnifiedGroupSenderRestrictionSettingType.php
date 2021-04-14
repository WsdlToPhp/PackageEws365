<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupSenderRestrictionSettingType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUnifiedGroupSenderRestrictionSettingType extends AbstractStructArrayBase
{
    /**
     * The Setting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsUnifiedGroupSenderRestrictionSetting[]
     */
    protected array $Setting = [];
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionSettingType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionSettingType::setSetting()
     * @param \StructType\EwsUnifiedGroupSenderRestrictionSetting[] $setting
     */
    public function __construct(array $setting)
    {
        $this
            ->setSetting($setting);
    }
    /**
     * Get Setting value
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting[]
     */
    public function getSetting(): array
    {
        return $this->Setting;
    }
    /**
     * This method is responsible for validating the values passed to the setSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetting method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSettingForArrayConstraintsFromSetSetting(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem instanceof \StructType\EwsUnifiedGroupSenderRestrictionSetting) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) ? get_class($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem), var_export($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Setting property can only contain items of type \StructType\EwsUnifiedGroupSenderRestrictionSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Setting value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupSenderRestrictionSetting[] $setting
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function setSetting(array $setting): self
    {
        // validation for constraint: array
        if ('' !== ($settingArrayErrorMessage = self::validateSettingForArrayConstraintsFromSetSetting($setting))) {
            throw new InvalidArgumentException($settingArrayErrorMessage, __LINE__);
        }
        $this->Setting = $setting;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting|null
     */
    public function current(): ?\StructType\EwsUnifiedGroupSenderRestrictionSetting
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting|null
     */
    public function item($index): ?\StructType\EwsUnifiedGroupSenderRestrictionSetting
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting|null
     */
    public function first(): ?\StructType\EwsUnifiedGroupSenderRestrictionSetting
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting|null
     */
    public function last(): ?\StructType\EwsUnifiedGroupSenderRestrictionSetting
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUnifiedGroupSenderRestrictionSetting|null
     */
    public function offsetGet($offset): ?\StructType\EwsUnifiedGroupSenderRestrictionSetting
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupSenderRestrictionSetting $item
     * @return \ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUnifiedGroupSenderRestrictionSetting) {
            throw new InvalidArgumentException(sprintf('The Setting property can only contain items of type \StructType\EwsUnifiedGroupSenderRestrictionSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Setting
     */
    public function getAttributeName(): string
    {
        return 'Setting';
    }
}
