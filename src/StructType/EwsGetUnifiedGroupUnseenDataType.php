<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupUnseenDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupUnseenDataType extends EwsBaseRequestType
{
    /**
     * The GroupIdentities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public $GroupIdentities;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataType
     * @uses EwsGetUnifiedGroupUnseenDataType::setGroupIdentities()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities = null)
    {
        $this
            ->setGroupIdentities($groupIdentities);
    }
    /**
     * Get GroupIdentities value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function getGroupIdentities()
    {
        return $this->GroupIdentities;
    }
    /**
     * Set GroupIdentities value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     * @return \Ews\StructType\EwsGetUnifiedGroupUnseenDataType
     */
    public function setGroupIdentities(\Ews\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities = null)
    {
        $this->GroupIdentities = $groupIdentities;
        return $this;
    }
}
