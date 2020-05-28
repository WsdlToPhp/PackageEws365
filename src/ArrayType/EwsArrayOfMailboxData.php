<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxData ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxData extends AbstractStructArrayBase
{
    /**
     * The MailboxData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Ews\StructType\EwsMailboxData[]
     */
    public $MailboxData;
    /**
     * Constructor method for ArrayOfMailboxData
     * @uses EwsArrayOfMailboxData::setMailboxData()
     * @param \Ews\StructType\EwsMailboxData[] $mailboxData
     */
    public function __construct(array $mailboxData = array())
    {
        $this
            ->setMailboxData($mailboxData);
    }
    /**
     * Get MailboxData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Ews\StructType\EwsMailboxData[]|null
     */
    public function getMailboxData()
    {
        return isset($this->MailboxData) ? $this->MailboxData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxDataForArrayConstraintsFromSetMailboxData(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailboxDataMailboxDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxDataMailboxDataItem instanceof \Ews\StructType\EwsMailboxData) {
                $invalidValues[] = is_object($arrayOfMailboxDataMailboxDataItem) ? get_class($arrayOfMailboxDataMailboxDataItem) : sprintf('%s(%s)', gettype($arrayOfMailboxDataMailboxDataItem), var_export($arrayOfMailboxDataMailboxDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxData property can only contain items of type \Ews\StructType\EwsMailboxData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailboxData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxData[] $mailboxData
     * @return \Ews\ArrayType\EwsArrayOfMailboxData
     */
    public function setMailboxData(array $mailboxData = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxDataArrayErrorMessage = self::validateMailboxDataForArrayConstraintsFromSetMailboxData($mailboxData))) {
            throw new \InvalidArgumentException($mailboxDataArrayErrorMessage, __LINE__);
        }
        if (is_null($mailboxData) || (is_array($mailboxData) && empty($mailboxData))) {
            unset($this->MailboxData);
        } else {
            $this->MailboxData = $mailboxData;
        }
        return $this;
    }
    /**
     * Add item to MailboxData value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxData $item
     * @return \Ews\ArrayType\EwsArrayOfMailboxData
     */
    public function addToMailboxData(\Ews\StructType\EwsMailboxData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxData) {
            throw new \InvalidArgumentException(sprintf('The MailboxData property can only contain items of type \Ews\StructType\EwsMailboxData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MailboxData[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxData|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxData|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxData|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxData|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxData|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxData
     */
    public function getAttributeName()
    {
        return 'MailboxData';
    }
}
