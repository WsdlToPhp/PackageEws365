<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSharingInvitation ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSharingInvitation extends AbstractStructArrayBase
{
    /**
     * The SharingInvitation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsSharingInvitation[]
     */
    public $SharingInvitation;
    /**
     * Constructor method for ArrayOfSharingInvitation
     * @uses EwsArrayOfSharingInvitation::setSharingInvitation()
     * @param \Ews\StructType\EwsSharingInvitation[] $sharingInvitation
     */
    public function __construct(array $sharingInvitation = array())
    {
        $this
            ->setSharingInvitation($sharingInvitation);
    }
    /**
     * Get SharingInvitation value
     * @return \Ews\StructType\EwsSharingInvitation[]|null
     */
    public function getSharingInvitation()
    {
        return $this->SharingInvitation;
    }
    /**
     * Set SharingInvitation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSharingInvitation[] $sharingInvitation
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public function setSharingInvitation(array $sharingInvitation = array())
    {
        foreach ($sharingInvitation as $arrayOfSharingInvitationSharingInvitationItem) {
            // validation for constraint: itemType
            if (!$arrayOfSharingInvitationSharingInvitationItem instanceof \Ews\StructType\EwsSharingInvitation) {
                throw new \InvalidArgumentException(sprintf('The SharingInvitation property can only contain items of \Ews\StructType\EwsSharingInvitation, "%s" given', is_object($arrayOfSharingInvitationSharingInvitationItem) ? get_class($arrayOfSharingInvitationSharingInvitationItem) : gettype($arrayOfSharingInvitationSharingInvitationItem)), __LINE__);
            }
        }
        $this->SharingInvitation = $sharingInvitation;
        return $this;
    }
    /**
     * Add item to SharingInvitation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSharingInvitation $item
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public function addToSharingInvitation(\Ews\StructType\EwsSharingInvitation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSharingInvitation) {
            throw new \InvalidArgumentException(sprintf('The SharingInvitation property can only contain items of \Ews\StructType\EwsSharingInvitation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SharingInvitation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSharingInvitation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSharingInvitation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSharingInvitation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSharingInvitation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSharingInvitation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SharingInvitation
     */
    public function getAttributeName()
    {
        return 'SharingInvitation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
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
