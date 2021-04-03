<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfRoleType $UserRoles = null;
    /**
     * The ApplicationRoles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfRoleType $ApplicationRoles = null;
    /**
     * Constructor method for ManagementRoleType
     * @uses EwsManagementRoleType::setUserRoles()
     * @uses EwsManagementRoleType::setApplicationRoles()
     * @param \ArrayType\EwsNonEmptyArrayOfRoleType $userRoles
     * @param \ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles = null, ?\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles = null)
    {
        $this
            ->setUserRoles($userRoles)
            ->setApplicationRoles($applicationRoles);
    }
    /**
     * Get UserRoles value
     * @return \ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    public function getUserRoles(): ?\ArrayType\EwsNonEmptyArrayOfRoleType
    {
        return $this->UserRoles;
    }
    /**
     * Set UserRoles value
     * @param \ArrayType\EwsNonEmptyArrayOfRoleType $userRoles
     * @return \StructType\EwsManagementRoleType
     */
    public function setUserRoles(?\ArrayType\EwsNonEmptyArrayOfRoleType $userRoles = null): self
    {
        $this->UserRoles = $userRoles;
        
        return $this;
    }
    /**
     * Get ApplicationRoles value
     * @return \ArrayType\EwsNonEmptyArrayOfRoleType|null
     */
    public function getApplicationRoles(): ?\ArrayType\EwsNonEmptyArrayOfRoleType
    {
        return $this->ApplicationRoles;
    }
    /**
     * Set ApplicationRoles value
     * @param \ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles
     * @return \StructType\EwsManagementRoleType
     */
    public function setApplicationRoles(?\ArrayType\EwsNonEmptyArrayOfRoleType $applicationRoles = null): self
    {
        $this->ApplicationRoles = $applicationRoles;
        
        return $this;
    }
}
