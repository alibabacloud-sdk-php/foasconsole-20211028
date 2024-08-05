<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\clusterStage;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances\clusterState\userSlbDto;
use AlibabaCloud\Tea\Model;

class clusterState extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var clusterStage
     */
    public $clusterStage;

    /**
     * @var bool
     */
    public $createTimeout;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;

    /**
     * @var string
     */
    public $url;

    /**
     * @var userSlbDto
     */
    public $userSlbDto;

    /**
     * @var string
     */
    public $vpcCidr;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'clusterStage'  => 'ClusterStage',
        'createTimeout' => 'CreateTimeout',
        'status'        => 'Status',
        'subStatus'     => 'SubStatus',
        'url'           => 'Url',
        'userSlbDto'    => 'UserSlbDto',
        'vpcCidr'       => 'VpcCidr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterStage) {
            $res['ClusterStage'] = null !== $this->clusterStage ? $this->clusterStage->toMap() : null;
        }
        if (null !== $this->createTimeout) {
            $res['CreateTimeout'] = $this->createTimeout;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->userSlbDto) {
            $res['UserSlbDto'] = null !== $this->userSlbDto ? $this->userSlbDto->toMap() : null;
        }
        if (null !== $this->vpcCidr) {
            $res['VpcCidr'] = $this->vpcCidr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterStage'])) {
            $model->clusterStage = clusterStage::fromMap($map['ClusterStage']);
        }
        if (isset($map['CreateTimeout'])) {
            $model->createTimeout = $map['CreateTimeout'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['UserSlbDto'])) {
            $model->userSlbDto = userSlbDto::fromMap($map['UserSlbDto']);
        }
        if (isset($map['VpcCidr'])) {
            $model->vpcCidr = $map['VpcCidr'];
        }

        return $model;
    }
}
