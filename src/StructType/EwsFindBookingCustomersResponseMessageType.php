<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindBookingCustomersResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindBookingCustomersResponseMessageType extends EwsResponseMessageType
{
    /**
     * The People
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPeopleType|null
     */
    protected ?\ArrayType\EwsArrayOfPeopleType $People = null;
    /**
     * The TotalNumberOfPeopleInView
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalNumberOfPeopleInView = null;
    /**
     * The FirstMatchingRowIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FirstMatchingRowIndex = null;
    /**
     * The FirstLoadedRowIndex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $FirstLoadedRowIndex = null;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $TransactionId = null;
    /**
     * Constructor method for FindBookingCustomersResponseMessageType
     * @uses EwsFindBookingCustomersResponseMessageType::setPeople()
     * @uses EwsFindBookingCustomersResponseMessageType::setTotalNumberOfPeopleInView()
     * @uses EwsFindBookingCustomersResponseMessageType::setFirstMatchingRowIndex()
     * @uses EwsFindBookingCustomersResponseMessageType::setFirstLoadedRowIndex()
     * @uses EwsFindBookingCustomersResponseMessageType::setTransactionId()
     * @param \ArrayType\EwsArrayOfPeopleType $people
     * @param int $totalNumberOfPeopleInView
     * @param int $firstMatchingRowIndex
     * @param int $firstLoadedRowIndex
     * @param string $transactionId
     */
    public function __construct(?\ArrayType\EwsArrayOfPeopleType $people = null, ?int $totalNumberOfPeopleInView = null, ?int $firstMatchingRowIndex = null, ?int $firstLoadedRowIndex = null, ?string $transactionId = null)
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
     * @return \ArrayType\EwsArrayOfPeopleType|null
     */
    public function getPeople(): ?\ArrayType\EwsArrayOfPeopleType
    {
        return $this->People;
    }
    /**
     * Set People value
     * @param \ArrayType\EwsArrayOfPeopleType $people
     * @return \StructType\EwsFindBookingCustomersResponseMessageType
     */
    public function setPeople(?\ArrayType\EwsArrayOfPeopleType $people = null): self
    {
        $this->People = $people;
        
        return $this;
    }
    /**
     * Get TotalNumberOfPeopleInView value
     * @return int|null
     */
    public function getTotalNumberOfPeopleInView(): ?int
    {
        return $this->TotalNumberOfPeopleInView;
    }
    /**
     * Set TotalNumberOfPeopleInView value
     * @param int $totalNumberOfPeopleInView
     * @return \StructType\EwsFindBookingCustomersResponseMessageType
     */
    public function setTotalNumberOfPeopleInView(?int $totalNumberOfPeopleInView = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNumberOfPeopleInView) && !(is_int($totalNumberOfPeopleInView) || ctype_digit($totalNumberOfPeopleInView))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNumberOfPeopleInView, true), gettype($totalNumberOfPeopleInView)), __LINE__);
        }
        $this->TotalNumberOfPeopleInView = $totalNumberOfPeopleInView;
        
        return $this;
    }
    /**
     * Get FirstMatchingRowIndex value
     * @return int|null
     */
    public function getFirstMatchingRowIndex(): ?int
    {
        return $this->FirstMatchingRowIndex;
    }
    /**
     * Set FirstMatchingRowIndex value
     * @param int $firstMatchingRowIndex
     * @return \StructType\EwsFindBookingCustomersResponseMessageType
     */
    public function setFirstMatchingRowIndex(?int $firstMatchingRowIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($firstMatchingRowIndex) && !(is_int($firstMatchingRowIndex) || ctype_digit($firstMatchingRowIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($firstMatchingRowIndex, true), gettype($firstMatchingRowIndex)), __LINE__);
        }
        $this->FirstMatchingRowIndex = $firstMatchingRowIndex;
        
        return $this;
    }
    /**
     * Get FirstLoadedRowIndex value
     * @return int|null
     */
    public function getFirstLoadedRowIndex(): ?int
    {
        return $this->FirstLoadedRowIndex;
    }
    /**
     * Set FirstLoadedRowIndex value
     * @param int $firstLoadedRowIndex
     * @return \StructType\EwsFindBookingCustomersResponseMessageType
     */
    public function setFirstLoadedRowIndex(?int $firstLoadedRowIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($firstLoadedRowIndex) && !(is_int($firstLoadedRowIndex) || ctype_digit($firstLoadedRowIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($firstLoadedRowIndex, true), gettype($firstLoadedRowIndex)), __LINE__);
        }
        $this->FirstLoadedRowIndex = $firstLoadedRowIndex;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \StructType\EwsFindBookingCustomersResponseMessageType
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($transactionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($transactionId, true)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        
        return $this;
    }
}
