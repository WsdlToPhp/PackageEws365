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
}
