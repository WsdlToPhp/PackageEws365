<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxStatisticsItemsType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of mailbox statistics item.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfMailboxStatisticsItemsType extends AbstractStructArrayBase
{
    /**
     * The MailboxStat
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Mailbox statistics item.
     * @var array
     */
    public $MailboxStat;
    /**
     * Constructor method for ArrayOfMailboxStatisticsItemsType
     * @uses EwsArrayOfMailboxStatisticsItemsType::setMailboxStat()
     * @param array $mailboxStat
     */
    public function __construct(array $mailboxStat = array())
    {
        $this
            ->setMailboxStat($mailboxStat);
    }
    /**
     * Get MailboxStat value
     * @return array
     */
    public function getMailboxStat()
    {
        return $this->MailboxStat;
    }
    /**
     * Set MailboxStat value
     * @param array $mailboxStat
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function setMailboxStat(array $mailboxStat = array())
    {
        $this->MailboxStat = $mailboxStat;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMailboxStatisticsItemsType
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
