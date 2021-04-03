<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    protected \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $GroupIdentities;
    /**
     * Constructor method for GetUnifiedGroupUnseenDataType
     * @uses EwsGetUnifiedGroupUnseenDataType::setGroupIdentities()
     * @param \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     */
    public function __construct(\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities)
    {
        $this
            ->setGroupIdentities($groupIdentities);
    }
    /**
     * Get GroupIdentities value
     * @return \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
     */
    public function getGroupIdentities(): \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType
    {
        return $this->GroupIdentities;
    }
    /**
     * Set GroupIdentities value
     * @param \ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities
     * @return \StructType\EwsGetUnifiedGroupUnseenDataType
     */
    public function setGroupIdentities(\ArrayType\EwsNonEmptyArrayOfUnifiedGroupIdentityType $groupIdentities): self
    {
        $this->GroupIdentities = $groupIdentities;
        
        return $this;
    }
}
