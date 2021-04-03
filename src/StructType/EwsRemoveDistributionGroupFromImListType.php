<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDistributionGroupFromImListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRemoveDistributionGroupFromImListType extends EwsBaseRequestType
{
    /**
     * The GroupId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $GroupId = null;
    /**
     * Constructor method for RemoveDistributionGroupFromImListType
     * @uses EwsRemoveDistributionGroupFromImListType::setGroupId()
     * @param \StructType\EwsItemIdType $groupId
     */
    public function __construct(?\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setGroupId($groupId);
    }
    /**
     * Get GroupId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getGroupId(): ?\StructType\EwsItemIdType
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \StructType\EwsItemIdType $groupId
     * @return \StructType\EwsRemoveDistributionGroupFromImListType
     */
    public function setGroupId(?\StructType\EwsItemIdType $groupId = null): self
    {
        $this->GroupId = $groupId;
        
        return $this;
    }
}
