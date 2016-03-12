<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVotingOptionDataType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfVotingOptionDataType extends AbstractStructArrayBase
{
    /**
     * The VotingOptionData
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsVotingOptionDataType[]
     */
    public $VotingOptionData;
    /**
     * Constructor method for ArrayOfVotingOptionDataType
     * @uses EwsArrayOfVotingOptionDataType::setVotingOptionData()
     * @param \Ews\StructType\EwsVotingOptionDataType[] $votingOptionData
     */
    public function __construct(array $votingOptionData = array())
    {
        $this
            ->setVotingOptionData($votingOptionData);
    }
    /**
     * Get VotingOptionData value
     * @return \Ews\StructType\EwsVotingOptionDataType[]|null
     */
    public function getVotingOptionData()
    {
        return $this->VotingOptionData;
    }
    /**
     * Set VotingOptionData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsVotingOptionDataType[] $votingOptionData
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function setVotingOptionData(array $votingOptionData = array())
    {
        foreach ($votingOptionData as $arrayOfVotingOptionDataTypeVotingOptionDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfVotingOptionDataTypeVotingOptionDataItem instanceof \Ews\StructType\EwsVotingOptionDataType) {
                throw new \InvalidArgumentException(sprintf('The VotingOptionData property can only contain items of \Ews\StructType\EwsVotingOptionDataType, "%s" given', is_object($arrayOfVotingOptionDataTypeVotingOptionDataItem) ? get_class($arrayOfVotingOptionDataTypeVotingOptionDataItem) : gettype($arrayOfVotingOptionDataTypeVotingOptionDataItem)), __LINE__);
            }
        }
        $this->VotingOptionData = $votingOptionData;
        return $this;
    }
    /**
     * Add item to VotingOptionData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsVotingOptionDataType $item
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function addToVotingOptionData(\Ews\StructType\EwsVotingOptionDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsVotingOptionDataType) {
            throw new \InvalidArgumentException(sprintf('The VotingOptionData property can only contain items of \Ews\StructType\EwsVotingOptionDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VotingOptionData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsVotingOptionDataType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VotingOptionData
     */
    public function getAttributeName()
    {
        return 'VotingOptionData';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
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
