<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManagementRoleType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsManagementRoleType extends AbstractStructBase
{
    /**
     * The UserRoles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public $UserRoles;
    /**
     * The ApplicationRoles
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public $ApplicationRoles;
    /**
     * Constructor method for ManagementRoleType
     * @uses EwsManagementRoleType::setUserRoles()
     * @uses EwsManagementRoleType::setApplicationRoles()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles = null, \Ews\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles = null)
    {
        $this
            ->setUserRoles($userRoles)
            ->setApplicationRoles($applicationRoles);
    }
    /**
     * Get UserRoles value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    public function getUserRoles()
    {
        return $this->UserRoles;
    }
    /**
     * Set UserRoles value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles
     * @return \Ews\StructType\EwsManagementRoleType
     */
    public function setUserRoles(\Ews\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles = null)
    {
        $this->UserRoles = $userRoles;
        return $this;
    }
    /**
     * Get ApplicationRoles value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    public function getApplicationRoles()
    {
        return $this->ApplicationRoles;
    }
    /**
     * Set ApplicationRoles value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles
     * @return \Ews\StructType\EwsManagementRoleType
     */
    public function setApplicationRoles(\Ews\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles = null)
    {
        $this->ApplicationRoles = $applicationRoles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsManagementRoleType
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
