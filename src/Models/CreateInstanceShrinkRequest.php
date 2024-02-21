<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @example PRE
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example rtc-e2e-test-pre
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example 500043499350689
     *
     * @var string
     */
    public $promotionCode;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resourceSpecShrink;

    /**
     * @var string
     */
    public $storageShrink;

    /**
     * @var string
     */
    public $vSwitchIdsShrink;

    /**
     * @example vpc-2ze9xoh8qyt1rnxfmfcdi
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-beijing-g
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoRenew'          => 'AutoRenew',
        'chargeType'         => 'ChargeType',
        'duration'           => 'Duration',
        'instanceName'       => 'InstanceName',
        'pricingCycle'       => 'PricingCycle',
        'promotionCode'      => 'PromotionCode',
        'region'             => 'Region',
        'resourceSpecShrink' => 'ResourceSpec',
        'storageShrink'      => 'Storage',
        'vSwitchIdsShrink'   => 'VSwitchIds',
        'vpcId'              => 'VpcId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
        }
        if (null !== $this->storageShrink) {
            $res['Storage'] = $this->storageShrink;
        }
        if (null !== $this->vSwitchIdsShrink) {
            $res['VSwitchIds'] = $this->vSwitchIdsShrink;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }
        if (isset($map['Storage'])) {
            $model->storageShrink = $map['Storage'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIdsShrink = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
