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
     * @var array
     */
    public $VotingOptionData;
    /**
     * Constructor method for ArrayOfVotingOptionDataType
     * @uses EwsArrayOfVotingOptionDataType::setVotingOptionData()
     * @param array $votingOptionData
     */
    public function __construct(array $votingOptionData = array())
    {
        $this
            ->setVotingOptionData($votingOptionData);
    }
    /**
     * Get VotingOptionData value
     * @return array
     */
    public function getVotingOptionData()
    {
        return $this->VotingOptionData;
    }
    /**
     * Set VotingOptionData value
     * @param array $votingOptionData
     * @return \Ews\ArrayType\EwsArrayOfVotingOptionDataType
     */
    public function setVotingOptionData(array $votingOptionData = array())
    {
        $this->VotingOptionData = $votingOptionData;
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
