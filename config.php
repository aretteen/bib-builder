<?php
require './credentials.php'; // Make sure this file is properly filled out for your Zotero Library.

// Config.php processes credentials and sets up variables and function strings
// to be used by other files.


// [apiVer]
//
// Zotero API has multiple versions to interact with.  We will use
// version 3.  Each request to the API must contain a specific version
// request.  This must be appended to every API request.
//

$apiVer = "v=3";

// [URL Construction]
//
// The URL passed to the API will change depending on what you want to do.
// 
$baseURL = "https://api.zotero.org/groups"; // Base URL string to access API.
//
// [Combine Base URL with Action-Specific String]
// Not leaving an ending "/" on these URLs because you can start appending parameters with ?var 
// after this point, depending on what you want to do with the API.  See Zotero API documentation for examples

$apiStringStartItems = "{$baseURL}/{$groupID}/items";
$apiStringStartTags = "{$baseURL}/{$groupID}/tags";
$apiStringStartCollections = "{$baseURL}/{$groupID}/collections";
$apiStringStartSearches = "{$baseURL}/{$groupID}/searches";

// [Append End String]
// As part of every request, regardless of purpose, we must pass along the version and API key
// so this string can begin the End String and particular functions on other pages can add more as well
//
$apiStringEnd = "?{$apiR}&{$apiVer}";




?>