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
 * @release 1.0.0
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
     * @var long
     */
    public $ItemCount;
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var long
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
     * @param long $itemCount
     * @param long $size
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
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get ItemCount value
     * @return long
     */
    public function getItemCount()
    {
        return $this->ItemCount;
    }
    /**
     * Set ItemCount value
     * @param long $itemCount
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setItemCount($itemCount = null)
    {
        $this->ItemCount = $itemCount;
        return $this;
    }
    /**
     * Get Size value
     * @return long
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param long $size
     * @return \Ews\StructType\EwsMailboxStatisticsItemType
     */
    public function setSize($size = null)
    {
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
