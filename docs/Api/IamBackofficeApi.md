# GeminiCommerce\Iambackoffice\IamBackofficeApi

All URIs are relative to https://iambackoffice.api.gogemini.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**iamBackofficeAssignRoles()**](IamBackofficeApi.md#iamBackofficeAssignRoles) | **POST** /iambackoffice.IamBackoffice/AssignRoles | AUTHZ |
| [**iamBackofficeCreateGroup()**](IamBackofficeApi.md#iamBackofficeCreateGroup) | **POST** /iambackoffice.IamBackoffice/CreateGroup | GROUPS |
| [**iamBackofficeDisableUserMfa()**](IamBackofficeApi.md#iamBackofficeDisableUserMfa) | **POST** /iambackoffice.IamBackoffice/DisableUserMfa |  |
| [**iamBackofficeEnableUserMfa()**](IamBackofficeApi.md#iamBackofficeEnableUserMfa) | **POST** /iambackoffice.IamBackoffice/EnableUserMfa |  |
| [**iamBackofficeGenerateSecretForQR()**](IamBackofficeApi.md#iamBackofficeGenerateSecretForQR) | **POST** /iambackoffice.IamBackoffice/GenerateSecretForQR | MFA |
| [**iamBackofficeLogin()**](IamBackofficeApi.md#iamBackofficeLogin) | **POST** /iambackoffice.IamBackoffice/Login | LOGIN |
| [**iamBackofficeLoginMfa()**](IamBackofficeApi.md#iamBackofficeLoginMfa) | **POST** /iambackoffice.IamBackoffice/LoginMfa | LOGIN MFA |
| [**iamBackofficeLogout()**](IamBackofficeApi.md#iamBackofficeLogout) | **POST** /iambackoffice.IamBackoffice/Logout |  |
| [**iamBackofficeRegister()**](IamBackofficeApi.md#iamBackofficeRegister) | **POST** /iambackoffice.IamBackoffice/Register | REGISTRATION |
| [**iamBackofficeRegisterAgent()**](IamBackofficeApi.md#iamBackofficeRegisterAgent) | **POST** /iambackoffice.IamBackoffice/RegisterAgent | AGENTS |
| [**iamBackofficeUnassignRoles()**](IamBackofficeApi.md#iamBackofficeUnassignRoles) | **POST** /iambackoffice.IamBackoffice/UnassignRoles |  |


## `iamBackofficeAssignRoles()`

```php
iamBackofficeAssignRoles($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse
```

AUTHZ

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest

try {
    $result = $apiInstance->iamBackofficeAssignRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeAssignRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesRequest**](../Model/IambackofficeAssignRolesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeAssignRolesResponse**](../Model/IambackofficeAssignRolesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeCreateGroup()`

```php
iamBackofficeCreateGroup($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeCreateGroupResponse
```

GROUPS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeCreateGroupRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeCreateGroupRequest

try {
    $result = $apiInstance->iamBackofficeCreateGroup($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeCreateGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeCreateGroupRequest**](../Model/IambackofficeCreateGroupRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeCreateGroupResponse**](../Model/IambackofficeCreateGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeDisableUserMfa()`

```php
iamBackofficeDisableUserMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest

try {
    $result = $apiInstance->iamBackofficeDisableUserMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeDisableUserMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeDisableUserMfaRequest**](../Model/IambackofficeDisableUserMfaRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse**](../Model/IambackofficeUserMfaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeEnableUserMfa()`

```php
iamBackofficeEnableUserMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest

try {
    $result = $apiInstance->iamBackofficeEnableUserMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeEnableUserMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeEnableUserMfaRequest**](../Model/IambackofficeEnableUserMfaRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUserMfaResponse**](../Model/IambackofficeUserMfaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeGenerateSecretForQR()`

```php
iamBackofficeGenerateSecretForQR($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeGenerateSecretForQRResponse
```

MFA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->iamBackofficeGenerateSecretForQR($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeGenerateSecretForQR: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeGenerateSecretForQRResponse**](../Model/IambackofficeGenerateSecretForQRResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeLogin()`

```php
iamBackofficeLogin($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse
```

LOGIN

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest

try {
    $result = $apiInstance->iamBackofficeLogin($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeLogin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginRequest**](../Model/IambackofficeLoginRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse**](../Model/IambackofficeLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeLoginMfa()`

```php
iamBackofficeLoginMfa($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse
```

LOGIN MFA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest

try {
    $result = $apiInstance->iamBackofficeLoginMfa($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeLoginMfa: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginMfaRequest**](../Model/IambackofficeLoginMfaRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeLoginResponse**](../Model/IambackofficeLoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeLogout()`

```php
iamBackofficeLogout($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest

try {
    $result = $apiInstance->iamBackofficeLogout($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeLogout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutRequest**](../Model/IambackofficeLogoutRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeLogoutResponse**](../Model/IambackofficeLogoutResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeRegister()`

```php
iamBackofficeRegister($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse
```

REGISTRATION

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest

try {
    $result = $apiInstance->iamBackofficeRegister($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeRegister: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationRequest**](../Model/IambackofficeRegistrationRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse**](../Model/IambackofficeRegistrationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeRegisterAgent()`

```php
iamBackofficeRegisterAgent($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse
```

AGENTS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeRegisterAgentRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeRegisterAgentRequest

try {
    $result = $apiInstance->iamBackofficeRegisterAgent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeRegisterAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegisterAgentRequest**](../Model/IambackofficeRegisterAgentRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeRegistrationResponse**](../Model/IambackofficeRegistrationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `iamBackofficeUnassignRoles()`

```php
iamBackofficeUnassignRoles($body): \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\Iambackoffice\Api\IamBackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest(); // \GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest

try {
    $result = $apiInstance->iamBackofficeUnassignRoles($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IamBackofficeApi->iamBackofficeUnassignRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesRequest**](../Model/IambackofficeUnassignRolesRequest.md)|  | |

### Return type

[**\GeminiCommerce\Iambackoffice\Model\IambackofficeUnassignRolesResponse**](../Model/IambackofficeUnassignRolesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
