#Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](http://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=SuggestGrid-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the SuggestGrid library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=openIDE&workspaceFolder=SuggestGrid-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=openProject0&workspaceFolder=SuggestGrid-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](http://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=SuggestGrid-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](http://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=SuggestGrid-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](http://apidocs.io/illustration/php?step=createFile&workspaceFolder=SuggestGrid-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=nameFile&workspaceFolder=SuggestGrid-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](http://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=SuggestGrid-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](http://apidocs.io/illustration/php?step=openSettings&workspaceFolder=SuggestGrid-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](http://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=SuggestGrid-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](http://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=SuggestGrid-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](http://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=SuggestGrid-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](http://apidocs.io/illustration/php?step=runProject&workspaceFolder=SuggestGrid-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication and 
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$basicAuthUserName = "basicAuthUserName"; // The username to use with basic authentication
$basicAuthPassword = "basicAuthPassword"; // The password to use with basic authentication

$client = new SuggestGridClient($basicAuthUserName, $basicAuthPassword);
```

## Class Reference

### <a name="list_of_controllers"></a>List of Controllers

* [TypeController](#type_controller)
* [ActionController](#action_controller)
* [MetadataController](#metadata_controller)
* [RecommendationController](#recommendation_controller)
* [SimilarityController](#similarity_controller)

### <a name="type_controller"></a>![Class: ](http://apidocs.io/img/class.png ".TypeController") TypeController

#### Get singleton instance

The singleton instance of the ``` TypeController ``` class can be accessed from the API Client.

```php
$type = $client->getType();
```

#### <a name="get_all_types"></a>![Method: ](http://apidocs.io/img/method.png ".TypeController.getAllTypes") getAllTypes

> *Tags:*  ``` Skips Authentication ``` 

> Get All Types


```php
function getAllTypes()
```

#### Example Usage

```php

$result = $type->getAllTypes();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_all_types"></a>![Method: ](http://apidocs.io/img/method.png ".TypeController.deleteAllTypes") deleteAllTypes

> *Tags:*  ``` Skips Authentication ``` 

> Delete All Types


```php
function deleteAllTypes()
```

#### Example Usage

```php

$result = $type->deleteAllTypes();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="get_type"></a>![Method: ](http://apidocs.io/img/method.png ".TypeController.getType") getType

> *Tags:*  ``` Skips Authentication ``` 

> Get Properties of a Type


```php
function getType($type)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Required ```  | The name of the type to get properties. |



#### Example Usage

```php
$type = 'type';

