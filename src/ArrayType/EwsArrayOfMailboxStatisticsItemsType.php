<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxStatisticsItemsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of mailbox statistics item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxStatisticsItemsType extends AbstractStructArrayBase
{
    /**
     * The MailboxStat
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailboxStatisticsItemType[]
     */
    public $MailboxStat;
    /**
     * Constructor method for ArrayOfMailboxStatisticsItemsType
     * @uses EwsArrayOfMailboxStatisticsItemsType::setMailboxStat()
     * @param \Ews\StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     */
    public function __construct(array $mailboxStat = array())
    {
        $this
            ->setMailboxStat($mailboxStat);
    }
    /**
     * Get MailboxStat value
     * @return \Ews\StructType\EwsMailboxStatisticsItemType[]|null
     */
    public function getMailboxStat()
    {
        return $this->MailboxStat;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxStat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxStat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxStatForArrayConstraintsFromSetMailboxStat(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailboxStatisticsItemsTypeMailboxStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxStatisticsItemsTypeMailboxStatItem instanceof \Ews\StructType\EwsMailboxStatisticsItemType) {
                $invalidValues[] = is_object($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) ? get_class($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) : sprintf('%s(%s)', gettype($arrayOfMailboxStatisticsItemsTypeMailboxStatItem), var_export($arrayOfMailboxStatisticsItemsTypeMailboxStatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxStat property can only contain items of type \Ews\StructType\EwsMailboxStatisticsItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailboxStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function setMailboxStat(array $mailboxStat = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxStatArrayErrorMessage = self::validateMailboxStatForArrayConstraintsFromSetMailboxStat($mailboxStat))) {
            throw new \InvalidArgumentException($mailboxStatArrayErrorMessage, __LINE__);
        }
        $this->MailboxStat = $mailboxStat;
        return $this;
    }
    /**
     * Add item to MailboxStat value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxStatisticsItemType $item
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function addToMailboxStat(\Ews\StructType\EwsMailboxStatisticsItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxStatisticsItemType) {
            throw new \InvalidArgumentException(sprintf('The MailboxStat property can only contain items of type \Ews\StructType\EwsMailboxStatisticsItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MailboxStat[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxStatisticsItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxStat
     */
    public function getAttributeName()
    {
        return 'MailboxStat';
    }
}
