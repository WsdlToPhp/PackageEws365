<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMailboxAssociationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateMailboxAssociationType extends EwsBaseRequestType
{
    /**
     * The Association
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMailboxAssociationType
     */
    public $Association;
    /**
     * The Master
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMailboxAssociationType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
