<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindPeopleResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindPeopleResponseMessageType extends EwsResponseMessageType
{
    /**
     * The People
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPeopleType
     */
    public $People;
    /**
     * The TotalNumberOfPeopleInView
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalNumberOfPeopleInView;
    /**
     * The FirstMatchingRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FirstMatchingRowIndex;
    /**
     * The FirstLoadedRowIndex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FirstLoadedRowIndex;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TransactionId;
    /**
     * Constructor method for FindPeopleResponseMessageType
     * @uses EwsFindPeopleResponseMessageType::setPeople()
     * @uses EwsFindPeopleResponseMessageType::setTotalNumberOfPeopleInView()
     * @uses EwsFindPeopleResponseMessageType::setFirstMatchingRowIndex()
     * @uses EwsFindPeopleResponseMessageType::setFirstLoadedRowIndex()
     * @uses EwsFindPeopleResponseMessageType::setTransactionId()
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $people
     * @param int $totalNumberOfPeopleInView
     * @param int $firstMatchingRowIndex
     * @param int $firstLoadedRowIndex
     * @param string $transactionId
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfPeopleType $people = null, $totalNumberOfPeopleInView = null, $firstMatchingRowIndex = null, $firstLoadedRowIndex = null, $transactionId = null)
    {
        $this
            ->setPeople($people)
            ->setTotalNumberOfPeopleInView($totalNumberOfPeopleInView)
            ->setFirstMatchingRowIndex($firstMatchingRowIndex)
            ->setFirstLoadedRowIndex($firstLoadedRowIndex)
            ->setTransactionId($transactionId);
    }
    /**
     * Get People value
     * @return \Ews\ArrayType\EwsArrayOfPeopleType|null
     */
    public function getPeople()
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \Ews\ArrayType\EwsArrayOfPeopleType $people
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setPeople(\Ews\ArrayType\EwsArrayOfPeopleType $people = null)
    {
        $this->People = $people;
        return $this;
    }
    /**
     * Get TotalNumberOfPeopleInView value
     * @return int|null
     */
    public function getTotalNumberOfPeopleInView()
    {
        return $this->TotalNumberOfPeopleInView;
    }
    /**
     * Set TotalNumberOfPeopleInView value
     * @param int $totalNumberOfPeopleInView
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setTotalNumberOfPeopleInView($totalNumberOfPeopleInView = null)
    {
        $this->TotalNumberOfPeopleInView = $totalNumberOfPeopleInView;
        return $this;
    }
    /**
     * Get FirstMatchingRowIndex value
     * @return int|null
     */
    public function getFirstMatchingRowIndex()
    {
        return $this->FirstMatchingRowIndex;
    }
    /**
     * Set FirstMatchingRowIndex value
     * @param int $firstMatchingRowIndex
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setFirstMatchingRowIndex($firstMatchingRowIndex = null)
    {
        $this->FirstMatchingRowIndex = $firstMatchingRowIndex;
        return $this;
    }
    /**
     * Get FirstLoadedRowIndex value
     * @return int|null
     */
    public function getFirstLoadedRowIndex()
    {
        return $this->FirstLoadedRowIndex;
    }
    /**
     * Set FirstLoadedRowIndex value
     * @param int $firstLoadedRowIndex
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setFirstLoadedRowIndex($firstLoadedRowIndex = null)
    {
        $this->FirstLoadedRowIndex = $firstLoadedRowIndex;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
     */
    public function setTransactionId($transactionId = null)
    {
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindPeopleResponseMessageType
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
