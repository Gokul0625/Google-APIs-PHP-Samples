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
//     Template File Name:  Oauth2Authentication.tt
//     Build date: 09/20/2017 14:21:25
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Servicemanagement v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Google Service Management allows service producers to publish their services on Google Cloud Platform so that they can be discovered and used by service consumers.
// API Documentation Link https://cloud.google.com/service-management/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Servicemanagement/v1/rest
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

session_start();
$service = getAuthenticateOAuth2();
?> <pre> <?php print_r($service); ?> </pre> <?php

/**
 * Authenticating to Google using Oauth2
 * Documentation: https://developers.google.com/identity/protocols/OAuth2
 * Initializes an Servicemanagement.v1 service object.
 * @return An authorized Servicemanagement.v1 service object.
 */
function getAuthenticateOAuth2() {
	try {
		$client = new Google_Client();
		$client->setAuthConfig(__DIR__ . '/client_secrets.json');
		$client->addScope(Google_Service_Servicemanagement::ANALYTICS_READONLY);

		// If the user has already authorized this app then get an access token
		// else redirect to ask the user to authorize access to Google Analytics.
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
			// Set the access token on the client.
			$client->setAccessToken($_SESSION['access_token']);

			// Create an authorized analytics service object.
			return new Google_Service_Servicemanagement($client); 

		} else {
			$redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php';
			header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}
	} catch (Exception $e) {
		print "An error occurred: " . $e->getMessage();
	}
}
?>
