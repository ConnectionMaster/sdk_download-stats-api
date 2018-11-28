# DownloadStatsApiSdk
To access the API: 1. Register a client with the proper permissions (`download_stats_api.*`) in the [Softonic OAuth Admin](https://oauth-admin.softonic.com) 1. Retrieve a token for that client with the proper scopes from the [Softonic OAuth API](https://oauth-v2.softonic.com). 1. Copy the token in the input field at the top of the page

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.69.0
- Package version: 1.16.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/softonic/download_stats_api_sdk.git"
    }
  ],
  "require": {
    "softonic/download_stats_api_sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DownloadStatsApiSdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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
    $result = $apiInstance->getDownloadStat($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadStatsApi->getDownloadStat: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://download-stats-v1.eu-west.sftapi.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DownloadStatsApi* | [**getDownloadStat**](docs/Api/DownloadStatsApi.md#getdownloadstat) | **GET** /download-stats/{id} | Retrieves the given downloads statistics
*DownloadStatsApi* | [**getDownloadStats**](docs/Api/DownloadStatsApi.md#getdownloadstats) | **GET** /download-stats | Get the list of the downloads statistics for a given app
*DownloadStatsApi* | [**postDownloadStats**](docs/Api/DownloadStatsApi.md#postdownloadstats) | **POST** /download-stats | Creates the downloads statistics for a given app
*DownloadStatsApi* | [**putDownloadStats**](docs/Api/DownloadStatsApi.md#putdownloadstats) | **PUT** /download-stats/{id} | Replaces the given downloads statistics
*ProgramsPlatformsApi* | [**getProgramPlatform**](docs/Api/ProgramsPlatformsApi.md#getprogramplatform) | **GET** /programs/{id_program}/platforms/{id_platform} | Get the list of the downloads stats for a given program platform
*ProgramsPlatformsLocalesApi* | [**getProgramPlatformLocale**](docs/Api/ProgramsPlatformsLocalesApi.md#getprogramplatformlocale) | **GET** /programs/{id_program}/platforms/{id_platform}/locales/{id_locale} | Get the list of the downloads stats for a given program platform locale


## Documentation For Models

 - [DownloadStats](docs/Model/DownloadStats.md)
 - [DownloadStatsInput](docs/Model/DownloadStatsInput.md)
 - [ItemsPaginationModel](docs/Model/ItemsPaginationModel.md)
 - [ProgramPlatform](docs/Model/ProgramPlatform.md)
 - [ProgramPlatformLocale](docs/Model/ProgramPlatformLocale.md)
 - [TotalItemsPagePerPageTotalPagesNextModel](docs/Model/TotalItemsPagePerPageTotalPagesNextModel.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




