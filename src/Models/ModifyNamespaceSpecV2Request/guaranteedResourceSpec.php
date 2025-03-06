<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request;

use AlibabaCloud\Tea\Model;

class guaranteedResourceSpec extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $cpu;

    /**
     * @description This parameter is required.
     *
     * @example 40
     *
     * @var int
     */
    public $memoryGB;
    protected $_name = [
        'cpu'      => 'Cpu',
        'memoryGB' => 'MemoryGB',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memoryGB) {
            $res['MemoryGB'] = $this->memoryGB;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return guaranteedResourceSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['MemoryGB'])) {
            $model->memoryGB = $map['MemoryGB'];
        }

        return $model;
    }
}
