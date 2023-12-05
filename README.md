# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/gemini-commerce/php-client-iambackoffice.git"
    }
  ],
  "require": {
    "gemini-commerce/php-client-iambackoffice": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://iambackoffice.api.gogemini.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BasicOperationsApi* | [**login**](docs/Api/BasicOperationsApi.md#login) | **POST** /iambackoffice.IamBackoffice/Login | Login Admin User
*BasicOperationsApi* | [**logout**](docs/Api/BasicOperationsApi.md#logout) | **POST** /iambackoffice.IamBackoffice/Logout | Logout Admin User
*BasicOperationsApi* | [**register**](docs/Api/BasicOperationsApi.md#register) | **POST** /iambackoffice.IamBackoffice/Register | Register Admin User
*MFAApi* | [**disableUserMfa**](docs/Api/MFAApi.md#disableusermfa) | **POST** /iambackoffice.IamBackoffice/DisableUserMfa | Disable User MFA
*MFAApi* | [**enableUserMfa**](docs/Api/MFAApi.md#enableusermfa) | **POST** /iambackoffice.IamBackoffice/EnableUserMfa | Enable User MFA
*MFAApi* | [**generateSecretForQR**](docs/Api/MFAApi.md#generatesecretforqr) | **POST** /iambackoffice.IamBackoffice/GenerateSecretForQR | Generate Secret For QR
*MFAApi* | [**loginMfa**](docs/Api/MFAApi.md#loginmfa) | **POST** /iambackoffice.IamBackoffice/LoginMfa | Login MFA Admin User
*RolesApi* | [**assignRoles**](docs/Api/RolesApi.md#assignroles) | **POST** /iambackoffice.IamBackoffice/AssignRoles | Assign Roles
*RolesApi* | [**unassignRoles**](docs/Api/RolesApi.md#unassignroles) | **POST** /iambackoffice.IamBackoffice/UnassignRoles | Unassign Roles

## Models

- [IambackofficeAssignRolesRequest](docs/Model/IambackofficeAssignRolesRequest.md)
- [IambackofficeAssignRolesResponse](docs/Model/IambackofficeAssignRolesResponse.md)
- [IambackofficeAuthenticatorConfiguration](docs/Model/IambackofficeAuthenticatorConfiguration.md)
- [IambackofficeDevice](docs/Model/IambackofficeDevice.md)
- [IambackofficeDisableUserMfaRequest](docs/Model/IambackofficeDisableUserMfaRequest.md)
- [IambackofficeEnableUserMfaRequest](docs/Model/IambackofficeEnableUserMfaRequest.md)
- [IambackofficeGenerateSecretForQRResponse](docs/Model/IambackofficeGenerateSecretForQRResponse.md)
- [IambackofficeLoginMfaRequest](docs/Model/IambackofficeLoginMfaRequest.md)
- [IambackofficeLoginRequest](docs/Model/IambackofficeLoginRequest.md)
- [IambackofficeLoginResponse](docs/Model/IambackofficeLoginResponse.md)
- [IambackofficeLogoutRequest](docs/Model/IambackofficeLogoutRequest.md)
- [IambackofficeLogoutResponse](docs/Model/IambackofficeLogoutResponse.md)
- [IambackofficeMetaData](docs/Model/IambackofficeMetaData.md)
- [IambackofficeRegistrationRequest](docs/Model/IambackofficeRegistrationRequest.md)
- [IambackofficeRegistrationResponse](docs/Model/IambackofficeRegistrationResponse.md)
- [IambackofficeTwoFactorMethod](docs/Model/IambackofficeTwoFactorMethod.md)
- [IambackofficeUnassignRolesRequest](docs/Model/IambackofficeUnassignRolesRequest.md)
- [IambackofficeUnassignRolesResponse](docs/Model/IambackofficeUnassignRolesResponse.md)
- [IambackofficeUser](docs/Model/IambackofficeUser.md)
- [IambackofficeUserMfaResponse](docs/Model/IambackofficeUserMfaResponse.md)
- [IambackofficeUserRegistration](docs/Model/IambackofficeUserRegistration.md)
- [IambackofficeUserTwoFactorConfiguration](docs/Model/IambackofficeUserTwoFactorConfiguration.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)

## Authorization

Authentication schemes defined for the API:
### standardAuthorization

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://iambackoffice.gogemini.io/iambackoffice.IamBackoffice/Login`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

info@gemini-commerce.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`