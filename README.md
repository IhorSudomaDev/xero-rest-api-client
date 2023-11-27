
# Xero Integration API

This api was created to be able to interact with the Xero service.


## Installation

Install integration via composer.
Don`t forget to add needed repository to the project:

```code
{
    "type": "git",
    "url":  "ssh://keepgoeu.github/KeepgoEU/integration.bill.xero.rest.api.client.git"
},
```
Bash command:
```bash
  composer require ihor-sudoma-dev/xero-rest-api-client
```


## Usage/Examples

To use the API, you need the Client ID and Client secret of the service itself.

Example code:

```php
$client = new XeroApiClient(new Authorization(new Credentials('Your client ID', 'Your client secret')));
$response = $client->getContactListRequest()->send();
print_r($response); // returns the Array of values from Xero Service.
```