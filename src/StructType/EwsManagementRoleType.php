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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfRoleType
     */
    public $UserRoles;
    /**
     * The ApplicationRoles
     * Meta information extracted from the WSDL
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
}
