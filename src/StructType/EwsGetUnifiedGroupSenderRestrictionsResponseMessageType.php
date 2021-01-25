<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnifiedGroupSenderRestrictionsResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUnifiedGroupSenderRestrictionsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public $GroupIdentity;
    /**
     * The SenderRestrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1 | 0
     * @var \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public $SenderRestrictions;
    /**
     * Constructor method for GetUnifiedGroupSenderRestrictionsResponseMessageType
     * @uses EwsGetUnifiedGroupSenderRestrictionsResponseMessageType::setGroupIdentity()
     * @uses EwsGetUnifiedGroupSenderRestrictionsResponseMessageType::setSenderRestrictions()
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null, \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions = null)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setSenderRestrictions($senderRestrictions);
    }
    /**
     * Get GroupIdentity value
     * @return \Ews\StructType\EwsUnifiedGroupIdentity
     */
    public function getGroupIdentity()
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \Ews\StructType\EwsGetUnifiedGroupSenderRestrictionsResponseMessageType
     */
    public function setGroupIdentity(\Ews\StructType\EwsUnifiedGroupIdentity $groupIdentity = null)
    {
        $this->GroupIdentity = $groupIdentity;
        return $this;
    }
    /**
     * Get SenderRestrictions value
     * @return \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function getSenderRestrictions()
    {
        return $this->SenderRestrictions;
    }
    /**
     * Set SenderRestrictions value
     * @param \Ews\StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions
     * @return \Ews\StructType\EwsGetUnifiedGroupSenderRestrictionsResponseMessageType
     */
    public function setSenderRestrictions(\Ews\StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions = null)
    {
        $this->SenderRestrictions = $senderRestrictions;
        return $this;
    }
}
