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
class TypeController extends BaseController {

    /**
     * @var TypeController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return TypeController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Get All Types
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getAllTypes () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/types';

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
        if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GetTypesResponse());
    }
        
    /**
     * Delete All Types
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteAllTypes () 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/types';

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
        if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GetTypesResponse());
    }
        
    /**
     * Get Properties of a Type
     * @param  string     $type     Required parameter: The name of the type to get properties.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getType (
                $type) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/types/{type}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'type' => $type,
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
        if ($response->code == 429) {
            throw new Exceptions\ErrorResponseException('Too many requests.', $_httpContext);
        }

        else if ($response->code == 500) {
            throw new APIException('Unexpected internal error.', $_httpContext);
        }

        else if (($response->code < 200) || ($response->code > 208)) { //[200,208] = HTTP OK
            throw new APIException("HTTP Response Not OK", $_httpContext);
        }

        $mapper = $this->getJsonMapper();

        return $mapper->map($response->body, new Models\GetTypeResponse());
    }
        
    /**
     * Create a New Type
     * @param  string              $type         Required parameter: The name of the type to be created.
     * @param  Models\TypeRequestBody $settings     Optional parameter: Optional settings for the rating parameter.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createType (
                $type,
                $settings = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/types/{type}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'type'     => $type,
            ));

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
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);            
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($settings));

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
            $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
            
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);            
        }

        //Error handling using HTTP status codes
        if ($response->code == 402) {
            throw new Exceptions\LimitExceededErrorResponseException('Type limit reached.', $_httpContext);
        }

        else if ($response->code == 409) {
            throw new Exceptions\ErrorResponseException('Type already exists.', $_httpContext);
        }

        else if ($response->code == 422) {
            throw new Exceptions\ErrorResponseException('Rating type is not `implicit` or `explicit`.', $_httpContext);
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
     * Delete a Type
     * @param  string     $type     Required parameter: The name of the type to be deleted.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function deleteType (
                $type) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v1/types/{type}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'type' => $type,
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
        if ($response->code == 404) {
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
        

}