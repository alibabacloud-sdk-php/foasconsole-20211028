<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ConvertInstanceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateInstanceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\CreateNamespaceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteNamespaceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DeleteNamespaceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeNamespacesShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedRegionsResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedZonesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeSupportedZonesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ListTagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ListTagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayInstanceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyPrepayNamespaceSpecShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryConvertInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryCreateInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceShrinkRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryRenewInstancePriceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryRenewInstancePriceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\RenewInstanceRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\RenewInstanceResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\TagResourcesResponse;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\UntagResourcesRequest;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\UntagResourcesResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Foasconsole extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('foasconsole', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary 按量付费转包年包月
     *  *
     * @param ConvertInstanceRequest $tmpReq  ConvertInstanceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return ConvertInstanceResponse ConvertInstanceResponse
     */
    public function convertInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ConvertInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceResourceSpecs)) {
            $request->namespaceResourceSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isAutoRenew)) {
            $body['IsAutoRenew'] = $request->isAutoRenew;
        }
        if (!Utils::isUnset($request->namespaceResourceSpecsShrink)) {
            $body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ConvertInstance',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ConvertInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 按量付费转包年包月
     *  *
     * @param ConvertInstanceRequest $request ConvertInstanceRequest
     *
     * @return ConvertInstanceResponse ConvertInstanceResponse
     */
    public function convertInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->convertInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateInstanceRequest $tmpReq  CreateInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstanceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateInstanceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->storage)) {
            $request->storageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }
        if (!Utils::isUnset($tmpReq->tag)) {
            $request->tagShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tag, 'Tag', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architectureType)) {
            $body['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->monitorType)) {
            $body['MonitorType'] = $request->monitorType;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $body['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $body['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        if (!Utils::isUnset($request->storageShrink)) {
            $body['Storage'] = $request->storageShrink;
        }
        if (!Utils::isUnset($request->tagShrink)) {
            $body['Tag'] = $request->tagShrink;
        }
        if (!Utils::isUnset($request->usePromotionCode)) {
            $body['UsePromotionCode'] = $request->usePromotionCode;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateInstance',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建实例
     *  *
     * @param CreateInstanceRequest $request CreateInstanceRequest
     *
     * @return CreateInstanceResponse CreateInstanceResponse
     */
    public function createInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 创建命名空间
     *  *
     * @param CreateNamespaceRequest $tmpReq  CreateNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespaceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateNamespaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateNamespace',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建命名空间
     *  *
     * @param CreateNamespaceRequest $request CreateNamespaceRequest
     *
     * @return CreateNamespaceResponse CreateNamespaceResponse
     */
    public function createNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary 释放按量付费的实例
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteInstance',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放按量付费的实例
     *  *
     * @param DeleteInstanceRequest $request DeleteInstanceRequest
     *
     * @return DeleteInstanceResponse DeleteInstanceResponse
     */
    public function deleteInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 删除namespace
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespaceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteNamespace',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteNamespaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除namespace
     *  *
     * @param DeleteNamespaceRequest $request DeleteNamespaceRequest
     *
     * @return DeleteNamespaceResponse DeleteNamespaceResponse
     */
    public function deleteNamespace($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteNamespaceWithOptions($request, $runtime);
    }

    /**
     * @summary instance列表
     *  *
     * @param DescribeInstancesRequest $tmpReq  DescribeInstancesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstancesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeInstancesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstances',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstancesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary instance列表
     *  *
     * @param DescribeInstancesRequest $request DescribeInstancesRequest
     *
     * @return DescribeInstancesResponse DescribeInstancesResponse
     */
    public function describeInstances($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstancesWithOptions($request, $runtime);
    }

    /**
     * @summary namespace列表
     *  *
     * @param DescribeNamespacesRequest $tmpReq  DescribeNamespacesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
     */
    public function describeNamespacesWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DescribeNamespacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeNamespaces',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeNamespacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary namespace列表
     *  *
     * @param DescribeNamespacesRequest $request DescribeNamespacesRequest
     *
     * @return DescribeNamespacesResponse DescribeNamespacesResponse
     */
    public function describeNamespaces($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeNamespacesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取支持的region列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportedRegionsResponse DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'DescribeSupportedRegions',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportedRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取支持的region列表
     *  *
     * @return DescribeSupportedRegionsResponse DescribeSupportedRegionsResponse
     */
    public function describeSupportedRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportedRegionsWithOptions($runtime);
    }

    /**
     * @summary 获取支持的zoneId列表
     *  *
     * @param DescribeSupportedZonesRequest $request DescribeSupportedZonesRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSupportedZonesResponse DescribeSupportedZonesResponse
     */
    public function describeSupportedZonesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeSupportedZones',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSupportedZonesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取支持的zoneId列表
     *  *
     * @param DescribeSupportedZonesRequest $request DescribeSupportedZonesRequest
     *
     * @return DescribeSupportedZonesResponse DescribeSupportedZonesResponse
     */
    public function describeSupportedZones($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSupportedZonesWithOptions($request, $runtime);
    }

    /**
     * @summary 列举flinkasi标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTagResources',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListTagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 列举flinkasi标签
     *  *
     * @param ListTagResourcesRequest $request ListTagResourcesRequest
     *
     * @return ListTagResourcesResponse ListTagResourcesResponse
     */
    public function listTagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listTagResourcesWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead
     *  *
     * @summary 扩容/缩容
     *  *
     * Deprecated
     *
     * @param ModifyPrepayInstanceSpecRequest $tmpReq  ModifyPrepayInstanceSpecRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPrepayInstanceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayInstanceSpec',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrepayInstanceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI ModifyPrepayInstanceSpec is deprecated, please use foasconsole::2021-10-28::ModifyInstanceSpec instead
     *  *
     * @summary 扩容/缩容
     *  *
     * Deprecated
     *
     * @param ModifyPrepayInstanceSpecRequest $request ModifyPrepayInstanceSpecRequest
     *
     * @return ModifyPrepayInstanceSpecResponse ModifyPrepayInstanceSpecResponse
     */
    public function modifyPrepayInstanceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayInstanceSpecWithOptions($request, $runtime);
    }

    /**
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead
     *  *
     * @summary 修改namespace资源分配
     *  *
     * Deprecated
     *
     * @param ModifyPrepayNamespaceSpecRequest $tmpReq  ModifyPrepayNamespaceSpecRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyPrepayNamespaceSpecResponse ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpecWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyPrepayNamespaceSpecShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->namespace_)) {
            $body['Namespace'] = $request->namespace_;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyPrepayNamespaceSpec',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyPrepayNamespaceSpecResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @deprecated openAPI ModifyPrepayNamespaceSpec is deprecated, please use foasconsole::2021-10-28::ModifyNamespaceSpec instead
     *  *
     * @summary 修改namespace资源分配
     *  *
     * Deprecated
     *
     * @param ModifyPrepayNamespaceSpecRequest $request ModifyPrepayNamespaceSpecRequest
     *
     * @return ModifyPrepayNamespaceSpecResponse ModifyPrepayNamespaceSpecResponse
     */
    public function modifyPrepayNamespaceSpec($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyPrepayNamespaceSpecWithOptions($request, $runtime);
    }

    /**
     * @summary 按量付费转包年包月询价
     *  *
     * @param QueryConvertInstancePriceRequest $tmpReq  QueryConvertInstancePriceRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryConvertInstancePriceResponse QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryConvertInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->namespaceResourceSpecs)) {
            $request->namespaceResourceSpecsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->namespaceResourceSpecs, 'NamespaceResourceSpecs', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->isAutoRenew)) {
            $body['IsAutoRenew'] = $request->isAutoRenew;
        }
        if (!Utils::isUnset($request->namespaceResourceSpecsShrink)) {
            $body['NamespaceResourceSpecs'] = $request->namespaceResourceSpecsShrink;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConvertInstancePrice',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConvertInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 按量付费转包年包月询价
     *  *
     * @param QueryConvertInstancePriceRequest $request QueryConvertInstancePriceRequest
     *
     * @return QueryConvertInstancePriceResponse QueryConvertInstancePriceResponse
     */
    public function queryConvertInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryConvertInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 获取创建实例的价格
     *  *
     * @param QueryCreateInstancePriceRequest $tmpReq  QueryCreateInstancePriceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryCreateInstancePriceResponse QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCreateInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->storage)) {
            $request->storageShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->storage, 'Storage', 'json');
        }
        if (!Utils::isUnset($tmpReq->vSwitchIds)) {
            $request->vSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitchIds, 'VSwitchIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->architectureType)) {
            $body['ArchitectureType'] = $request->architectureType;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->extra)) {
            $body['Extra'] = $request->extra;
        }
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->instanceName)) {
            $body['InstanceName'] = $request->instanceName;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $body['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        if (!Utils::isUnset($request->storageShrink)) {
            $body['Storage'] = $request->storageShrink;
        }
        if (!Utils::isUnset($request->usePromotionCode)) {
            $body['UsePromotionCode'] = $request->usePromotionCode;
        }
        if (!Utils::isUnset($request->vSwitchIdsShrink)) {
            $body['VSwitchIds'] = $request->vSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->zoneId)) {
            $body['ZoneId'] = $request->zoneId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCreateInstancePrice',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCreateInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取创建实例的价格
     *  *
     * @param QueryCreateInstancePriceRequest $request QueryCreateInstancePriceRequest
     *
     * @return QueryCreateInstancePriceResponse QueryCreateInstancePriceResponse
     */
    public function queryCreateInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryCreateInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询付费类型为包年包月的实例修改资源规格的价格
     *  *
     * @param QueryModifyInstancePriceRequest $tmpReq  QueryModifyInstancePriceRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryModifyInstancePriceResponse QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePriceWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryModifyInstancePriceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->haResourceSpec)) {
            $request->haResourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haResourceSpec, 'HaResourceSpec', 'json');
        }
        if (!Utils::isUnset($tmpReq->haVSwitchIds)) {
            $request->haVSwitchIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->haVSwitchIds, 'HaVSwitchIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->resourceSpec)) {
            $request->resourceSpecShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->resourceSpec, 'ResourceSpec', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->ha)) {
            $body['Ha'] = $request->ha;
        }
        if (!Utils::isUnset($request->haResourceSpecShrink)) {
            $body['HaResourceSpec'] = $request->haResourceSpecShrink;
        }
        if (!Utils::isUnset($request->haVSwitchIdsShrink)) {
            $body['HaVSwitchIds'] = $request->haVSwitchIdsShrink;
        }
        if (!Utils::isUnset($request->haZoneId)) {
            $body['HaZoneId'] = $request->haZoneId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->promotionCode)) {
            $body['PromotionCode'] = $request->promotionCode;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->resourceSpecShrink)) {
            $body['ResourceSpec'] = $request->resourceSpecShrink;
        }
        if (!Utils::isUnset($request->usePromotionCode)) {
            $body['UsePromotionCode'] = $request->usePromotionCode;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryModifyInstancePrice',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryModifyInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询付费类型为包年包月的实例修改资源规格的价格
     *  *
     * @param QueryModifyInstancePriceRequest $request QueryModifyInstancePriceRequest
     *
     * @return QueryModifyInstancePriceResponse QueryModifyInstancePriceResponse
     */
    public function queryModifyInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryModifyInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 查询付费类型为包年包月的实例续费价格
     *  *
     * @param QueryRenewInstancePriceRequest $request QueryRenewInstancePriceRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return QueryRenewInstancePriceResponse QueryRenewInstancePriceResponse
     */
    public function queryRenewInstancePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryRenewInstancePrice',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryRenewInstancePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询付费类型为包年包月的实例续费价格
     *  *
     * @param QueryRenewInstancePriceRequest $request QueryRenewInstancePriceRequest
     *
     * @return QueryRenewInstancePriceResponse QueryRenewInstancePriceResponse
     */
    public function queryRenewInstancePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->queryRenewInstancePriceWithOptions($request, $runtime);
    }

    /**
     * @summary 续费
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->duration)) {
            $body['Duration'] = $request->duration;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pricingCycle)) {
            $body['PricingCycle'] = $request->pricingCycle;
        }
        if (!Utils::isUnset($request->region)) {
            $body['Region'] = $request->region;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RenewInstance',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RenewInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 续费
     *  *
     * @param RenewInstanceRequest $request RenewInstanceRequest
     *
     * @return RenewInstanceResponse RenewInstanceResponse
     */
    public function renewInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->renewInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'TagResources',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return TagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 打标签接口
     *  *
     * @param TagResourcesRequest $request TagResourcesRequest
     *
     * @return TagResourcesResponse TagResourcesResponse
     */
    public function tagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->tagResourcesWithOptions($request, $runtime);
    }

    /**
     * @summary flinkasi去标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResourcesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->all)) {
            $query['All'] = $request->all;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->resourceType)) {
            $query['ResourceType'] = $request->resourceType;
        }
        if (!Utils::isUnset($request->tagKey)) {
            $query['TagKey'] = $request->tagKey;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UntagResources',
            'version'     => '2021-10-28',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UntagResourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary flinkasi去标签
     *  *
     * @param UntagResourcesRequest $request UntagResourcesRequest
     *
     * @return UntagResourcesResponse UntagResourcesResponse
     */
    public function untagResources($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->untagResourcesWithOptions($request, $runtime);
    }
}
