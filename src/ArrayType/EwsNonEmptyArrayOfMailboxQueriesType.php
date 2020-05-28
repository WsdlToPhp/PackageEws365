<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsMailboxQueryType[]
     */
    public $MailboxQuery;
    /**
     * Constructor method for NonEmptyArrayOfMailboxQueriesType
     * @uses EwsNonEmptyArrayOfMailboxQueriesType::setMailboxQuery()
     * @param \Ews\StructType\EwsMailboxQueryType[] $mailboxQuery
     */
    public function __construct(array $mailboxQuery = array())
    {
        $this
            ->setMailboxQuery($mailboxQuery);
    }
    /**
     * Get MailboxQuery value
     * @return \Ews\StructType\EwsMailboxQueryType[]
     */
    public function getMailboxQuery()
    {
        return $this->MailboxQuery;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxQuery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxQuery method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxQueryForArrayConstraintsFromSetMailboxQuery(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem instanceof \Ews\StructType\EwsMailboxQueryType) {
                $invalidValues[] = is_object($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) ? get_class($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem), var_export($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxQuery property can only contain items of type \Ews\StructType\EwsMailboxQueryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailboxQuery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxQueryType[] $mailboxQuery
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function setMailboxQuery(array $mailboxQuery = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxQueryArrayErrorMessage = self::validateMailboxQueryForArrayConstraintsFromSetMailboxQuery($mailboxQuery))) {
            throw new \InvalidArgumentException($mailboxQueryArrayErrorMessage, __LINE__);
        }
        $this->MailboxQuery = $mailboxQuery;
        return $this;
    }
    /**
     * Add item to MailboxQuery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxQueryType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function addToMailboxQuery(\Ews\StructType\EwsMailboxQueryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxQueryType) {
            throw new \InvalidArgumentException(sprintf('The MailboxQuery property can only contain items of type \Ews\StructType\EwsMailboxQueryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MailboxQuery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxQuery
     */
    public function getAttributeName()
    {
        return 'MailboxQuery';
    }
}
