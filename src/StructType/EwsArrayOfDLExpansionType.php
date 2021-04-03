<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfDLExpansionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDLExpansionType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType[]
     */
    protected array $Mailbox = [];
    /**
     * The IndexedPagingOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $IndexedPagingOffset = null;
    /**
     * The NumeratorOffset
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $NumeratorOffset = null;
    /**
     * The AbsoluteDenominator
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $AbsoluteDenominator = null;
    /**
     * The IncludesLastItemInRange
     * Meta information extracted from the WSDL
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IncludesLastItemInRange = null;
    /**
     * The TotalItemsInView
     * Meta information extracted from the WSDL
     * - type: xs:int
     * - use: optional
     * @var int|null
     */
    protected ?int $TotalItemsInView = null;
    /**
     * Constructor method for ArrayOfDLExpansionType
     * @uses EwsArrayOfDLExpansionType::setMailbox()
     * @uses EwsArrayOfDLExpansionType::setIndexedPagingOffset()
     * @uses EwsArrayOfDLExpansionType::setNumeratorOffset()
     * @uses EwsArrayOfDLExpansionType::setAbsoluteDenominator()
     * @uses EwsArrayOfDLExpansionType::setIncludesLastItemInRange()
     * @uses EwsArrayOfDLExpansionType::setTotalItemsInView()
     * @param \StructType\EwsEmailAddressType[] $mailbox
     * @param int $indexedPagingOffset
     * @param int $numeratorOffset
     * @param int $absoluteDenominator
     * @param bool $includesLastItemInRange
     * @param int $totalItemsInView
     */
    public function __construct(array $mailbox = [], ?int $indexedPagingOffset = null, ?int $numeratorOffset = null, ?int $absoluteDenominator = null, ?bool $includesLastItemInRange = null, ?int $totalItemsInView = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setIndexedPagingOffset($indexedPagingOffset)
            ->setNumeratorOffset($numeratorOffset)
            ->setAbsoluteDenominator($absoluteDenominator)
            ->setIncludesLastItemInRange($includesLastItemInRange)
            ->setTotalItemsInView($totalItemsInView);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType[]
     */
    public function getMailbox(): array
    {
        return $this->Mailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxForArrayConstraintsFromSetMailbox(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDLExpansionTypeMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfDLExpansionTypeMailboxItem instanceof \StructType\EwsEmailAddressType) {
                $invalidValues[] = is_object($arrayOfDLExpansionTypeMailboxItem) ? get_class($arrayOfDLExpansionTypeMailboxItem) : sprintf('%s(%s)', gettype($arrayOfDLExpansionTypeMailboxItem), var_export($arrayOfDLExpansionTypeMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Mailbox property can only contain items of type \StructType\EwsEmailAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Mailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType[] $mailbox
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setMailbox(array $mailbox = []): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxArrayErrorMessage = self::validateMailboxForArrayConstraintsFromSetMailbox($mailbox))) {
            throw new InvalidArgumentException($mailboxArrayErrorMessage, __LINE__);
        }
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Add item to Mailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType $item
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function addToMailbox(\StructType\EwsEmailAddressType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsEmailAddressType) {
            throw new InvalidArgumentException(sprintf('The Mailbox property can only contain items of type \StructType\EwsEmailAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Mailbox[] = $item;
        
        return $this;
    }
    /**
     * Get IndexedPagingOffset value
     * @return int|null
     */
    public function getIndexedPagingOffset(): ?int
    {
        return $this->IndexedPagingOffset;
    }
    /**
     * Set IndexedPagingOffset value
     * @param int $indexedPagingOffset
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setIndexedPagingOffset(?int $indexedPagingOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($indexedPagingOffset) && !(is_int($indexedPagingOffset) || ctype_digit($indexedPagingOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($indexedPagingOffset, true), gettype($indexedPagingOffset)), __LINE__);
        }
        $this->IndexedPagingOffset = $indexedPagingOffset;
        
        return $this;
    }
    /**
     * Get NumeratorOffset value
     * @return int|null
     */
    public function getNumeratorOffset(): ?int
    {
        return $this->NumeratorOffset;
    }
    /**
     * Set NumeratorOffset value
     * @param int $numeratorOffset
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setNumeratorOffset(?int $numeratorOffset = null): self
    {
        // validation for constraint: int
        if (!is_null($numeratorOffset) && !(is_int($numeratorOffset) || ctype_digit($numeratorOffset))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeratorOffset, true), gettype($numeratorOffset)), __LINE__);
        }
        $this->NumeratorOffset = $numeratorOffset;
        
        return $this;
    }
    /**
     * Get AbsoluteDenominator value
     * @return int|null
     */
    public function getAbsoluteDenominator(): ?int
    {
        return $this->AbsoluteDenominator;
    }
    /**
     * Set AbsoluteDenominator value
     * @param int $absoluteDenominator
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setAbsoluteDenominator(?int $absoluteDenominator = null): self
    {
        // validation for constraint: int
        if (!is_null($absoluteDenominator) && !(is_int($absoluteDenominator) || ctype_digit($absoluteDenominator))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($absoluteDenominator, true), gettype($absoluteDenominator)), __LINE__);
        }
        $this->AbsoluteDenominator = $absoluteDenominator;
        
        return $this;
    }
    /**
     * Get IncludesLastItemInRange value
     * @return bool|null
     */
    public function getIncludesLastItemInRange(): ?bool
    {
        return $this->IncludesLastItemInRange;
    }
    /**
     * Set IncludesLastItemInRange value
     * @param bool $includesLastItemInRange
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setIncludesLastItemInRange(?bool $includesLastItemInRange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includesLastItemInRange) && !is_bool($includesLastItemInRange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includesLastItemInRange, true), gettype($includesLastItemInRange)), __LINE__);
        }
        $this->IncludesLastItemInRange = $includesLastItemInRange;
        
        return $this;
    }
    /**
     * Get TotalItemsInView value
     * @return int|null
     */
    public function getTotalItemsInView(): ?int
    {
        return $this->TotalItemsInView;
    }
    /**
     * Set TotalItemsInView value
     * @param int $totalItemsInView
     * @return \StructType\EwsArrayOfDLExpansionType
     */
    public function setTotalItemsInView(?int $totalItemsInView = null): self
    {
        // validation for constraint: int
        if (!is_null($totalItemsInView) && !(is_int($totalItemsInView) || ctype_digit($totalItemsInView))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalItemsInView, true), gettype($totalItemsInView)), __LINE__);
        }
        $this->TotalItemsInView = $totalItemsInView;
        
        return $this;
    }
}
