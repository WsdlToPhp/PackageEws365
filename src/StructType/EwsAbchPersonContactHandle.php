<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchPersonContactHandle StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchPersonContactHandle extends AbstractStructBase
{
    /**
     * The SourceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SourceId;
    /**
     * The ObjectId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ObjectId;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * Constructor method for AbchPersonContactHandle
     * @uses EwsAbchPersonContactHandle::setSourceId()
     * @uses EwsAbchPersonContactHandle::setObjectId()
     * @uses EwsAbchPersonContactHandle::setAccountName()
     * @param string $sourceId
     * @param string $objectId
     * @param string $accountName
     */
    public function __construct($sourceId = null, $objectId = null, $accountName = null)
    {
        $this
            ->setSourceId($sourceId)
            ->setObjectId($objectId)
            ->setAccountName($accountName);
    }
    /**
     * Get SourceId value
     * @return string
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param string $sourceId
     * @return \Ews\StructType\EwsAbchPersonContactHandle
     */
    public function setSourceId($sourceId = null)
    {
        // validation for constraint: string
        if (!is_null($sourceId) && !is_string($sourceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceId)), __LINE__);
        }
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get ObjectId value
     * @return string
     */
    public function getObjectId()
    {
        return $this->ObjectId;
    }
    /**
     * Set ObjectId value
     * @param string $objectId
     * @return \Ews\StructType\EwsAbchPersonContactHandle
     */
    public function setObjectId($objectId = null)
    {
        // validation for constraint: string
        if (!is_null($objectId) && !is_string($objectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectId)), __LINE__);
        }
        $this->ObjectId = $objectId;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Ews\StructType\EwsAbchPersonContactHandle
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbchPersonContactHandle
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
