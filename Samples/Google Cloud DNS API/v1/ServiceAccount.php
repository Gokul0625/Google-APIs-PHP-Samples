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
//     Template File Name:  ServiceAccount.tt
//     Build date: 09/20/2017 14:21:28
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Dns v1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Configures and serves authoritative DNS records.
// API Documentation Link https://developers.google.com/cloud-dns
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Dns/v1/rest
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

// Use the developers console and download your service account
// credentials in JSON format. Place them in this directory or
// change the key file location if necessary.
putenv('GOOGLE_APPLICATION_CREDENTIALS='.__DIR__.'/service-account.json');
$service = getAuthenticateServiceAccount();

?> <pre> <?php print_r($service); ?> </pre> <?php

/**
 * Authenticating to Google using a Service account
 * Documentation: https://developers.google.com/api-client-library/php/auth/service-accounts
 * Initializes an Dns.v1 service object.
 *
 * @return An authorized Dns.v1 service object.
 */
function getAuthenticateServiceAccount() {
	try {	

		// Create and configure a new client object.		
		$client = new Google_Client();
		$client->useApplicationDefaultCredentials();
		return new Google_Service_Dns($client);
	} catch (Exception $e) {
		print "An error occurred: " . $e->getMessage();
	}
}
?>
