<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxStatisticsItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox statistics item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxStatisticsItemType extends AbstractStructBase
{
    /**
     * The MailboxId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MailboxId;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DisplayName;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ItemCount;
    /**
     * The Size
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Size;
    /**
     * Constructor method for MailboxStatisticsItemType
     * @uses EwsMailboxStatisticsItemType::setMailboxId()
     * @uses EwsMailboxStatisticsItemType::setDisplayName()
     * @uses EwsMailboxStatisticsItemType::setItemCount()
     * @uses EwsMailboxStatisticsItemType::setSize()
     * @param string $mailboxId
     * @param string $displayName
     * @param int $itemCount
     * @param int $size
     */
    public function __construct(string $mailboxId, string $displayName, int $itemCount, int $size)
    {
        $this
            ->setMailboxId($mailboxId)
            ->setDisplayName($displayName)
            ->setItemCount($itemCount)
            ->setSize($size);
    }
    /**
     * Get MailboxId value
     * @return string
     */
    public function getMailboxId(): string
    {
        return $this->MailboxId;
    }
    /**
     * Set MailboxId value
     * @param string $mailboxId
     * @return \StructType\EwsMailboxStatisticsItemType
     */
    public function setMailboxId(string $mailboxId): self
    {
        // validation for constraint: string
        if (!is_null($mailboxId) && !is_string($mailboxId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxId, true), gettype($mailboxId)), __LINE__);
        }
        $this->MailboxId = $mailboxId;
        
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsMailboxStatisticsItemType
     */
    public function setDisplayName(string $displayName): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \StructType\EwsMailboxStatisticsItemType
     */
    public function setItemCount(int $itemCount): self
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !(is_int($itemCount) || ctype_digit($itemCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemCount, true), gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        
        return $this;
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize(): int
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \StructType\EwsMailboxStatisticsItemType
     */
    public function setSize(int $size): self
    {
        // validation for constraint: int
        if (!is_null($size) && !(is_int($size) || ctype_digit($size))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($size, true), gettype($size)), __LINE__);
        }
        $this->Size = $size;
        
        return $this;
    }
}
