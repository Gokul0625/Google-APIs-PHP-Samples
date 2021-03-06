﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  APIKey.tt
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the acceleratedmobilepageurl v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Retrieves the list of AMP URLs (and equivalent AMP Cache URLs) for a given list of public URL(s).
// API Documentation Link https://developers.google.com/amp/cache/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/acceleratedmobilepageurl/v1/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';

// APIKey from Google developer console.
$apiKey = "YOUR API KEY";

$service = getService($apiKey);

?> <pre> <?php print_r($results); ?> </pre> <?php
/**
 * Authenticating to Google using a Service account
 * Documentation: https://developers.google.com/accounts/docs/OAuth2#serviceaccount
 * Initializes an Acceleratedmobilepageurl.v1 service object.
 * @param string API key
 * @return An authorized Acceleratedmobilepageurl.v1 service object.
 */
function getPublicService($apiKey) {
	try {
		
		$client = new Google_Client();
		$client->setApplicationName("Google Acceleratedmobilepageurl Sample");
		
		// Warn if the API key isn't set.
		if ($apiKey = "") {
			echo "Missing API key";
			return;
		}
		
		// Apply key to client.
		$client->setDeveloperKey($apiKey);
		// Create authenticated Acceleratedmobilepageurl service
		return new Google_Service_Acceleratedmobilepageurl($client);
	} catch (Exception $e) {
		print "An error occurred: " . $e->getMessage();
	}
}

?>
