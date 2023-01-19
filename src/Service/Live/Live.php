<?php
# Code generated by protoc-gen-volcengine-sdk
# source: Live
# DO NOT EDIT!

namespace Volc\Service\Live;
use Volc\Base\V4Curl;
use Volc\Service\Live\Models\Request\CreateDomainRequest;
use Volc\Service\Live\Models\Request\CreateVQScoreTaskRequest;
use Volc\Service\Live\Models\Request\DescribeClosedStreamInfoByPageRequest;
use Volc\Service\Live\Models\Request\DescribeLiveStreamStateRequest;
use Volc\Service\Live\Models\Response\CreateDomainResponse;
use Volc\Service\Live\Models\Request\ListDomainDetailRequest;
use Volc\Service\Live\Models\Response\DescribeCDNSnapshotHistoryResponse;
use Volc\Service\Live\Models\Response\DescribeClosedStreamInfoByPageResponse;
use Volc\Service\Live\Models\Response\DescribeDenyConfigResponse;
use Volc\Service\Live\Models\Response\DescribeLiveStreamStateResponse;
use Volc\Service\Live\Models\Response\ListDomainDetailResponse;
use Volc\Service\Live\Models\Request\DisableDomainRequest;
use Volc\Service\Live\Models\Response\DisableDomainResponse;
use Volc\Service\Live\Models\Request\EnableDomainRequest;
use Volc\Service\Live\Models\Response\EnableDomainResponse;
use Volc\Service\Live\Models\Request\DeleteDomainRequest;
use Volc\Service\Live\Models\Response\DeleteDomainResponse;
use Volc\Service\Live\Models\Request\DescribeDomainRequest;
use Volc\Service\Live\Models\Response\DescribeDomainResponse;
use Volc\Service\Live\Models\Request\ManagerPullPushDomainBindRequest;
use Volc\Service\Live\Models\Response\ManagerPullPushDomainBindResponse;
use Volc\Service\Live\Models\Request\DescribeCDNSnapshotHistoryRequest;
use Volc\Service\Live\Models\Response\DescribeLiveStreamInfoByPageResponse;
use Volc\Service\Live\Models\Request\DescribeRecordTaskFileHistoryRequest;
use Volc\Service\Live\Models\Response\DescribeRecordTaskFileHistoryResponse;
use Volc\Service\Live\Models\Request\DescribeLiveStreamInfoByPageRequest;
use Volc\Service\Live\Models\Request\KillStreamRequest;
use Volc\Service\Live\Models\Response\KillStreamResponse;
use Volc\Service\Live\Models\Request\ForbidStreamRequest;
use Volc\Service\Live\Models\Response\ForbidStreamResponse;
use Volc\Service\Live\Models\Response\UpdateRelaySourceResponse;
use Volc\Service\Live\Models\Request\DescribeForbiddenStreamInfoByPageRequest;
use Volc\Service\Live\Models\Response\DescribeForbiddenStreamInfoByPageResponse;
use Volc\Service\Live\Models\Request\ResumeStreamRequest;
use Volc\Service\Live\Models\Response\ResumeStreamResponse;
use Volc\Service\Live\Models\Request\UpdateRelaySourceRequest;
use Volc\Service\Live\Models\Request\DeleteRelaySourceRequest;
use Volc\Service\Live\Models\Response\DeleteRelaySourceResponse;
use Volc\Service\Live\Models\Request\DescribeRelaySourceRequest;
use Volc\Service\Live\Models\Response\DescribeRelaySourceResponse;
use Volc\Service\Live\Models\Response\CreateVQScoreTaskResponse;
use Volc\Service\Live\Models\Request\DescribeVQScoreTaskRequest;
use Volc\Service\Live\Models\Response\DescribeVQScoreTaskResponse;
use Volc\Service\Live\Models\Request\ListVQScoreTaskRequest;
use Volc\Service\Live\Models\Response\ListVQScoreTaskResponse;
use Volc\Service\Live\Models\Request\GeneratePlayURLRequest;
use Volc\Service\Live\Models\Response\GeneratePlayURLResponse;
use Volc\Service\Live\Models\Request\GeneratePushURLRequest;
use Volc\Service\Live\Models\Response\GeneratePushURLResponse;
use Volc\Service\Live\Models\Request\CreatePullToPushTaskRequest;
use Volc\Service\Live\Models\Response\CreatePullToPushTaskResponse;
use Volc\Service\Live\Models\Request\ListPullToPushTaskRequest;
use Volc\Service\Live\Models\Response\ListPullToPushTaskResponse;
use Volc\Service\Live\Models\Request\UpdatePullToPushTaskRequest;
use Volc\Service\Live\Models\Response\UpdatePullToPushTaskResponse;
use Volc\Service\Live\Models\Request\StopPullToPushTaskRequest;
use Volc\Service\Live\Models\Response\StopPullToPushTaskResponse;
use Volc\Service\Live\Models\Request\RestartPullToPushTaskRequest;
use Volc\Service\Live\Models\Response\RestartPullToPushTaskResponse;
use Volc\Service\Live\Models\Request\DeletePullToPushTaskRequest;
use Volc\Service\Live\Models\Response\DeletePullToPushTaskResponse;
use Volc\Service\Live\Models\Request\UpdateDenyConfigRequest;
use Volc\Service\Live\Models\Response\UpdateDenyConfigResponse;
use Volc\Service\Live\Models\Request\DescribeDenyConfigRequest;
use Volc\Service\Live\Models\Request\DeleteDenyConfigRequest;
use Volc\Service\Live\Models\Response\DeleteDenyConfigResponse;
use Volc\Service\Vod\VodOption;

