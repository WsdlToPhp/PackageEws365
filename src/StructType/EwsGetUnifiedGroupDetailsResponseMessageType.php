<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public $GroupDetails;
    /**
     * Constructor method for GetUnifiedGroupDetailsResponseMessageType
     * @uses EwsGetUnifiedGroupDetailsResponseMessageType::setGroupDetails()
     * @param \Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails = null)
    {
        $this
            ->setGroupDetails($groupDetails);
    }
    /**
     * Get GroupDetails value
     * @return \Ews\StructType\EwsUnifiedGroupDetailsType
     */
    public function getGroupDetails()
    {
        return $this->GroupDetails;
    }
    /**
     * Set GroupDetails value
     * @param \Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails
     * @return \Ews\StructType\EwsGetUnifiedGroupDetailsResponseMessageType
     */
    public function setGroupDetails(\Ews\StructType\EwsUnifiedGroupDetailsType $groupDetails = null)
    {
        $this->GroupDetails = $groupDetails;
        return $this;
    }
}
