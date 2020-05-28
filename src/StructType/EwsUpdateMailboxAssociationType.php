<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsMailboxAssociationType
     */
    public $Association;
    /**
     * The Master
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMasterMailboxType
     */
    public $Master;
    /**
     * Constructor method for UpdateMailboxAssociationType
     * @uses EwsUpdateMailboxAssociationType::setAssociation()
     * @uses EwsUpdateMailboxAssociationType::setMaster()
     * @param \Ews\StructType\EwsMailboxAssociationType $association
     * @param \Ews\StructType\EwsMasterMailboxType $master
     */
    public function __construct(\Ews\StructType\EwsMailboxAssociationType $association = null, \Ews\StructType\EwsMasterMailboxType $master = null)
    {
        $this
            ->setAssociation($association)
            ->setMaster($master);
    }
    /**
     * Get Association value
     * @return \Ews\StructType\EwsMailboxAssociationType
     */
    public function getAssociation()
    {
        return $this->Association;
    }
    /**
     * Set Association value
     * @param \Ews\StructType\EwsMailboxAssociationType $association
     * @return \Ews\StructType\EwsUpdateMailboxAssociationType
     */
    public function setAssociation(\Ews\StructType\EwsMailboxAssociationType $association = null)
    {
        $this->Association = $association;
        return $this;
    }
    /**
     * Get Master value
     * @return \Ews\StructType\EwsMasterMailboxType
     */
    public function getMaster()
    {
        return $this->Master;
    }
    /**
     * Set Master value
     * @param \Ews\StructType\EwsMasterMailboxType $master
     * @return \Ews\StructType\EwsUpdateMailboxAssociationType
     */
    public function setMaster(\Ews\StructType\EwsMasterMailboxType $master = null)
    {
        $this->Master = $master;
        return $this;
    }
}