/**
 * Generated from protobuf service <code>live/service/service_live.proto</code>
 */
class Live extends V4Curl
{

    protected $apiList;

    public function __construct()
    {
        $this->region = func_get_arg(0);
        $this->apiList = LiveOption::$apiList;
        parent::__construct($this->region);
    }


    protected function getConfig(string $region)
    {
        try {
            return LiveOption::getConfig($region);
        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getTraceAsString());
            throw $e;
        }
    }

	/**
     * CreateDomain.
     *
     * @param $req CreateDomainRequest
     * @return CreateDomainResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function createDomain (CreateDomainRequest $req): CreateDomainResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('CreateDomain', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new CreateDomainResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ListDomainDetail.
     *
     * @param $req ListDomainDetailRequest
     * @return ListDomainDetailResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function listDomainDetail (ListDomainDetailRequest $req): ListDomainDetailResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('ListDomainDetail', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ListDomainDetailResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DisableDomain.
     *
     * @param $req DisableDomainRequest
     * @return DisableDomainResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function disableDomain (DisableDomainRequest $req): DisableDomainResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DisableDomain', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DisableDomainResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * EnableDomain.
     *
     * @param $req EnableDomainRequest
     * @return EnableDomainResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function enableDomain (EnableDomainRequest $req): EnableDomainResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('EnableDomain', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new EnableDomainResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeleteDomain.
     *
     * @param $req DeleteDomainRequest
     * @return DeleteDomainResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deleteDomain (DeleteDomainRequest $req): DeleteDomainResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DeleteDomain', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DeleteDomainResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeDomain.
     *
     * @param $req DescribeDomainRequest
     * @return DescribeDomainResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function describeDomain (DescribeDomainRequest $req): DescribeDomainResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeDomain', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeDomainResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ManagerPullPushDomainBind.
     *
     * @param $req ManagerPullPushDomainBindRequest
     * @return ManagerPullPushDomainBindResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function managerPullPushDomainBind (ManagerPullPushDomainBindRequest $req): ManagerPullPushDomainBindResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('ManagerPullPushDomainBind', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ManagerPullPushDomainBindResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeCDNSnapshotHistory.
     *
     * @param $req DescribeCDNSnapshotHistoryRequest
     * @return DescribeCDNSnapshotHistoryResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeCDNSnapshotHistory (DescribeCDNSnapshotHistoryRequest $req): DescribeCDNSnapshotHistoryResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
			$response = $this->request('DescribeCDNSnapshotHistory', ['json' => $query]);

		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeCDNSnapshotHistoryResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeRecordTaskFileHistory.
     *
     * @param $req DescribeRecordTaskFileHistoryRequest
     * @return DescribeRecordTaskFileHistoryResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeRecordTaskFileHistory (DescribeRecordTaskFileHistoryRequest $req): DescribeRecordTaskFileHistoryResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
			$response = $this->request('DescribeRecordTaskFileHistory', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeRecordTaskFileHistoryResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeLiveStreamInfoByPage.
     *
     * @param $req DescribeLiveStreamInfoByPageRequest
     * @return DescribeLiveStreamInfoByPageResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeLiveStreamInfoByPage (DescribeLiveStreamInfoByPageRequest $req): DescribeLiveStreamInfoByPageResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeLiveStreamInfoByPage', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeLiveStreamInfoByPageResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * KillStream.
     *
     * @param $req KillStreamRequest
     * @return KillStreamResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function KillStream (KillStreamRequest $req): KillStreamResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('KillStream', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new KillStreamResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ForbidStream.
     *
     * @param $req ForbidStreamRequest
     * @return ForbidStreamResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function ForbidStream (ForbidStreamRequest $req): ForbidStreamResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('ForbidStream', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ForbidStreamResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeClosedStreamInfoByPage.
     *
     * @param $req DescribeLiveStreamInfoByPageRequest
     * @return UpdateRelaySourceResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeClosedStreamInfoByPage (DescribeClosedStreamInfoByPageRequest $req): DescribeClosedStreamInfoByPageResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeClosedStreamInfoByPage', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeClosedStreamInfoByPageResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeLiveStreamState.
     *
     * @param $req DescribeLiveStreamInfoByPageRequest
     * @return UpdateRelaySourceResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeLiveStreamState (DescribeLiveStreamStateRequest $req): DescribeLiveStreamStateResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeLiveStreamState', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeLiveStreamStateResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeForbiddenStreamInfoByPage.
     *
     * @param $req DescribeForbiddenStreamInfoByPageRequest
     * @return DescribeForbiddenStreamInfoByPageResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function DescribeForbiddenStreamInfoByPage (DescribeForbiddenStreamInfoByPageRequest $req): DescribeForbiddenStreamInfoByPageResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeForbiddenStreamInfoByPage', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeForbiddenStreamInfoByPageResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ResumeStream.
     *
     * @param $req ResumeStreamRequest
     * @return ResumeStreamResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function ResumeStream (ResumeStreamRequest $req): ResumeStreamResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('ResumeStream', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ResumeStreamResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UpdateRelaySourceV2.
     *
     * @param $req UpdateRelaySourceRequest
     * @return UpdateRelaySourceResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function updateRelaySourceV2 (UpdateRelaySourceRequest $req): UpdateRelaySourceResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
            foreach ($query as $key => $value) {
                if ($key == "RelaySourceDomainList"){
                    $RelaySourceDomainList = $req->RelaySourceDomainList;
                    $json_encode = json_encode($RelaySourceDomainList);
                    $json_decode = json_decode($json_encode);
                    $query[$key] = $json_decode;
                }
                if ($key == "RelaySourceParams"){
                    $RelaySourceParams = $req->RelaySourceParams;
                    $json_encode = json_encode($RelaySourceParams);
                    $json_decode = json_decode($json_encode);
                    $query[$key] = $json_decode;
                }
            }
			$response = $this->request('UpdateRelaySourceV2', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new UpdateRelaySourceResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeleteRelaySourceV2.
     *
     * @param $req DeleteRelaySourceRequest
     * @return DeleteRelaySourceResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deleteRelaySourceV2 (DeleteRelaySourceRequest $req): DeleteRelaySourceResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DeleteRelaySourceV2', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DeleteRelaySourceResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeRelaySourceV2.
     *
     * @param $req DescribeRelaySourceRequest
     * @return DescribeRelaySourceResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function describeRelaySourceV2 (DescribeRelaySourceRequest $req): DescribeRelaySourceResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeRelaySourceV2', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeRelaySourceResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}

    /**
     * CreateVQScoreTask.
     *
     * @param $req CreateVQScoreTaskRequest
     * @return CreateVQScoreTaskResponse
     * @throws Exception the exception
     * @throws Throwable the exception
     */
    public function createVQScoreTask (CreateVQScoreTaskRequest $req): CreateVQScoreTaskResponse
    {
        try {
            $query = LiveUtils::formatRequestParamV2($req);
            $response = $this->request('CreateVQScoreTask', ['json' => $query]);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        if ($response->getStatusCode() != 200) {
            echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
        }
        $respData = new CreateVQScoreTaskResponse();
        try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
    }


    /**
     * DescribeVQScoreTask.
     *
     * @param $req DescribeVQScoreTaskRequest
     * @return DescribeVQScoreTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function describeVQScoreTask (DescribeVQScoreTaskRequest $req): DescribeVQScoreTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DescribeVQScoreTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeVQScoreTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ListVQScoreTask.
     *
     * @param $req ListVQScoreTaskRequest
     * @return ListVQScoreTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function listVQScoreTask (ListVQScoreTaskRequest $req): ListVQScoreTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
			$response = $this->request('ListVQScoreTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ListVQScoreTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * GeneratePlayURL.
     *
     * @param $req GeneratePlayURLRequest
     * @return GeneratePlayURLResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function generatePlayURL (GeneratePlayURLRequest $req): GeneratePlayURLResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
			$response = $this->request('GeneratePlayURL', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new GeneratePlayURLResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}

    public function generatePushURL (GeneratePushURLRequest $req): GeneratePushURLResponse
    {
        try {
            $query = LiveUtils::formatRequestParamV2($req);
            $response = $this->request('GeneratePushURL', ['json' => $query]);

        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        if ($response->getStatusCode() != 200) {
            echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
        }
        $respData = new GeneratePushURLResponse();
        try {

            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
    }
	/**
     * CreatePullToPushTask.
     *
     * @param $req CreatePullToPushTaskRequest
     * @return CreatePullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function createPullToPushTask (CreatePullToPushTaskRequest $req): CreatePullToPushTaskResponse
	{
		try {
            $query = LiveUtils::formatRequestParamV2($req);
            foreach ($query as $key => $value) {
                if ($key == "SrcAddrS"){
                    $SrcAddrS = $req->SrcAddrS;
                    $json_encode = json_encode($SrcAddrS);
                    $json_decode = json_decode($json_encode);
                    $query[$key] = $json_decode;
                }
            }
			$response = $this->request('CreatePullToPushTask', ['json' => $query]);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new CreatePullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ListPullToPushTask.
     *
     * @param $req ListPullToPushTaskRequest
     * @return ListPullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function listPullToPushTask (ListPullToPushTaskRequest $req): ListPullToPushTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('ListPullToPushTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new ListPullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UpdatePullToPushTask.
     *
     * @param $req UpdatePullToPushTaskRequest
     * @return UpdatePullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function updatePullToPushTask (UpdatePullToPushTaskRequest $req): UpdatePullToPushTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParamV2($req);
            foreach ($query as $key => $value) {
                if ($key == "SrcAddrS"){
                    $SrcAddrS = $req->SrcAddrS;
                    $json_encode = json_encode($SrcAddrS);
                    $json_decode = json_decode($json_encode);
                    $query[$key] = $json_decode;
                }
            }
			$response = $this->request('UpdatePullToPushTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new UpdatePullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * StopPullToPushTask.
     *
     * @param $req StopPullToPushTaskRequest
     * @return StopPullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function stopPullToPushTask (StopPullToPushTaskRequest $req): StopPullToPushTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('StopPullToPushTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new StopPullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * RestartPullToPushTask.
     *
     * @param $req RestartPullToPushTaskRequest
     * @return RestartPullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function restartPullToPushTask (RestartPullToPushTaskRequest $req): RestartPullToPushTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('RestartPullToPushTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new RestartPullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeletePullToPushTask.
     *
     * @param $req DeletePullToPushTaskRequest
     * @return DeletePullToPushTaskResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deletePullToPushTask (DeletePullToPushTaskRequest $req): DeletePullToPushTaskResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DeletePullToPushTask', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DeletePullToPushTaskResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UpdateDenyConfig.
     *
     * @param $req UpdateDenyConfigRequest
     * @return UpdateDenyConfigResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function updateDenyConfig (UpdateDenyConfigRequest $req): UpdateDenyConfigResponse
	{
		try {
            $query = LiveUtils::formatRequestParamV2($req);

            $response = $this->request('UpdateDenyConfig', ['json' => $query]);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new UpdateDenyConfigResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DescribeDenyConfig.
     *
     * @param $req DescribeDenyConfigRequest
     * @return DescribeDenyConfigResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function describeDenyConfig (DescribeDenyConfigRequest $req): DescribeDenyConfigResponse
	{
		try {
            $query = LiveUtils::formatRequestParamV2($req);
            $response = $this->request('DescribeDenyConfig', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DescribeDenyConfigResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeleteDenyConfig.
     *
     * @param $req DeleteDenyConfigRequest
     * @return DeleteDenyConfigResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deleteDenyConfig (DeleteDenyConfigRequest $req): DeleteDenyConfigResponse
	{
		try {
			$query = LiveUtils::formatRequestParam($req);
			$response = $this->request('DeleteDenyConfig', ['json' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new DeleteDenyConfigResponse();
		try {
            $respData = LiveUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}

}  // end of service
