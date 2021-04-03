<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected bool $IncludePermissions;
    /**
     * The UserIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUserIdType|null
     */
    protected ?\ArrayType\EwsArrayOfUserIdType $UserIds = null;
    /**
     * Constructor method for GetDelegateType
     * @uses EwsGetDelegateType::setIncludePermissions()
     * @uses EwsGetDelegateType::setUserIds()
     * @param bool $includePermissions
     * @param \ArrayType\EwsArrayOfUserIdType $userIds
     */
    public function __construct(bool $includePermissions, ?\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this
            ->setIncludePermissions($includePermissions)
            ->setUserIds($userIds);
    }
    /**
     * Get IncludePermissions value
     * @return bool
     */
    public function getIncludePermissions(): bool
    {
        return $this->IncludePermissions;
    }
    /**
     * Set IncludePermissions value
     * @param bool $includePermissions
     * @return \StructType\EwsGetDelegateType
     */
    public function setIncludePermissions(bool $includePermissions): self
    {
        // validation for constraint: boolean
        if (!is_null($includePermissions) && !is_bool($includePermissions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includePermissions, true), gettype($includePermissions)), __LINE__);
        }
        $this->IncludePermissions = $includePermissions;
        
        return $this;
    }
    /**
     * Get UserIds value
     * @return \ArrayType\EwsArrayOfUserIdType|null
     */
    public function getUserIds(): ?\ArrayType\EwsArrayOfUserIdType
    {
        return $this->UserIds;
    }
    /**
     * Set UserIds value
     * @param \ArrayType\EwsArrayOfUserIdType $userIds
     * @return \StructType\EwsGetDelegateType
     */
    public function setUserIds(?\ArrayType\EwsArrayOfUserIdType $userIds = null): self
    {
        $this->UserIds = $userIds;
        
        return $this;
    }
}
