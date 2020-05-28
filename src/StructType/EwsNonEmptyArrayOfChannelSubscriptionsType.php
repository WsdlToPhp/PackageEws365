<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfChannelSubscriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfChannelSubscriptionsType extends AbstractStructBase
{
    /**
     * The UnifiedGroupUnseenChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType
     */
    public $UnifiedGroupUnseenChangedSubscription;
    /**
     * The UnifiedGroupContentChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType
     */
    public $UnifiedGroupContentChangedSubscription;
    /**
     * The UserMembershipChangedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType
     */
    public $UserMembershipChangedSubscription;
    /**
     * The NewSocialActivityAddedSubscription
     * Meta information extracted from the WSDL
     * - choice: UnifiedGroupUnseenChangedSubscription | UnifiedGroupContentChangedSubscription | UserMembershipChangedSubscription | NewSocialActivityAddedSubscription
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType
     */
    public $NewSocialActivityAddedSubscription;
    /**
     * Constructor method for NonEmptyArrayOfChannelSubscriptionsType
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupUnseenChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupContentChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUserMembershipChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setNewSocialActivityAddedSubscription()
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @param \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @param \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null, \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null, \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null, \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null)
    {
        $this
            ->setUnifiedGroupUnseenChangedSubscription($unifiedGroupUnseenChangedSubscription)
            ->setUnifiedGroupContentChangedSubscription($unifiedGroupContentChangedSubscription)
            ->setUserMembershipChangedSubscription($userMembershipChangedSubscription)
            ->setNewSocialActivityAddedSubscription($newSocialActivityAddedSubscription);
    }
    /**
     * Get UnifiedGroupUnseenChangedSubscription value
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupUnseenChangedSubscription()
    {
        return isset($this->UnifiedGroupUnseenChangedSubscription) ? $this->UnifiedGroupUnseenChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupUnseenChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupUnseenChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupUnseenChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupUnseenChangedSubscription($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupContentChangedSubscription',
            'UserMembershipChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UnifiedGroupUnseenChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupUnseenChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnifiedGroupUnseenChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupUnseenChangedSubscription(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null)
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($unifiedGroupUnseenChangedSubscriptionChoiceErrorMessage = self::validateUnifiedGroupUnseenChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupUnseenChangedSubscription($unifiedGroupUnseenChangedSubscription))) {
            throw new \InvalidArgumentException($unifiedGroupUnseenChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupUnseenChangedSubscription) || (is_array($unifiedGroupUnseenChangedSubscription) && empty($unifiedGroupUnseenChangedSubscription))) {
            unset($this->UnifiedGroupUnseenChangedSubscription);
        } else {
            $this->UnifiedGroupUnseenChangedSubscription = $unifiedGroupUnseenChangedSubscription;
        }
        return $this;
    }
    /**
     * Get UnifiedGroupContentChangedSubscription value
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupContentChangedSubscription()
    {
        return isset($this->UnifiedGroupContentChangedSubscription) ? $this->UnifiedGroupContentChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupContentChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupContentChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupContentChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupContentChangedSubscription($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UserMembershipChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UnifiedGroupContentChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupContentChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnifiedGroupContentChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupContentChangedSubscription(\Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null)
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($unifiedGroupContentChangedSubscriptionChoiceErrorMessage = self::validateUnifiedGroupContentChangedSubscriptionForChoiceConstraintsFromSetUnifiedGroupContentChangedSubscription($unifiedGroupContentChangedSubscription))) {
            throw new \InvalidArgumentException($unifiedGroupContentChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupContentChangedSubscription) || (is_array($unifiedGroupContentChangedSubscription) && empty($unifiedGroupContentChangedSubscription))) {
            unset($this->UnifiedGroupContentChangedSubscription);
        } else {
            $this->UnifiedGroupContentChangedSubscription = $unifiedGroupContentChangedSubscription;
        }
        return $this;
    }
    /**
     * Get UserMembershipChangedSubscription value
     * @return \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType|null
     */
    public function getUserMembershipChangedSubscription()
    {
        return isset($this->UserMembershipChangedSubscription) ? $this->UserMembershipChangedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUserMembershipChangedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserMembershipChangedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUserMembershipChangedSubscriptionForChoiceConstraintsFromSetUserMembershipChangedSubscription($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UnifiedGroupContentChangedSubscription',
            'NewSocialActivityAddedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property UserMembershipChangedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: UserMembershipChangedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UserMembershipChangedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUserMembershipChangedSubscription(\Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null)
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($userMembershipChangedSubscriptionChoiceErrorMessage = self::validateUserMembershipChangedSubscriptionForChoiceConstraintsFromSetUserMembershipChangedSubscription($userMembershipChangedSubscription))) {
            throw new \InvalidArgumentException($userMembershipChangedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($userMembershipChangedSubscription) || (is_array($userMembershipChangedSubscription) && empty($userMembershipChangedSubscription))) {
            unset($this->UserMembershipChangedSubscription);
        } else {
            $this->UserMembershipChangedSubscription = $userMembershipChangedSubscription;
        }
        return $this;
    }
    /**
     * Get NewSocialActivityAddedSubscription value
     * @return \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType|null
     */
    public function getNewSocialActivityAddedSubscription()
    {
        return isset($this->NewSocialActivityAddedSubscription) ? $this->NewSocialActivityAddedSubscription : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNewSocialActivityAddedSubscription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewSocialActivityAddedSubscription method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNewSocialActivityAddedSubscriptionForChoiceConstraintsFromSetNewSocialActivityAddedSubscription($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'UnifiedGroupUnseenChangedSubscription',
            'UnifiedGroupContentChangedSubscription',
            'UserMembershipChangedSubscription',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property NewSocialActivityAddedSubscription can\'t be set as the property %s is already set. Only one property must be set among these properties: NewSocialActivityAddedSubscription, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set NewSocialActivityAddedSubscription value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setNewSocialActivityAddedSubscription(\Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null)
    {
        // validation for constraint: choice(UnifiedGroupUnseenChangedSubscription, UnifiedGroupContentChangedSubscription, UserMembershipChangedSubscription, NewSocialActivityAddedSubscription)
        if ('' !== ($newSocialActivityAddedSubscriptionChoiceErrorMessage = self::validateNewSocialActivityAddedSubscriptionForChoiceConstraintsFromSetNewSocialActivityAddedSubscription($newSocialActivityAddedSubscription))) {
            throw new \InvalidArgumentException($newSocialActivityAddedSubscriptionChoiceErrorMessage, __LINE__);
        }
        if (is_null($newSocialActivityAddedSubscription) || (is_array($newSocialActivityAddedSubscription) && empty($newSocialActivityAddedSubscription))) {
            unset($this->NewSocialActivityAddedSubscription);
        } else {
            $this->NewSocialActivityAddedSubscription = $newSocialActivityAddedSubscription;
        }
        return $this;
    }
}
