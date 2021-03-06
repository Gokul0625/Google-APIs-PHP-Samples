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
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the drive v2 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Manages files in Drive including uploading, downloading, searching, detecting changes, and updating sharing permissions.
// API Documentation Link https://developers.google.com/drive/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/drive/v2/rest
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

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Drive($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'corpora' => '[YourValue]',  // Comma-separated list of bodies of items (files/documents) to which the query applies. Supported bodies are 'default', 'domain', 'teamDrive' and 'allTeamDrives'. 'allTeamDrives' must be combined with 'default'; all other values must be used in isolation. Prefer 'default' or 'teamDrive' to 'allTeamDrives' for efficiency.
            
  //'corpus' => '[YourValue]',  // The body of items (files/documents) to which the query applies. Deprecated: use 'corpora' instead.
            
  //'includeTeamDriveItems' => '[YourValue]',  // Whether Team Drive items should be included in results.
            
  //'maxResults' => '[YourValue]',  // The maximum number of files to return per page. Partial or empty result pages are possible even before the end of the files list has been reached.
            
  //'orderBy' => '[YourValue]',  // A comma-separated list of sort keys. Valid keys are 'createdDate', 'folder', 'lastViewedByMeDate', 'modifiedByMeDate', 'modifiedDate', 'quotaBytesUsed', 'recency', 'sharedWithMeDate', 'starred', 'title', and 'title_natural'. Each key sorts ascending by default, but may be reversed with the 'desc' modifier. Example usage: ?orderBy=folder,modifiedDate desc,title. Please note that there is a current limitation for users with approximately one million files in which the requested sort order is ignored.
            
  //'pageToken' => '[YourValue]',  // Page token for files.
            
  //'projection' => '[YourValue]',  // This parameter is deprecated and has no function.
            
  //'q' => '[YourValue]',  // Query string for searching files.
            
  //'spaces' => '[YourValue]',  // A comma-separated list of spaces to query. Supported values are 'drive', 'appDataFolder' and 'photos'.
            
  //'supportsTeamDrives' => '[YourValue]',  // Whether the requesting application supports Team Drives.
            
  //'teamDriveId' => '[YourValue]',  // ID of Team Drive to search.
  'fields' => '*'
);
// Single Request.
$results = filesListExample($service, $optParams);

// Paginiation Example
do {
    if (!$results->getNextPageToken()) 
		break;

	$optParams['pageToken'] = $results->getNextPageToken();
	$results = filesListExample($service, $optParams);	
} while($results->getNextPageToken());  

/**
* Lists the user's files.
* @service Authenticated Drive service.
* @optParams Optional paramaters are not required by a request.
* @return FileList
*/
function filesListExample($service, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		// Make the request and return the results.
		return $service->files->ListFiles($optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
