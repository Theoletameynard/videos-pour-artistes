<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message to list related account groups.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.ListRelatedAccountGroupsRequest</code>
 */
class ListRelatedAccountGroupsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project to list related account groups from, in
     * the format `projects/{project}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListRelatedAccountGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListRelatedAccountGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. The name of the project to list related account groups from, in
     *                       the format `projects/{project}`. Please see
     *                       {@see RecaptchaEnterpriseServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\RecaptchaEnterprise\V1\ListRelatedAccountGroupsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the project to list related account groups from, in
     *           the format `projects/{project}`.
     *     @type int $page_size
     *           Optional. The maximum number of groups to return. The service might return
     *           fewer than this value. If unspecified, at most 50 groups are returned. The
     *           maximum value is 1000; values above 1000 are coerced to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListRelatedAccountGroups`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListRelatedAccountGroups` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project to list related account groups from, in
     * the format `projects/{project}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the project to list related account groups from, in
     * the format `projects/{project}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of groups to return. The service might return
     * fewer than this value. If unspecified, at most 50 groups are returned. The
     * maximum value is 1000; values above 1000 are coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListRelatedAccountGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListRelatedAccountGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListRelatedAccountGroups`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListRelatedAccountGroups` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

