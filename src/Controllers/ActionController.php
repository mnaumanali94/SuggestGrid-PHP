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
class ActionController extends BaseController {

    /**
     * @var ActionController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return ActionController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get Actions
     * @param  string     $type           Optional parameter: The type of the actions.
     * @param  string     $userId         Optional parameter: The user id of the actions.
     * @param  string     $itemId         Optional parameter: The item id of the actions.
     * @param  string     $olderThan      Optional parameter: Delete all actions of a type older than the given timestamp or time. Valid times are 1s, 1m, 1h, 1d, 1M, 1y, or unix timestamp (like 1443798195).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getActions (
                $type = NULL,
                $userId = NULL,
                $itemId = NULL,
                $olderThan = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/actions';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'type'       => $type,
            'user_id'    => $userId,
            'item_id'    => $itemId,
            'older_than' => $olderThan,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'SUGGESTGRID',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Required `user_id` or `item_id` parameters are missing from the request body.', $_httpContext);
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

        return $mapper->map($response->body, new Models\CountResponse());
    }
        
    /**
     * Post an Action
     * @param  Models\Action $action     Required parameter: The action to be posted.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postAction (
                $action) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/actions';

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
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($action));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Required `user_id` or `item_id` parameters are missing from the request body.', $_httpContext);
        }

        else if ($response->code == 402) {
            throw new Exceptions\ErrorResponseException('Action limit exceeded.', $_httpContext);
        }

        else if ($response->code == 404) {
            throw new Exceptions\ErrorResponseException('Type does not exists.', $_httpContext);
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

        return $mapper->map($response->body, new Models\MessageResponse());
    }
        
    /**
     * Delete Actions
     * @param  string     $type           Optional parameter: The type of the actions.
     * @param  string     $userId         Optional parameter: The user id of the actions.
     * @param  string     $itemId         Optional parameter: The item id of the actions.
     * @param  string     $olderThan      Optional parameter: Delete all actions of a type older than the given timestamp or time. Valid times are 1s, 1m, 1h, 1d, 1M, 1y, or unix timestamp (like 1443798195).
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteActions (
                $type = NULL,
                $userId = NULL,
                $itemId = NULL,
                $olderThan = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/actions';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'type'       => $type,
            'user_id'    => $userId,
            'item_id'    => $itemId,
            'older_than' => $olderThan,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'SUGGESTGRID',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Required `user_id` or `item_id` parameters are missing from the request body.', $_httpContext);
        }

        else if ($response->code == 404) {
            throw new Exceptions\ErrorResponseException('Type does not exists.', $_httpContext);
        }

        else if ($response->code == 422) {
            throw new Exceptions\ErrorResponseException('No query parameter (`user_id`, `item_id`, or `older_than`) is given.  In order to delete all actionsdelete the type.', $_httpContext);
        }

        else if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 505) {
            throw new Exceptions\ErrorResponseException('Request timed out.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\MessageResponse());
    }
        
    /**
     * Post Bulk Actions
     * @param  string     $actions     Required parameter: A number of action objects separated with newlines. Note that this is not a valid JSON data structure. The body size is limited to 10 thousand lines.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function postBulkActions (
                $actions) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/actions/_bulk';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'SUGGESTGRID',
            'Accept'        => 'application/json'
        );

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $actions);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 209) {
            throw new Exceptions\BulkSchemaErrorResponseException('Some metadata is not uploaded successfully.', $_httpContext);
        }

        else if ($response->code == 400) {
            throw new Exceptions\ErrorResponseException('Body is missing.', $_httpContext);
        }

        else if ($response->code == 402) {
            throw new Exceptions\ErrorResponseException('Action limit exceeded.', $_httpContext);
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

        return $mapper->map($response->body, new Models\MessageResponse());
    }
        

}