<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnifiedGroupSenderRestrictionSettingType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfUnifiedGroupSenderRestrictionSettingType extends AbstractStructArrayBase
{
    /**
     * The Setting
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $Setting;
    /**
     * Constructor method for ArrayOfUnifiedGroupSenderRestrictionSettingType
     * @uses EwsArrayOfUnifiedGroupSenderRestrictionSettingType::setSetting()
     * @param array $setting
     */
    public function __construct(array $setting = array())
    {
        $this
            ->setSetting($setting);
    }
    /**
     * Get Setting value
     * @return array
     */
    public function getSetting()
    {
        return $this->Setting;
    }
    /**
     * Set Setting value
     * @param array $setting
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
     */
    public function setSetting(array $setting = array())
    {
        $this->Setting = $setting;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupSenderRestrictionSettingType
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
