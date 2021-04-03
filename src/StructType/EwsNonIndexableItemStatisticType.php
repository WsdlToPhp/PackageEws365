<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonIndexableItemStatisticType StructType
 * Meta information extracted from the WSDL
 * - documentation: Non indexable item statistic.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonIndexableItemStatisticType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Mailbox;
    /**
     * The ItemCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ItemCount;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ErrorMessage = null;
    /**
     * Constructor method for NonIndexableItemStatisticType
     * @uses EwsNonIndexableItemStatisticType::setMailbox()
     * @uses EwsNonIndexableItemStatisticType::setItemCount()
     * @uses EwsNonIndexableItemStatisticType::setErrorMessage()
     * @param string $mailbox
     * @param int $itemCount
     * @param string $errorMessage
     */
    public function __construct(string $mailbox, int $itemCount, ?string $errorMessage = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setItemCount($itemCount)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox(): string
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \StructType\EwsNonIndexableItemStatisticType
     */
    public function setMailbox(string $mailbox): self
    {
        // validation for constraint: string
        if (!is_null($mailbox) && !is_string($mailbox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailbox, true), gettype($mailbox)), __LINE__);
        }
        $this->Mailbox = $mailbox;
        
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
     * @return \StructType\EwsNonIndexableItemStatisticType
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
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \StructType\EwsNonIndexableItemStatisticType
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
}
