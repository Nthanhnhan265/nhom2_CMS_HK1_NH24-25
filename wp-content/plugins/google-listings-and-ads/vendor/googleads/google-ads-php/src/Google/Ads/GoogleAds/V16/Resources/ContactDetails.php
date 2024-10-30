<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/local_services_lead.proto

namespace Google\Ads\GoogleAds\V16\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Fields containing consumer contact details.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.resources.ContactDetails</code>
 */
class ContactDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Consumer phone number in E164 format.
     *
     * Generated from protobuf field <code>string phone_number = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $phone_number = '';
    /**
     * Output only. Consumer email address.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $email = '';
    /**
     * Output only. Consumer name if consumer provided name from Message or
     * Booking form on google.com
     *
     * Generated from protobuf field <code>string consumer_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $consumer_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phone_number
     *           Output only. Consumer phone number in E164 format.
     *     @type string $email
     *           Output only. Consumer email address.
     *     @type string $consumer_name
     *           Output only. Consumer name if consumer provided name from Message or
     *           Booking form on google.com
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Resources\LocalServicesLead::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Consumer phone number in E164 format.
     *
     * Generated from protobuf field <code>string phone_number = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Output only. Consumer phone number in E164 format.
     *
     * Generated from protobuf field <code>string phone_number = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Output only. Consumer email address.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Output only. Consumer email address.
     *
     * Generated from protobuf field <code>string email = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Output only. Consumer name if consumer provided name from Message or
     * Booking form on google.com
     *
     * Generated from protobuf field <code>string consumer_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getConsumerName()
    {
        return $this->consumer_name;
    }

    /**
     * Output only. Consumer name if consumer provided name from Message or
     * Booking form on google.com
     *
     * Generated from protobuf field <code>string consumer_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_name = $var;

        return $this;
    }

}

