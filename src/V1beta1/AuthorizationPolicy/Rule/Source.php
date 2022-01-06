<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy\Rule;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specification of traffic source attributes.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.AuthorizationPolicy.Rule.Source</code>
 */
class Source extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of peer identities to match for authorization. At least one
     * principal should match. Each peer can be an exact match, or a prefix
     * match (example, "namespace/&#42;") or a suffix match (example, //
     * *&#47;service-account") or a presence match "*". Authorization based on the
     * principal name without certificate validation (configured by
     * ServerTlsPolicy resource) is considered insecure.
     *
     * Generated from protobuf field <code>repeated string principals = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $principals;
    /**
     * Optional. List of CIDR ranges to match based on source IP address. At least one
     * IP block should match. Single IP (e.g., "1.2.3.4") and CIDR (e.g.,
     * "1.2.3.0/24") are supported. Authorization based on source IP alone
     * should be avoided. The IP addresses of any load balancers or proxies
     * should be considered untrusted.
     *
     * Generated from protobuf field <code>repeated string ip_blocks = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $ip_blocks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $principals
     *           Optional. List of peer identities to match for authorization. At least one
     *           principal should match. Each peer can be an exact match, or a prefix
     *           match (example, "namespace/&#42;") or a suffix match (example, //
     *           *&#47;service-account") or a presence match "*". Authorization based on the
     *           principal name without certificate validation (configured by
     *           ServerTlsPolicy resource) is considered insecure.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ip_blocks
     *           Optional. List of CIDR ranges to match based on source IP address. At least one
     *           IP block should match. Single IP (e.g., "1.2.3.4") and CIDR (e.g.,
     *           "1.2.3.0/24") are supported. Authorization based on source IP alone
     *           should be avoided. The IP addresses of any load balancers or proxies
     *           should be considered untrusted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. List of peer identities to match for authorization. At least one
     * principal should match. Each peer can be an exact match, or a prefix
     * match (example, "namespace/&#42;") or a suffix match (example, //
     * *&#47;service-account") or a presence match "*". Authorization based on the
     * principal name without certificate validation (configured by
     * ServerTlsPolicy resource) is considered insecure.
     *
     * Generated from protobuf field <code>repeated string principals = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPrincipals()
    {
        return $this->principals;
    }

    /**
     * Optional. List of peer identities to match for authorization. At least one
     * principal should match. Each peer can be an exact match, or a prefix
     * match (example, "namespace/&#42;") or a suffix match (example, //
     * *&#47;service-account") or a presence match "*". Authorization based on the
     * principal name without certificate validation (configured by
     * ServerTlsPolicy resource) is considered insecure.
     *
     * Generated from protobuf field <code>repeated string principals = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPrincipals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->principals = $arr;

        return $this;
    }

    /**
     * Optional. List of CIDR ranges to match based on source IP address. At least one
     * IP block should match. Single IP (e.g., "1.2.3.4") and CIDR (e.g.,
     * "1.2.3.0/24") are supported. Authorization based on source IP alone
     * should be avoided. The IP addresses of any load balancers or proxies
     * should be considered untrusted.
     *
     * Generated from protobuf field <code>repeated string ip_blocks = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpBlocks()
    {
        return $this->ip_blocks;
    }

    /**
     * Optional. List of CIDR ranges to match based on source IP address. At least one
     * IP block should match. Single IP (e.g., "1.2.3.4") and CIDR (e.g.,
     * "1.2.3.0/24") are supported. Authorization based on source IP alone
     * should be avoided. The IP addresses of any load balancers or proxies
     * should be considered untrusted.
     *
     * Generated from protobuf field <code>repeated string ip_blocks = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpBlocks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ip_blocks = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Source::class, \Google\Cloud\NetworkSecurity\V1beta1\AuthorizationPolicy_Rule_Source::class);

