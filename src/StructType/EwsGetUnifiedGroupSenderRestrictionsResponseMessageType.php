<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsUnifiedGroupIdentity
     */
    protected \StructType\EwsUnifiedGroupIdentity $GroupIdentity;
    /**
     * The SenderRestrictions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1 | 0
     * @var \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    protected \StructType\EwsUnifiedGroupSenderRestrictionsType $SenderRestrictions;
    /**
     * Constructor method for GetUnifiedGroupSenderRestrictionsResponseMessageType
     * @uses EwsGetUnifiedGroupSenderRestrictionsResponseMessageType::setGroupIdentity()
     * @uses EwsGetUnifiedGroupSenderRestrictionsResponseMessageType::setSenderRestrictions()
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param \StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions
     */
    public function __construct(\StructType\EwsUnifiedGroupIdentity $groupIdentity, \StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setSenderRestrictions($senderRestrictions);
    }
    /**
     * Get GroupIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity
     */
    public function getGroupIdentity(): \StructType\EwsUnifiedGroupIdentity
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \StructType\EwsGetUnifiedGroupSenderRestrictionsResponseMessageType
     */
    public function setGroupIdentity(\StructType\EwsUnifiedGroupIdentity $groupIdentity): self
    {
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
    /**
     * Get SenderRestrictions value
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsType
     */
    public function getSenderRestrictions(): \StructType\EwsUnifiedGroupSenderRestrictionsType
    {
        return $this->SenderRestrictions;
    }
    /**
     * Set SenderRestrictions value
     * @param \StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions
     * @return \StructType\EwsGetUnifiedGroupSenderRestrictionsResponseMessageType
     */
    public function setSenderRestrictions(\StructType\EwsUnifiedGroupSenderRestrictionsType $senderRestrictions): self
    {
        $this->SenderRestrictions = $senderRestrictions;
        
        return $this;
    }
}
