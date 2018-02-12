# Softonic\DownloadStatsApiSdk\DownloadStatsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDownloadStat**](DownloadStatsApi.md#getDownloadStat) | **GET** /download-stats/{id} | Retrieves the given downloads statistics
[**getDownloadStats**](DownloadStatsApi.md#getDownloadStats) | **GET** /download-stats | Get the list of the downloads statistics for a given app
[**postDownloadStats**](DownloadStatsApi.md#postDownloadStats) | **POST** /download-stats | Creates the downloads statistics for a given app
[**putDownloadStats**](DownloadStatsApi.md#putDownloadStats) | **PUT** /download-stats/{id} | Replaces the given downloads statistics


# **getDownloadStat**
> getDownloadStat($id)

Retrieves the given downloads statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Download stats identifier

try {
    $apiInstance->getDownloadStat($id);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->getDownloadStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Download stats identifier |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadStats**
> getDownloadStats($accept_language, $app_id, $country, $date, $page, $per_page)

Get the list of the downloads statistics for a given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Locale
$app_id = "app_id_example"; // string | App id
$country = "country_example"; // string | Country
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Take into account downloads from that date. ISO 8601 format
$page = 1; // int | Page
$per_page = 10; // int | Number of results per page

try {
    $apiInstance->getDownloadStats($accept_language, $app_id, $country, $date, $page, $per_page);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->getDownloadStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Locale |
 **app_id** | **string**| App id | [optional]
 **country** | **string**| Country | [optional]
 **date** | **\DateTime**| Take into account downloads from that date. ISO 8601 format | [optional]
 **page** | **int**| Page | [optional] [default to 1]
 **per_page** | **int**| Number of results per page | [optional] [default to 10]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDownloadStats**
> postDownloadStats($accept_language, $download_stats)

Creates the downloads statistics for a given app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept_language = "accept_language_example"; // string | Locale
$download_stats = new \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats(); // \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats | 

try {
    $apiInstance->postDownloadStats($accept_language, $download_stats);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->postDownloadStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| Locale |
 **download_stats** | [**\Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats**](../Model/DownloadStats.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putDownloadStats**
> putDownloadStats($id, $accept_language, $download_stats)

Replaces the given downloads statistics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Softonic\DownloadStatsApiSdk\Api\DownloadStatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Download stats identifier
$accept_language = "accept_language_example"; // string | Locale
$download_stats = new \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats(); // \Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats | 

try {
    $apiInstance->putDownloadStats($id, $accept_language, $download_stats);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->putDownloadStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Download stats identifier |
 **accept_language** | **string**| Locale |
 **download_stats** | [**\Softonic\DownloadStatsApiSdk\Client\Model\DownloadStats**](../Model/DownloadStats.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
