<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecRequest\resourceSpec;
use AlibabaCloud\Tea\Model;

class ModifyPrepayNamespaceSpecRequest extends Model
{
    /**
     * @example f-cn-wwo36qj4g06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example di-593440219799842
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'namespace'    => 'Namespace',
        'region'       => 'Region',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrepayNamespaceSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}
