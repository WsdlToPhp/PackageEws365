<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfMailboxQueriesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of query and mailboxes.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfMailboxQueriesType extends AbstractStructArrayBase
{
    /**
     * The MailboxQuery
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsMailboxQueryType[]
     */
    protected array $MailboxQuery = [];
    /**
     * Constructor method for NonEmptyArrayOfMailboxQueriesType
     * @uses EwsNonEmptyArrayOfMailboxQueriesType::setMailboxQuery()
     * @param \StructType\EwsMailboxQueryType[] $mailboxQuery
     */
    public function __construct(array $mailboxQuery)
    {
        $this
            ->setMailboxQuery($mailboxQuery);
    }
    /**
     * Get MailboxQuery value
     * @return \StructType\EwsMailboxQueryType[]
     */
    public function getMailboxQuery(): array
    {
        return $this->MailboxQuery;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxQuery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxQuery method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxQueryForArrayConstraintsFromSetMailboxQuery(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem instanceof \StructType\EwsMailboxQueryType) {
                $invalidValues[] = is_object($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) ? get_class($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem), var_export($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxQuery property can only contain items of type \StructType\EwsMailboxQueryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailboxQuery value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxQueryType[] $mailboxQuery
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function setMailboxQuery(array $mailboxQuery): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxQueryArrayErrorMessage = self::validateMailboxQueryForArrayConstraintsFromSetMailboxQuery($mailboxQuery))) {
            throw new InvalidArgumentException($mailboxQueryArrayErrorMessage, __LINE__);
        }
        $this->MailboxQuery = $mailboxQuery;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMailboxQueryType|null
     */
    public function current(): ?\StructType\EwsMailboxQueryType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMailboxQueryType|null
     */
    public function item($index): ?\StructType\EwsMailboxQueryType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMailboxQueryType|null
     */
    public function first(): ?\StructType\EwsMailboxQueryType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMailboxQueryType|null
     */
    public function last(): ?\StructType\EwsMailboxQueryType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMailboxQueryType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMailboxQueryType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxQueryType $item
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function add(\StructType\EwsMailboxQueryType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxQuery
     */
    public function getAttributeName(): string
    {
        return 'MailboxQuery';
    }
}
