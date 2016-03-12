<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetImListMigrationCompletedType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetImListMigrationCompletedType extends EwsBaseRequestType
{
    /**
     * The ImListMigrationCompleted
     * @var bool
     */
    public $ImListMigrationCompleted;
    /**
     * Constructor method for SetImListMigrationCompletedType
     * @uses EwsSetImListMigrationCompletedType::setImListMigrationCompleted()
     * @param bool $imListMigrationCompleted
     */
    public function __construct($imListMigrationCompleted = null)
    {
        $this
            ->setImListMigrationCompleted($imListMigrationCompleted);
    }
    /**
     * Get ImListMigrationCompleted value
     * @return bool|null
     */
    public function getImListMigrationCompleted()
    {
        return $this->ImListMigrationCompleted;
    }
    /**
     * Set ImListMigrationCompleted value
     * @param bool $imListMigrationCompleted
     * @return \Ews\StructType\EwsSetImListMigrationCompletedType
     */
    public function setImListMigrationCompleted($imListMigrationCompleted = null)
    {
        $this->ImListMigrationCompleted = $imListMigrationCompleted;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetImListMigrationCompletedType
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
