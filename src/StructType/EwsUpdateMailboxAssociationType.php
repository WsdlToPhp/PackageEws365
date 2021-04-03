<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMailboxAssociationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMailboxAssociationType extends EwsBaseRequestType
{
    /**
     * The Association
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsMailboxAssociationType
     */
    protected \StructType\EwsMailboxAssociationType $Association;
    /**
     * The Master
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsMasterMailboxType
     */
    protected \StructType\EwsMasterMailboxType $Master;
    /**
     * Constructor method for UpdateMailboxAssociationType
     * @uses EwsUpdateMailboxAssociationType::setAssociation()
     * @uses EwsUpdateMailboxAssociationType::setMaster()
     * @param \StructType\EwsMailboxAssociationType $association
     * @param \StructType\EwsMasterMailboxType $master
     */
    public function __construct(\StructType\EwsMailboxAssociationType $association, \StructType\EwsMasterMailboxType $master)
    {
        $this
            ->setAssociation($association)
            ->setMaster($master);
    }
    /**
     * Get Association value
     * @return \StructType\EwsMailboxAssociationType
     */
    public function getAssociation(): \StructType\EwsMailboxAssociationType
    {
        return $this->Association;
    }
    /**
     * Set Association value
     * @param \StructType\EwsMailboxAssociationType $association
     * @return \StructType\EwsUpdateMailboxAssociationType
     */
    public function setAssociation(\StructType\EwsMailboxAssociationType $association): self
    {
        $this->Association = $association;
        
        return $this;
    }
    /**
     * Get Master value
     * @return \StructType\EwsMasterMailboxType
     */
    public function getMaster(): \StructType\EwsMasterMailboxType
    {
        return $this->Master;
    }
    /**
     * Set Master value
     * @param \StructType\EwsMasterMailboxType $master
     * @return \StructType\EwsUpdateMailboxAssociationType
     */
    public function setMaster(\StructType\EwsMasterMailboxType $master): self
    {
        $this->Master = $master;
        
        return $this;
    }
}