$result = $type->getType($type);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="create_type"></a>![Method: ](http://apidocs.io/img/method.png ".TypeController.createType") createType

> *Tags:*  ``` Skips Authentication ``` 

> Create a New Type


```php
function createType(
        $type,
        $settings = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Required ```  | The name of the type to be created. |
| settings |  ``` Optional ```  | Optional settings for the rating parameter. |



#### Example Usage

```php
$type = 'type';
$settings = new TypeRequestBody();

$result = $type->createType($type, $settings);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 402 | Type limit reached. |
| 409 | Type already exists. |
| 422 | Rating type is not `implicit` or `explicit`. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_type"></a>![Method: ](http://apidocs.io/img/method.png ".TypeController.deleteType") deleteType

> *Tags:*  ``` Skips Authentication ``` 

> Delete a Type


```php
function deleteType($type)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Required ```  | The name of the type to be deleted. |



#### Example Usage

```php
$type = 'type';

$result = $type->deleteType($type);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 404 | Type does not exists. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



[Back to List of Controllers](#list_of_controllers)

### <a name="action_controller"></a>![Class: ](http://apidocs.io/img/class.png ".ActionController") ActionController

#### Get singleton instance

The singleton instance of the ``` ActionController ``` class can be accessed from the API Client.

```php
$action = $client->getAction();
```

#### <a name="get_actions"></a>![Method: ](http://apidocs.io/img/method.png ".ActionController.getActions") getActions

> *Tags:*  ``` Skips Authentication ``` 

> Get Actions


```php
function getActions(
        $type = NULL,
        $userId = NULL,
        $itemId = NULL,
        $olderThan = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Optional ```  | The type of the actions. |
| userId |  ``` Optional ```  | The user id of the actions. |
| itemId |  ``` Optional ```  | The item id of the actions. |
| olderThan |  ``` Optional ```  | Delete all actions of a type older than the given timestamp or time.
Valid times are 1s, 1m, 1h, 1d, 1M, 1y, or unix timestamp (like 1443798195). |



#### Example Usage

```php
$type = 'type';
$userId = 'user_id';
$itemId = 'item_id';
$olderThan = 'older_than';

$result = $action->getActions($type, $userId, $itemId, $olderThan);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Required `user_id` or `item_id` parameters are missing from the request body. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="post_action"></a>![Method: ](http://apidocs.io/img/method.png ".ActionController.postAction") postAction

> *Tags:*  ``` Skips Authentication ``` 

> Post an Action


```php
function postAction($action)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| action |  ``` Required ```  | The action to be posted. |



#### Example Usage

```php
$action = new Action();

$result = $action->postAction($action);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Required `user_id` or `item_id` parameters are missing from the request body. |
| 402 | Action limit exceeded. |
| 404 | Type does not exists. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_actions"></a>![Method: ](http://apidocs.io/img/method.png ".ActionController.deleteActions") deleteActions

> *Tags:*  ``` Skips Authentication ``` 

> Delete Actions


```php
function deleteActions(
        $type = NULL,
        $userId = NULL,
        $itemId = NULL,
        $olderThan = NULL)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Optional ```  | The type of the actions. |
| userId |  ``` Optional ```  | The user id of the actions. |
| itemId |  ``` Optional ```  | The item id of the actions. |
| olderThan |  ``` Optional ```  | Delete all actions of a type older than the given timestamp or time.
Valid times are 1s, 1m, 1h, 1d, 1M, 1y, or unix timestamp (like 1443798195). |



#### Example Usage

```php
$type = 'type';
$userId = 'user_id';
$itemId = 'item_id';
$olderThan = 'older_than';

$result = $action->deleteActions($type, $userId, $itemId, $olderThan);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Required `user_id` or `item_id` parameters are missing from the request body. |
| 404 | Type does not exists. |
| 422 | No query parameter (`user_id`, `item_id`, or `older_than`) is given.  In order to delete all actionsdelete the type. |
| 429 | Too many requests. |
| 505 | Request timed out. |
| 500 | Unexpected internal error. |



#### <a name="post_bulk_actions"></a>![Method: ](http://apidocs.io/img/method.png ".ActionController.postBulkActions") postBulkActions

> *Tags:*  ``` Skips Authentication ``` 

> Post Bulk Actions


```php
function postBulkActions($actions)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| actions |  ``` Required ```  | A number of action objects separated with newlines.
Note that this is not a valid JSON data structure.
The body size is limited to 10 thousand lines. |



#### Example Usage

```php
$actions = 'actions';

$result = $action->postBulkActions($actions);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 209 | Some metadata is not uploaded successfully. |
| 400 | Body is missing. |
| 402 | Action limit exceeded. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



[Back to List of Controllers](#list_of_controllers)

### <a name="metadata_controller"></a>![Class: ](http://apidocs.io/img/class.png ".MetadataController") MetadataController

#### Get singleton instance

The singleton instance of the ``` MetadataController ``` class can be accessed from the API Client.

```php
$metadata = $client->getMetadata();
```

#### <a name="delete_user"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.deleteUser") deleteUser

> *Tags:*  ``` Skips Authentication ``` 

> Delete a User


```php
function deleteUser($userId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userId |  ``` Required ```  | The user id to delete its metadata. |



#### Example Usage

```php
$userId = 'user_id';

$result = $metadata->deleteUser($userId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="get_users"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.getUsers") getUsers

> *Tags:*  ``` Skips Authentication ``` 

> Get Users


```php
function getUsers()
```

#### Example Usage

```php

$result = $metadata->getUsers();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="post_user"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.postUser") postUser

> *Tags:*  ``` Skips Authentication ``` 

> Post a User


```php
function postUser($user)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| user |  ``` Required ```  | The metadata to be saved. Metadata format has its restrictions. |



#### Example Usage

```php
$user = new Metadata();

$result = $metadata->postUser($user);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Metadata is invalid. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_all_users"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.deleteAllUsers") deleteAllUsers

> *Tags:*  ``` Skips Authentication ``` 

> Delete All Users


```php
function deleteAllUsers()
```

#### Example Usage

```php

$result = $metadata->deleteAllUsers();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_item"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.deleteItem") deleteItem

> *Tags:*  ``` Skips Authentication ``` 

> Delete an Item


```php
function deleteItem($itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| itemId |  ``` Required ```  | The item id to delete its metadata. |



#### Example Usage

```php
$itemId = 'item_id';

$result = $metadata->deleteItem($itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="get_items"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.getItems") getItems

> *Tags:*  ``` Skips Authentication ``` 

> Get Items


```php
function getItems()
```

#### Example Usage

```php

$result = $metadata->getItems();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="post_item"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.postItem") postItem

> *Tags:*  ``` Skips Authentication ``` 

> Post an Item


```php
function postItem($item)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| item |  ``` Required ```  | The metadata to be saved. Metadata format has its restrictions. |



#### Example Usage

```php
$item = new Metadata();

$result = $metadata->postItem($item);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Metadata is invalid. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="delete_all_items"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.deleteAllItems") deleteAllItems

> *Tags:*  ``` Skips Authentication ``` 

> Delete All Items


```php
function deleteAllItems()
```

#### Example Usage

```php

$result = $metadata->deleteAllItems();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="post_bulk_users"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.postBulkUsers") postBulkUsers

> *Tags:*  ``` Skips Authentication ``` 

> Post Bulk Users


```php
function postBulkUsers($users)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| users |  ``` Required ```  | A number of user metadata objects separated with newlines.
Each user metadata object must have its id field.
Note that this is not a valid JSON data structure.
The body size is limited to 10 thousand lines. |



#### Example Usage

```php
$users = 'users';

$result = $metadata->postBulkUsers($users);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 209 | Some metadata is not uploaded successfully. |
| 400 | Body is missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="post_bulk_items"></a>![Method: ](http://apidocs.io/img/method.png ".MetadataController.postBulkItems") postBulkItems

> *Tags:*  ``` Skips Authentication ``` 

> Post Bulk Items


```php
function postBulkItems($items)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| items |  ``` Required ```  | A number of item metadata objects separated with newlines.
Each item metadata object must have its id field.
Note that this is not a valid JSON data structure.
The body size is limited to 10 thousand lines. |



#### Example Usage

```php
$items = 'items';

$result = $metadata->postBulkItems($items);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 209 | Some metadata is not uploaded successfully. |
| 400 | Body is missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



[Back to List of Controllers](#list_of_controllers)

### <a name="recommendation_controller"></a>![Class: ](http://apidocs.io/img/class.png ".RecommendationController") RecommendationController

#### Get singleton instance

The singleton instance of the ``` RecommendationController ``` class can be accessed from the API Client.

```php
$recommendation = $client->getRecommendation();
```

#### <a name="get_recommended_users"></a>![Method: ](http://apidocs.io/img/method.png ".RecommendationController.getRecommendedUsers") getRecommendedUsers

> *Tags:*  ``` Skips Authentication ``` 

> Get Recommended Users


```php
function getRecommendedUsers($query)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| query |  ``` Required ```  | The query for recommended users. |



#### Example Usage

```php
$query = new GetRecommendedUsersBody();

$result = $recommendation->getRecommendedUsers($query);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Request body is invalid. |
| 422 | Required parameters are missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="get_recommended_items"></a>![Method: ](http://apidocs.io/img/method.png ".RecommendationController.getRecommendedItems") getRecommendedItems

> *Tags:*  ``` Skips Authentication ``` 

> Get Recommended Items


```php
function getRecommendedItems($query)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| query |  ``` Required ```  | The query for recommended items. |



#### Example Usage

```php
$query = new GetRecommendedItemsBody();

$result = $recommendation->getRecommendedItems($query);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Request body is invalid. |
| 422 | Required parameters are missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



[Back to List of Controllers](#list_of_controllers)

### <a name="similarity_controller"></a>![Class: ](http://apidocs.io/img/class.png ".SimilarityController") SimilarityController

#### Get singleton instance

The singleton instance of the ``` SimilarityController ``` class can be accessed from the API Client.

```php
$similarity = $client->getSimilarity();
```

#### <a name="get_similar_users"></a>![Method: ](http://apidocs.io/img/method.png ".SimilarityController.getSimilarUsers") getSimilarUsers

> *Tags:*  ``` Skips Authentication ``` 

> Get Similar Users


```php
function getSimilarUsers($query)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| query |  ``` Required ```  | The query for similar users. |



#### Example Usage

```php
$query = new GetSimilarUsersBody();

$result = $similarity->getSimilarUsers($query);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Request body is invalid. |
| 422 | Required parameters are missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



#### <a name="get_similar_items"></a>![Method: ](http://apidocs.io/img/method.png ".SimilarityController.getSimilarItems") getSimilarItems

> *Tags:*  ``` Skips Authentication ``` 

> Get Similar Items


```php
function getSimilarItems($query)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| query |  ``` Required ```  | The query for similar items. |



#### Example Usage

```php
$query = new GetSimilarItemsBody();

$result = $similarity->getSimilarItems($query);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Request body is invalid. |
| 422 | Required parameters are missing. |
| 429 | Too many requests. |
| 500 | Unexpected internal error. |



[Back to List of Controllers](#list_of_controllers)



