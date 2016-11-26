<?php
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib\Exceptions;

use SuggestGridLib\APIException;
use SuggestGridLib\APIHelper;
/**
 * Error response.
 */
class DetailedErrorResponseException extends APIException{
    /**
     * Message of the response.
     * @maps error_text
     * @var string $errorText public property
     */
    public $errorText;

    /**
     * Description of the response.
     * @maps error_description
     * @var string $errorDescription public property
     */
    public $errorDescription;

    /**
     * URI of the response for more details.
     * @maps error_uri
     * @var string $errorUri public property
     */
    public $errorUri;

    /**
     * Specific details of the response.
     * @maps error_details
     * @var string $errorDetails public property
     */
    public $errorDetails;


    /**
    * Constructor to set initial or default values of member properties 
    */
    public function __construct($reason,$context)
    {
        parent::__construct($reason,$context);
    }

    public function unbox()
    {
        $data = APIHelper::deserialize(self::getResponseBody());
        $errorText = $data['error_text'];
        $errorDescription = $data['error_description'];
        $errorUri = $data['error_uri'];
        $errorDetails = $data['error_details'];
    }
}