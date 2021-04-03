<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserUnifiedGroupsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUserUnifiedGroupsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupsSets
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    protected \ArrayType\EwsArrayOfUnifiedGroupsSetsType $GroupsSets;
    /**
     * Constructor method for GetUserUnifiedGroupsResponseMessageType
     * @uses EwsGetUserUnifiedGroupsResponseMessageType::setGroupsSets()
     * @param \ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets
     */
    public function __construct(\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets)
    {
        $this
            ->setGroupsSets($groupsSets);
    }
    /**
     * Get GroupsSets value
     * @return \ArrayType\EwsArrayOfUnifiedGroupsSetsType
     */
    public function getGroupsSets(): \ArrayType\EwsArrayOfUnifiedGroupsSetsType
    {
        return $this->GroupsSets;
    }
    /**
     * Set GroupsSets value
     * @param \ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets
     * @return \StructType\EwsGetUserUnifiedGroupsResponseMessageType
     */
    public function setGroupsSets(\ArrayType\EwsArrayOfUnifiedGroupsSetsType $groupsSets): self
    {
        $this->GroupsSets = $groupsSets;
        
        return $this;
    }
}
