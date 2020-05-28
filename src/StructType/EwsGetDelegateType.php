<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDelegateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetDelegateType extends EwsBaseDelegateType
{
    /**
     * The IncludePermissions
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $IncludePermissions;
    /**
     * The UserIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUserIdType
     */
    public $UserIds;
    /**
     * Constructor method for GetDelegateType
     * @uses EwsGetDelegateType::setIncludePermissions()
     * @uses EwsGetDelegateType::setUserIds()
     * @param bool $includePermissions
     * @param \Ews\ArrayType\EwsArrayOfUserIdType $userIds
     */
    public function __construct($includePermissions = null, \Ews\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this
            ->setIncludePermissions($includePermissions)
            ->setUserIds($userIds);
    }
    /**
     * Get IncludePermissions value
     * @return bool
     */
    public function getIncludePermissions()
    {
        return $this->IncludePermissions;
    }
    /**
     * Set IncludePermissions value
     * @param bool $includePermissions
     * @return \Ews\StructType\EwsGetDelegateType
     */
    public function setIncludePermissions($includePermissions = null)
    {
        // validation for constraint: boolean
        if (!is_null($includePermissions) && !is_bool($includePermissions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePermissions, true), gettype($includePermissions)), __LINE__);
        }
        $this->IncludePermissions = $includePermissions;
        return $this;
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
     * @return \Ews\StructType\EwsGetDelegateType
     */
    public function setUserIds(\Ews\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this->UserIds = $userIds;
        return $this;
    }
}
