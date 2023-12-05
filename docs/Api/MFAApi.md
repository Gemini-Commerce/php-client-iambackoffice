# GeminiCommerce\Iambackoffice\MFAApi

All URIs are relative to https://iambackoffice.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**disableUserMfa()**](MFAApi.md#disableUserMfa) | **POST** /iambackoffice.IamBackoffice/DisableUserMfa | Disable User MFA |
| [**enableUserMfa()**](MFAApi.md#enableUserMfa) | **POST** /iambackoffice.IamBackoffice/EnableUserMfa | Enable User MFA |
| [**generateSecretForQR()**](MFAApi.md#generateSecretForQR) | **POST** /iambackoffice.IamBackoffice/GenerateSecretForQR | Generate Secret For QR |
| [**loginMfa()**](MFAApi.md#loginMfa) | **POST** /iambackoffice.IamBackoffice/LoginMfa | Login MFA Admin User |


## `disableUserMfa()`

```php
disableUserMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse
```

Disable User MFA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest

try {
    $result = $apiInstance->disableUserMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->disableUserMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest**](../Model/IambackofficeDisableUserMfaRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse**](../Model/IambackofficeUserMfaResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableUserMfa()`

```php
enableUserMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse
```

Enable User MFA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest

try {
    $result = $apiInstance->enableUserMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->enableUserMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest**](../Model/IambackofficeEnableUserMfaRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse**](../Model/IambackofficeUserMfaResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateSecretForQR()`

```php
generateSecretForQR($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeGenerateSecretForQRResponse
```

Generate Secret For QR

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->generateSecretForQR($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->generateSecretForQR: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeGenerateSecretForQRResponse**](../Model/IambackofficeGenerateSecretForQRResponse.md)

### Authorization

[standardAuthorization](../../README.md#standardAuthorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginMfa()`

```php
loginMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse
```

Login MFA Admin User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: standardAuthorization
$config = GeminiCommerce\Iambackoffice\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new GeminiCommerce\Iambackoffice\Api\MFAApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest

try {
    $result = $apiInstance->loginMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MFAApi->loginMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest**](../Model/IambackofficeLoginMfaRequest.md)|  | |

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
