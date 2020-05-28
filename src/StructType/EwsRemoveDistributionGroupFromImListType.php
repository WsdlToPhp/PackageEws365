<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $GroupId;
    /**
     * Constructor method for RemoveDistributionGroupFromImListType
     * @uses EwsRemoveDistributionGroupFromImListType::setGroupId()
     * @param \Ews\StructType\EwsItemIdType $groupId
     */
    public function __construct(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this
            ->setGroupId($groupId);
    }
    /**
     * Get GroupId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getGroupId()
    {
        return $this->GroupId;
    }
    /**
     * Set GroupId value
     * @param \Ews\StructType\EwsItemIdType $groupId
     * @return \Ews\StructType\EwsRemoveDistributionGroupFromImListType
     */
    public function setGroupId(\Ews\StructType\EwsItemIdType $groupId = null)
    {
        $this->GroupId = $groupId;
        return $this;
    }
}
