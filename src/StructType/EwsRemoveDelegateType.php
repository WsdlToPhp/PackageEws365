<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfUserIdType|null
     */
    protected ?\ArrayType\EwsArrayOfUserIdType $UserIds = null;
    /**
     * Constructor method for RemoveDelegateType
     * @uses EwsRemoveDelegateType::setUserIds()
     * @param \ArrayType\EwsArrayOfUserIdType $userIds
     */
    public function __construct(?\ArrayType\EwsArrayOfUserIdType $userIds = null)
    {
        $this
            ->setUserIds($userIds);
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
     * @return \StructType\EwsRemoveDelegateType
     */
    public function setUserIds(?\ArrayType\EwsArrayOfUserIdType $userIds = null): self
    {
        $this->UserIds = $userIds;
        
        return $this;
    }
}
