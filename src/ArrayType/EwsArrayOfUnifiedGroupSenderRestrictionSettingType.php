<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting[]
     */
    public $Setting;
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionSettingType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionSettingType::setSetting()
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting[] $setting
     */
    public function __construct(array $setting = array())
    {
        $this
            ->setSetting($setting);
    }
    /**
     * Get Setting value
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting[]
     */
    public function getSetting()
    {
        return $this->Setting;
    }
    /**
     * This method is responsible for validating the values passed to the setSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetting method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSettingForArrayConstraintsFromSetSetting(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem instanceof \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting) {
                $invalidValues[] = is_object($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) ? get_class($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem) : sprintf('%s(%s)', gettype($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem), var_export($arrayOfUnifiedGroupSenderRestrictionSettingTypeSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Setting property can only contain items of type \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Setting value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting[] $setting
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function setSetting(array $setting = array())
    {
        // validation for constraint: array
        if ('' !== ($settingArrayErrorMessage = self::validateSettingForArrayConstraintsFromSetSetting($setting))) {
            throw new \InvalidArgumentException($settingArrayErrorMessage, __LINE__);
        }
        $this->Setting = $setting;
        return $this;
    }
    /**
     * Add item to Setting value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting $item
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function addToSetting(\Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting) {
            throw new \InvalidArgumentException(sprintf('The Setting property can only contain items of type \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Setting[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionSetting
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Setting
     */
    public function getAttributeName()
    {
        return 'Setting';
    }
}
