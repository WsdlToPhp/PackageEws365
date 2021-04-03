<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsMailboxStatisticsItemType[]
     */
    protected array $MailboxStat = [];
    /**
     * Constructor method for ArrayOfMailboxStatisticsItemsType
     * @uses EwsArrayOfMailboxStatisticsItemsType::setMailboxStat()
     * @param \StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     */
    public function __construct(array $mailboxStat = [])
    {
        $this
            ->setMailboxStat($mailboxStat);
    }
    /**
     * Get MailboxStat value
     * @return \StructType\EwsMailboxStatisticsItemType[]
     */
    public function getMailboxStat(): array
    {
        return $this->MailboxStat;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxStat method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxStat method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxStatForArrayConstraintsFromSetMailboxStat(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailboxStatisticsItemsTypeMailboxStatItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxStatisticsItemsTypeMailboxStatItem instanceof \StructType\EwsMailboxStatisticsItemType) {
                $invalidValues[] = is_object($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) ? get_class($arrayOfMailboxStatisticsItemsTypeMailboxStatItem) : sprintf('%s(%s)', gettype($arrayOfMailboxStatisticsItemsTypeMailboxStatItem), var_export($arrayOfMailboxStatisticsItemsTypeMailboxStatItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxStat property can only contain items of type \StructType\EwsMailboxStatisticsItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailboxStat value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxStatisticsItemType[] $mailboxStat
     * @return \ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function setMailboxStat(array $mailboxStat = []): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxStatArrayErrorMessage = self::validateMailboxStatForArrayConstraintsFromSetMailboxStat($mailboxStat))) {
            throw new InvalidArgumentException($mailboxStatArrayErrorMessage, __LINE__);
        }
        $this->MailboxStat = $mailboxStat;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMailboxStatisticsItemType|null
     */
    public function current(): ?\StructType\EwsMailboxStatisticsItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMailboxStatisticsItemType|null
     */
    public function item($index): ?\StructType\EwsMailboxStatisticsItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMailboxStatisticsItemType|null
     */
    public function first(): ?\StructType\EwsMailboxStatisticsItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMailboxStatisticsItemType|null
     */
    public function last(): ?\StructType\EwsMailboxStatisticsItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMailboxStatisticsItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMailboxStatisticsItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxStatisticsItemType $item
     * @return \ArrayType\EwsArrayOfMailboxStatisticsItemsType
     */
    public function add(\StructType\EwsMailboxStatisticsItemType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxStat
     */
    public function getAttributeName(): string
    {
        return 'MailboxStat';
    }
}
