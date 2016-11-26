<?php
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Controllers;

use SuggestGridLib\APIException;
use SuggestGridLib\APIHelper;
use SuggestGridLib\Configuration;
use SuggestGridLib\Models;
use SuggestGridLib\Exceptions;
use SuggestGridLib\Http\HttpRequest;
use SuggestGridLib\Http\HttpResponse;
use SuggestGridLib\Http\HttpMethod;
use SuggestGridLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class SimilarityController extends BaseController {

    /**
     * @var SimilarityController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return SimilarityController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get Similar Users
     * @param  Models\GetSimilarUsersBody $query     Required parameter: The query for similar users.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSimilarUsers (
                $query) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/similar/users';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'SUGGESTGRID',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($query));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Request body is invalid.', $_httpContext);
        }

        else if ($response->code == 422) {
            throw new Exceptions\ErrorResponseException('Required parameters are missing.', $_httpContext);
        }

        else if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\UsersResponse());
    }
        
    /**
     * Get Similar Items
     * @param  Models\GetSimilarItemsBody $query     Required parameter: The query for similar items.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getSimilarItems (
                $query) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/similar/items';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'SUGGESTGRID',
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($query));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Request body is invalid.', $_httpContext);
        }

        else if ($response->code == 422) {
            throw new Exceptions\ErrorResponseException('Required parameters are missing.', $_httpContext);
        }

        else if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\ItemsResponse());
    }
        

}