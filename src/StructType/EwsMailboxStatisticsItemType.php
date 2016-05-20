<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxStatisticsItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Mailbox statistics item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxStatisticsItemType extends AbstractStructBase
{
    /**
     * The MailboxId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MailboxId;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The ItemCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ItemCount;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Size;
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
    public function __construct($mailboxId = null, $displayName = null, $itemCount = null, $size = null)
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
    public function getMailboxId()
    {
        return $this->MailboxId;
    }
    /**
     * Set MailboxId value
     * @param string $mailboxId
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setMailboxId($mailboxId = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxId) && !is_string($mailboxId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mailboxId)), __LINE__);
        }
        $this->MailboxId = $mailboxId;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return int
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param int $itemCount
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setItemCount($itemCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemCount) && !is_numeric($itemCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemCount)), __LINE__);
        }
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get Size value
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param int $size
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setSize($size = null)
    {
        // validation for constraint: int
        if (!is_null($size) && !is_numeric($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
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
