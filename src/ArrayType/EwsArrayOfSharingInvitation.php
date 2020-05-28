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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setSharingInvitation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSharingInvitation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSharingInvitationForArrayConstraintsFromSetSharingInvitation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSharingInvitationSharingInvitationItem) {
            // validation for constraint: itemType
            if (!$arrayOfSharingInvitationSharingInvitationItem instanceof \Ews\StructType\EwsSharingInvitation) {
                $invalidValues[] = is_object($arrayOfSharingInvitationSharingInvitationItem) ? get_class($arrayOfSharingInvitationSharingInvitationItem) : sprintf('%s(%s)', gettype($arrayOfSharingInvitationSharingInvitationItem), var_export($arrayOfSharingInvitationSharingInvitationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SharingInvitation property can only contain items of type \Ews\StructType\EwsSharingInvitation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SharingInvitation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSharingInvitation[] $sharingInvitation
     * @return \Ews\ArrayType\EwsArrayOfSharingInvitation
     */
    public function setSharingInvitation(array $sharingInvitation = array())
    {
        // validation for constraint: array
        if ('' !== ($sharingInvitationArrayErrorMessage = self::validateSharingInvitationForArrayConstraintsFromSetSharingInvitation($sharingInvitation))) {
            throw new \InvalidArgumentException($sharingInvitationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The SharingInvitation property can only contain items of type \Ews\StructType\EwsSharingInvitation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
