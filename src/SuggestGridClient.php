<?php
/*
 * SuggestGrid
 *
 * This file was automatically generated for SuggestGrid by APIMATIC v2.0 ( https://apimatic.io ) on 11/26/2016
 */

namespace SuggestGridLib;

use SuggestGridLib\Controllers;

/**
 * SuggestGrid client class
 */
class SuggestGridClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct($basicAuthUserName = NULL, $basicAuthPassword = NULL)
    {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
 
    /**
     * Singleton access to Type controller
     * @return Controllers\TypeController The *Singleton* instance
     */
    public function getType()
    {
        return Controllers\TypeController::getInstance();
    }
 
    /**
     * Singleton access to Action controller
     * @return Controllers\ActionController The *Singleton* instance
     */
    public function getAction()
    {
        return Controllers\ActionController::getInstance();
    }
 
    /**
     * Singleton access to Metadata controller
     * @return Controllers\MetadataController The *Singleton* instance
     */
    public function getMetadata()
    {
        return Controllers\MetadataController::getInstance();
    }
 
    /**
     * Singleton access to Recommendation controller
     * @return Controllers\RecommendationController The *Singleton* instance
     */
    public function getRecommendation()
    {
        return Controllers\RecommendationController::getInstance();
    }
 
    /**
     * Singleton access to Similarity controller
     * @return Controllers\SimilarityController The *Singleton* instance
     */
    public function getSimilarity()
    {
        return Controllers\SimilarityController::getInstance();
    }
}