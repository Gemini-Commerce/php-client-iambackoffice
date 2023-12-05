# GeminiCommerce\Iambackoffice\BasicOperationsApi

All URIs are relative to https://iambackoffice.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](BasicOperationsApi.md#login) | **POST** /iambackoffice.IamBackoffice/Login | Login Admin User |
| [**logout()**](BasicOperationsApi.md#logout) | **POST** /iambackoffice.IamBackoffice/Logout | Logout Admin User |
| [**register()**](BasicOperationsApi.md#register) | **POST** /iambackoffice.IamBackoffice/Register | Register Admin User |


## `login()`

```php
login($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse
```

Login Admin User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest

try {
    $result = $apiInstance->login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest**](../Model/IambackofficeLoginRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse**](../Model/IambackofficeLoginResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutResponse
```

Logout Admin User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest

try {
    $result = $apiInstance->logout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest**](../Model/IambackofficeLogoutRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutResponse**](../Model/IambackofficeLogoutResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse
```

Register Admin User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\BasicOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest

try {
    $result = $apiInstance->register($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BasicOperationsApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest**](../Model/IambackofficeRegistrationRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse**](../Model/IambackofficeRegistrationResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
