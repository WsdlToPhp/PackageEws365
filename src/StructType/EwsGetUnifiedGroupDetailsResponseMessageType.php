<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupDetailsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupDetailsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUnifiedGroupDetailsType
     */
    protected \StructType\EwsUnifiedGroupDetailsType $GroupDetails;
    /**
     * Constructor method for GetUnifiedGroupDetailsResponseMessageType
     * @uses EwsGetUnifiedGroupDetailsResponseMessageType::setGroupDetails()
     * @param \StructType\EwsUnifiedGroupDetailsType $groupDetails
     */
    public function __construct(\StructType\EwsUnifiedGroupDetailsType $groupDetails)
    {
        $this
            ->setGroupDetails($groupDetails);
    }
    /**
     * Get GroupDetails value
     * @return \StructType\EwsUnifiedGroupDetailsType
     */
    public function getGroupDetails(): \StructType\EwsUnifiedGroupDetailsType
    {
        return $this->GroupDetails;
    }
    /**
     * Set GroupDetails value
     * @param \StructType\EwsUnifiedGroupDetailsType $groupDetails
     * @return \StructType\EwsGetUnifiedGroupDetailsResponseMessageType
     */
    public function setGroupDetails(\StructType\EwsUnifiedGroupDetailsType $groupDetails): self
    {
        $this->GroupDetails = $groupDetails;
        
        return $this;
    }
}
