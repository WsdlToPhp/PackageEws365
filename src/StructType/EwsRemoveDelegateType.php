<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveDelegateType extends EwsBaseDelegateType
{
    /**
     * The UserIds
     * @var \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public $UserIds;
    /**
     * Constructor method for RemoveDelegateType
     * @uses EwsRemoveDelegateType::setUserIds()
     * @param \Ews\ArrayType\EwsArrayOfUserIdType $userIds
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this
            ->setUserIds($userIds);
    }
    /**
     * Get UserIds value
     * @return \Ews\ArrayType\EwsArrayOfUserIdType|null
     */
    public function getUserIds()
    {
        return $this->UserIds;
    }
    /**
     * Set UserIds value
     * @param \Ews\ArrayType\EwsArrayOfUserIdType $userIds
     * @return \Ews\StructType\EwsRemoveDelegateType
     */
    public function setUserIds(\Ews\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this->UserIds = $userIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRemoveDelegateType
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
