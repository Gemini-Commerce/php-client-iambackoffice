# GeminiCommerce\Iambackoffice\RolesApi

All URIs are relative to https://iambackoffice.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignRoles()**](RolesApi.md#assignRoles) | **POST** /iambackoffice.IamBackoffice/AssignRoles | Assign Roles |
| [**unassignRoles()**](RolesApi.md#unassignRoles) | **POST** /iambackoffice.IamBackoffice/UnassignRoles | Unassign Roles |


## `assignRoles()`

```php
assignRoles($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse
```

Assign Roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest

try {
    $result = $apiInstance->assignRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->assignRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest**](../Model/IambackofficeAssignRolesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse**](../Model/IambackofficeAssignRolesResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unassignRoles()`

```php
unassignRoles($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse
```

Unassign Roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest

try {
    $result = $apiInstance->unassignRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->unassignRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest**](../Model/IambackofficeUnassignRolesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse**](../Model/IambackofficeUnassignRolesResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
