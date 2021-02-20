<?php
# Code generated by protoc-gen-volcengine-sdk
# source: Vod
# DO NOT EDIT!

namespace Volc\Service\Vod;

use Exception;
use Throwable;
use Volc\Base\V4Curl;
use Volc\Models\Vod\Request\VodGetPlayInfoRequest;
use Volc\Models\Vod\Response\VodGetPlayInfoResponse;
use Volc\Models\Vod\Request\VodUrlUploadRequest;
use Volc\Models\Vod\Response\VodUrlUploadResponse;
use Volc\Models\Vod\Request\VodQueryUploadTaskInfoRequest;
use Volc\Models\Vod\Response\VodQueryUploadTaskInfoResponse;
use Volc\Models\Vod\Request\VodApplyUploadInfoRequest;
use Volc\Models\Vod\Response\VodApplyUploadInfoResponse;
use Volc\Models\Vod\Request\VodCommitUploadInfoRequest;
use Volc\Models\Vod\Response\VodCommitUploadInfoResponse;
use Volc\Models\Vod\Request\VodUpdateMediaInfoRequest;
use Volc\Models\Vod\Response\VodUpdateMediaInfoResponse;
use Volc\Models\Vod\Request\VodUpdateMediaPublishStatusRequest;
use Volc\Models\Vod\Response\VodUpdateMediaPublishStatusResponse;
use Volc\Models\Vod\Request\VodGetMediaInfosRequest;
use Volc\Models\Vod\Response\VodGetMediaInfosResponse;
use Volc\Models\Vod\Request\VodGetRecommendedPosterRequest;
use Volc\Models\Vod\Response\VodGetRecommendedPosterResponse;
use Volc\Models\Vod\Request\VodDeleteMediaRequest;
use Volc\Models\Vod\Response\VodDeleteMediaResponse;
use Volc\Models\Vod\Request\VodDeleteTranscodesRequest;
use Volc\Models\Vod\Response\VodDeleteTranscodesResponse;
use Volc\Models\Vod\Request\VodStartWorkflowRequest;
use Volc\Models\Vod\Response\VodStartWorkflowResponse;

/**
 * Generated from protobuf service <code>vod/service/service_vod.proto</code>
 */
class Vod extends V4Curl
{

    protected $apiList;

    public function __construct()
    {
        $this->region = func_get_arg(0);
        $this->apiList = VodOption::$apiList;
        parent::__construct($this->region);
    }

    protected function getConfig(string $region){
        try {
            return VodOption::getConfig($region);
        } catch (Exception $e) {
            print_r($e->getMessage());
            print_r($e->getTraceAsString());
            throw $e;
        }
    }

    public function getPlayAuthToken(VodGetPlayInfoRequest $req)
    {
        try {
            $query = VodUtils::formatRequestParam($req);
        }catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        $token = ["TokenVersion" => "V2"];
        $token["GetPlayInfoToken"] = parse_url($this->getRequestUrl("GetPlayInfo", ['query' => $query]))['query'];
        return base64_encode(json_encode($token));
    }
	
	public function getUploadVideoAuth()
    {
        return $this->getUploadVideoAuthWithExpiredTime(60 * 60);
    }

    public function getUploadVideoAuthWithExpiredTime(int $expire)
    {
        $actions = [ActionApplyUpload, ActionCommitUpload];
        $resources = [];
        $statement = $this->newAllowStatement($actions, $resources);
        $policy = [
            Statement => [$statement],
        ];
        return $this->signSts2($policy, $expire);
    }

	/**
     * GetPlayInfo.
     *
     * @param $req VodGetPlayInfoRequest
     * @return VodGetPlayInfoResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function getPlayInfo (VodGetPlayInfoRequest $req): VodGetPlayInfoResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('GetPlayInfo', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodGetPlayInfoResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UploadMediaByUrl.
     *
     * @param $req VodUrlUploadRequest
     * @return VodUrlUploadResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function uploadMediaByUrl (VodUrlUploadRequest $req): VodUrlUploadResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('UploadMediaByUrl', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodUrlUploadResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * QueryUploadTaskInfo.
     *
     * @param $req VodQueryUploadTaskInfoRequest
     * @return VodQueryUploadTaskInfoResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function queryUploadTaskInfo (VodQueryUploadTaskInfoRequest $req): VodQueryUploadTaskInfoResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('QueryUploadTaskInfo', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodQueryUploadTaskInfoResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * ApplyUploadInfo.
     *
     * @param $req VodApplyUploadInfoRequest
     * @return VodApplyUploadInfoResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function applyUploadInfo (VodApplyUploadInfoRequest $req): VodApplyUploadInfoResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('ApplyUploadInfo', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodApplyUploadInfoResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * CommitUploadInfo.
     *
     * @param $req VodCommitUploadInfoRequest
     * @return VodCommitUploadInfoResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function commitUploadInfo (VodCommitUploadInfoRequest $req): VodCommitUploadInfoResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('CommitUploadInfo', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodCommitUploadInfoResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UpdateMediaInfo.
     *
     * @param $req VodUpdateMediaInfoRequest
     * @return VodUpdateMediaInfoResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function updateMediaInfo (VodUpdateMediaInfoRequest $req): VodUpdateMediaInfoResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('UpdateMediaInfo', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodUpdateMediaInfoResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * UpdateMediaPublishStatus.
     *
     * @param $req VodUpdateMediaPublishStatusRequest
     * @return VodUpdateMediaPublishStatusResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function updateMediaPublishStatus (VodUpdateMediaPublishStatusRequest $req): VodUpdateMediaPublishStatusResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('UpdateMediaPublishStatus', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodUpdateMediaPublishStatusResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * GetMediaInfos.
     *
     * @param $req VodGetMediaInfosRequest
     * @return VodGetMediaInfosResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function getMediaInfos (VodGetMediaInfosRequest $req): VodGetMediaInfosResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('GetMediaInfos', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodGetMediaInfosResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * GetRecommendedPoster.
     *
     * @param $req VodGetRecommendedPosterRequest
     * @return VodGetRecommendedPosterResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function getRecommendedPoster (VodGetRecommendedPosterRequest $req): VodGetRecommendedPosterResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('GetRecommendedPoster', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodGetRecommendedPosterResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeleteMedia.
     *
     * @param $req VodDeleteMediaRequest
     * @return VodDeleteMediaResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deleteMedia (VodDeleteMediaRequest $req): VodDeleteMediaResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('DeleteMedia', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodDeleteMediaResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * DeleteTranscodes.
     *
     * @param $req VodDeleteTranscodesRequest
     * @return VodDeleteTranscodesResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function deleteTranscodes (VodDeleteTranscodesRequest $req): VodDeleteTranscodesResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('DeleteTranscodes', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodDeleteTranscodesResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
	/**
     * StartWorkflow.
     *
     * @param $req VodStartWorkflowRequest
     * @return VodStartWorkflowResponse
     * @throws Exception the exception
	 * @throws Throwable the exception
     */
	public function StartWorkflow (VodStartWorkflowRequest $req): VodStartWorkflowResponse
	{
		try {
			$query = VodUtils::formatRequestParam($req);
			$response = $this->request('StartWorkflow', ['query' => $query]);
		} catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }			
		if ($response->getStatusCode() != 200) {
			echo $response->getStatusCode(), "\n";
            echo $response->getBody()->getContents(), "\n";
		}
		$respData = new VodStartWorkflowResponse();
		try {
            $respData = VodUtils::parseResponseData($response, $respData);
        } catch (Exception $e) {
            throw $e;
        } catch (Throwable $t) {
            throw $t;
        }
        return $respData;
	}
	
}  // end of service
