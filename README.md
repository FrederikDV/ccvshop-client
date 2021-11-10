# CCV Shop API client for PHP

[![Packagist Version](https://img.shields.io/packagist/v/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/l/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/dt/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/ccvshop-client)
[![Packagist](https://img.shields.io/packagist/php-v/jacobdekeizer/ccvshop-client)](https://packagist.org/packages/jacobdekeizer/redjepakketje-client)
![Build](https://github.com/jacobdekeizer/ccvshop-client/workflows/Build/badge.svg)

An object oriented PHP client for the CCV Shop API. See here for the [CCV Shop API documentation](https://demo.ccvshop.nl/API/Docs/).

## Contributing

Any help is appreciated, see [contributing](.github/CONTRIBUTING.md) for more information.
The models and endpoints are **automatically generated**.

## Installation
You can install this package via composer:

```
composer require jacobdekeizer/ccvshop-client
```

## Usage

> This readme shows basic usage of this package, for all available options see the class definitions and the api documentation.

Create the client

```php
$client = new \JacobDeKeizer\Ccv\Client();
$client->setBaseUrl('https://demo.ccvshop.nl');
$client->setPublicKey('public_key');
$client->setPrivateKey('private_key');
```

## Documented endpoints

| Endpoint | Main usage |
| --- | --- |
| root | [List supported endpoints](#root-endpoint) |
| apps | [Manage apps](#apps) |
| attributes | [Manage attributes](#attributes) |
| attributevalues | [Manage attribute values](#attribute-values) |
| categories | [Manage categories](#categories) |
| invoices | [Manage invoices](#invoices) |
| orders | [Manage orders](#orders) |
| orderrows | [Manage order rows](#order-rows) |
| ordernotes | [Manage internal order notes](#order-notes) |
| ordernotifications | [Manage order notifications](#order-notifications) |
| packages | [Manage packages](#packages) |
| products | [Manage products](#products) |
| productattributevalues | [Manage product attribute values](#product-attribute-values) |
| productphotos | [Manage product photos](#product-photos) |
| producttocategories |  [Manage categories of a product](#product-categories) |
| suppliers | [Manage suppliers](#suppliers) |
| webhooks | [Manage webhooks](#webhooks) |

## Root endpoint

This endpoint returns the supported endpoints for your CCV Shop API keys.

```php
$result = $client->root()->all();

foreach ($result->getItems() as $item) {
    var_dump($item);
}
```

## Apps

### Get all apps in a certain store category

You can optionally filter, expand or sort.

In the example below, we're filtering by name, expanding categories and sorting by date.

```php
$parameters = (new \JacobDeKeizer\Ccv\Parameters\Apps\AllFromAppstorecategory())
    ->setName('FooBar')
    ->expandCategories()
    ->orderByDateAsc();

$apps = $client->apps()->allFromAppstorecategory(11, $parameters);

foreach ($apps->getItems() as $app) {
    var_dump($app->getName());
}
```

### Get all apps

This will get all apps associated with the current public and private key.

You can use the `\JacobDeKeizer\Ccv\Parameters\Apps\All` parameter to filter the results, like above.

```php
$apps = $client->apps()->all();

foreach ($apps->getItems() as $app) {
    var_dump($app->getName());
}
```

### Get an app

```php
$app = $client->apps()->get(123456);

var_dump($app->getName());
```

### Update an app
For example set the app to installed
```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Apps\Patch\Patch())
    ->setIsInstalled(true);

$client->apps()->update(12345, $patch);
```

## Attributes

### Get attribute

```php
$client->attributes()->get(1234);
```

### Get all attributes

```php
$client->attributes()->all();
```

### Get all attribute combinations

```php
$client->attributes()->allFromAttributecombination(1234);
```

### Create attribute

```php
$attribute = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributes\Input\Input())
    ->setName('Foo')
    ->setType('option_menu_required');
    
$client->attributes()->create($attribute);
```

### Update attribute

```php
$attribute = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributes\Input\Input())
    ->setName('Foo')
    ->setType('option_menu_required');
    
$client->attributes()->update(1234, $attribute);
```

### Delete attribute

```php
$client->attributes()->delete(1234);
```

## Attribute values

### Get attribute values

```php
$client->attributevalues()->get(1234);
```

### Get all attribute values for attribute

```php
$client->attributevalues()->allFromAttribute(1234);
```

### Get all attribute values for combination

```php
$client->attributevalues()->allFromAttributecombination(1234);
```

### Create attribute value

```php
$create = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributevalues\Post\Post())
    ->setName('Bar')
    ->setDefaultPrice(0);

$client->attributevalues()->createForAttribute(1234, $create);
```

### Update attribute value

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Attributevalues\Patch\Patch())
    ->setName('Bar')
    ->setDefaultPrice(0);

$client->attributevalues()->update(1234, $patch);
```

### Delete attribute values

```php
$client->attributevalues()->delete(1234);
```

## Categories

### Get all child categories of a category

```php
$categories = $client->categories()->allFromCategory(1);
```

### Get all categories

```php
$parameter = (new \JacobDeKeizer\Ccv\Parameters\Categories\All)
    ->setSize(10); // optional

$categories = $client->categories()->all($parameter);

$nextParameter = \JacobDeKeizer\Ccv\Parameters\Categories\All::fromUrl($categories->getNext());
```

### Get category

```php
$category = $client->categories()->get(1);

$category->getId();
$category->getName();
$category->getDescription();
```

### Create category

```php
$client->categories()->create(
    (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Categories\Post\Post())
        ->setName('foo bar')
);
```

### Update category

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Categories\Patch\Patch())
    ->setName('foo bar');

$client->categories()->update(1, $patch);
```

### Delete category

```php
$client->categories()->delete(12345);
```

## Invoices

### Get all invoices
Get all invoices between 2020-01-01 and 2020-01-31

```php
// see the code and documentation for all available methods
$getInvoicesParameter = (new \JacobDeKeizer\Ccv\Parameters\Invoices\All)
    ->setMinCreateDate('2020-01-01')
    ->setMaxCreateDate('2020-01-31');

$invoices = $client->invoices()->all($getInvoicesParameter);
```

### Get invoice

```php
$invoice = $client->invoices()->get(123456);
```

### Update invoice

```php
$invoice = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Invoices\Input\Input())
    ->setStatus(1);
    // ->set...

$client->invoices()->update(123456, $invoice);
```

### Create invoice

```php
$invoice = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Invoices\Input\Input())
    ->setStatus(2);
    //->set..
   
$client->invoices()->createForOrder(123, $invoice);
```

## Orders

### Get all orders with order rows
Get all open orders which are paid and completed
```php
$getOrdersParameter = (new \JacobDeKeizer\Ccv\Parameters\Orders\All)
    ->setStatus(1)
    ->setIsPaid(true)
    ->setIsCompleted(true);

do {
    $orders = $client->orders()->all($getOrdersParameter);

    foreach ($orders->getItems() as $order) {
        // see the code and documentation for all available methods
        var_dump($order);
        $order->getUser()->getId();
        $order->getCustomer()->getBillingaddress()->getStreet();
        $order->getCustomer()->getBillingaddress()->getHousenumber();
        $order->getCustomer()->getBillingaddress()->getHousenumberSuffix();
        $order->getCustomer()->getBillingaddress()->getZipcode();
        $order->getCustomer()->getBillingaddress()->getCity();
        $order->getCustomer()->getDeliveryaddress()->getStreet();
        $order->getCustomer()->getDeliveryaddress()->getHousenumber();
        $order->getCustomer()->getDeliveryaddress()->getHousenumberSuffix();
        $order->getCustomer()->getDeliveryaddress()->getZipcode();
        $order->getCustomer()->getDeliveryaddress()->getCity();
        $order->getCustomer()->getBillingaddress()->getFirstName();
        $order->getCustomer()->getBillingaddress()->getLastName();
        $order->getCustomer()->getBillingaddress()->getTelephone();
        $order->getCustomer()->getEmail();

        $orderRows = $client->orderrows()->allFromOrder($order->getId());
        
        var_dump($orderRows);
        
        foreach ($orderRows->getItems() as $orderRow) {
            var_dump($orderRow);

            $orderRow->getId();
            $orderRow->getCount();
            $orderRow->getPrice();
            $orderRow->getProductId();
            $orderRow->getProductName();
            $orderRow->getPriceWithoutDiscount();
            $orderRow->getDiscount();
            $orderRow->getStockLocation();
            $orderRow->getWeight();
            $orderRow->getSubEanNumber();
        }
    }

    $getOrdersParameter = \JacobDeKeizer\Ccv\Parameters\Orders\All::fromUrl($orders->getNext());
} while($getOrdersParameter !== null);
```

### Get order

```php
// see the code and documentation for all available methods
$order = $client->orders()->get(123456);
```

### Update order

For example update the order status and the customer email

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orders\Patch\Patch())
    ->setStatus(6)
    ->setCustomer(
        (new \JacobDeKeizer\Ccv\Models\Internal\Entity\Personalinfo\Input\Input())
            ->setEmail('example@example.com')
    );
    // ->set...

$client->orders()->update(123456, $patch);
```

### Create order

```php
$order = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orders\Post\Post())
    ->setInvoicenumber(123456);
    //->set..
   
$client->orders()->create($order);
```

## Order rows

### Get all order rows of an order

```php
$orderId = 123456;

$parameter = (new \JacobDeKeizer\Ccv\Parameters\OrderRows\AllFromOrder()) // optional parameter
    ->setStart(10);

$orderRows = $client->orderrows()->allFromOrder($orderId, $parameter);

$nextParameter = \JacobDeKeizer\Ccv\Parameters\OrderRows\AllFromOrder::fromUrl($orderRows->getNext());
```

### Get order row

```php
$orderRow = $client->orderrows()->get(336401521);
```

### Update order row
Order must not be completed to update orderrows

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orderrows\Patch\Patch())
    ->setCount(1)
    ->setDiscount(20)
    ->setPrice(100);

$client->orderrows()->update(123456, $patch);
```

### Replace order rows of order

```php
$orderId = 123456;

$newOrderrows = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Orderrows\Put\Put())
    ->setOrderrows(
        (new \JacobDeKeizer\Ccv\Models\Internal\Entity\Orderrow\Input\Input)
            ->setProductId(12345)
            ->setCount(1)
            ->setPrice(100)
            ->setDiscount(20)
            // ->set..
    );

$client->orderrows()->updateForOrder($orderId, $newOrderrows);
```

## Order notes

Order notes are for internal use only; they will not be seen by customers.

### Get all order notes for order

```php
$notes = $client->ordernotes()->allFromOrder(123);
```

### Get order note

```php
$note = $client->ordernotes()->get(123456);
```

### Create order note

```php
$ordernote = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Ordernotes\Post\Post())
    ->setNote('this note will not be seen by the customer');

$client->ordernotes()->createForOrder(123, $ordernote);
```

### Delete order note

```php
$client->ordernotes()->delete(123456);
```

## Order notifications

### Get all order notifications for order

```php
$notifications = $client->ordernotifications()->allFromOrder(123);
```

### Get order notification

```php
$notification = $client->ordernotifications()->get(123456);
```

### Create order notification

```php
$ordernotification = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Ordernotifications\Input\Input())
    ->setType('customer_paymentlink');

$client->ordernotifications()->createForOrder(123, $ordernotification);
```

## Packages

### Get all packages

```php
$packages = $client->packages()->all();
```

### Get package

```php
$package = $client->packages()->get(12345);
```

### Create package

```php
$client->packages()->create(
    (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Packages\Input\Input())
        ->setName('foobar')
);
```

### Update package

```php
$input = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Packages\Input\Input())
    ->setName('baz boo');

$client->packages()->update(12345, $input);
```

## Products

### All products
```php
// parameter is optional
$getProductsParameter = (new \JacobDeKeizer\Ccv\Parameters\Products\All)
    ->setMinStock(5)
    ->expandProductPhotos()
    ->orderByIdAsc();

$products = $client->products()->all($getProductsParameter);

foreach ($products->getItems() as $product) {
    // see the code and documentation for all available methods
    var_dump($product);

    $product->getId();
    $product->getStock();
    $product->getDiscount();
    $product->getWeight();
    $product->getPrice();
    $product->getBrand()->getId();
    $product->getEannumber();
    $product->getVatrate();
    // ...
}

$nextRequest = \JacobDeKeizer\Ccv\Parameters\Products\All::fromUrl($products->getNext());
```

### All products from brand

```php
$products = $client->products()->allFromBrand(1234);
```

### All products from webshop

```php
$products = $client->products()->allFromWebshop(1234);
```

### All products from category

```php
$products = $client->products()->allFromCategory(1234);
```

### All products from condition

```php
$products = $client->products()->allFromCondition(1234);
```

### All products from supplier

```php
$products = $client->products()->allFromSupplier(1234);
```

### Get product

```php
$product = $client->products()->get(1234);
```

### Update product

```php
// see the code and documentation for all available methods
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Products\Patch\Patch())
        ->setDiscount(4.99)
        ->setPrice(100)
        ->setProductnumber('my_number')
        ->setActive(true)
        ->setDescription('This is a description')
        ->setEannumber('an ean number')
        ->setMetaKeywords('keyword')
        ->setStock(100)
        ->setUnit('piece')
        ->setWeight(5.5);

$client->products()->update(1234, $patch);

// or only update stock
$client->products()->update(
    1234,
    (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Products\Patch\Patch())
        ->setStock(99)
);
```

### Create product

```php
// see the code and documentation for all available methods
$product = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Products\Post\Post())
    ->setDiscount(4.99)
    ->setPrice(100)
    ->setProductnumber('my_number')
    ->setActive(true)
    ->setDescription('This is a description')
    ->setEannumber('an ean number')
    ->setMetaKeywords('keyword')
    ->setStock(100)
    ->setUnit('piece')
    ->setWeight(5.5);
    // ->set...

$client->products()->create($product);
```

### Delete product

```php
$client->products()->delete(1234);
```

## Product attribute values

### Get product attribute value

```php
$client->productattributevalues()->get(1234);
```

### Get all product attribute values from a product

```php
$client->productattributevalues()->allFromProduct(1234);
```

### Create product attribute values

```php
$post = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productattributevalues\Post\Post())
    ->setPrice(2);
    // ->set...

$client->productattributevalues()->createForProduct(1234, $post);
```

### Update product attribute values

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productattributevalues\Patch\Patch())
    ->setPrice(2);
    // ->set...

$client->productattributevalues()->update(1234, $patch);
```

### Delete product attribute value

```php
$client->productattributevalues()->delete(1234);
```

## Product photos

### Get product photo

```php
$client->productphotos()->get(1234);
```

### Delete product photo

```php
$client->productphotos()->delete(1234);
```

### Get all photos for product

```php
$client->productphotos()->allFromProduct(1234);
```

### Update product photo

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Patch\Patch())
    ->setAlttext('text')
    ->setIsMainphoto(true);

$client->productphotos()->update(1234, $patch);

```
### Create product photo

```php
// see the code and documentation for all available methods
$post = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post())
    ->setSource(base64_encode(file_get_contents('photo.png')))
    ->setFileType('png');
    // ->set...

$client->productphotos()->createForProduct(1234, $post);
```

### Replace all product photos

```php
// see the code and documentation for all available methods
$productPhoto1 = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post())
    ->setSource(base64_encode(file_get_contents('photo1.png')))
    ->setFileType('png');
    // ->set...

$productPhoto2 = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Post\Post())
    ->setSource(base64_encode(file_get_contents('photo2.jpg')))
    ->setFileType('jpg');
    // ->set...

$put = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Productphotos\Put\Put)
    ->setProductphotos($productPhoto1, $productPhoto2);

$client->productphotos()->updateForProduct(1234, $put);
```

## Product categories

### Create product to category reference

```php
$post = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Producttocategories\Post\Post())
    ->setProductId(123)
    ->setCategoryId(456)
    ->setPosition(null);

$client->producttocategories()->create($post);
```

### Get product to category reference

```php
$client->producttocategories()->get(123);
```

### Get product to category references by product

```php
$client->producttocategories()->allFromProduct(123);
```

### Get product to category references by category

```php
$client->producttocategories()->allFromCategory(123);
```

### Delete product to category by reference

```php
$client->producttocategories()->delete(123);
```

### Update product to category reference

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Producttocategories\Patch\Patch())
    ->setPosition(1);

$client->producttocategories()->update(123, $patch);
```

### Create product to category reference

```php
$post = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Producttocategories\Post\Post())
    ->setProductId(123)
    ->setCategoryId(456)
    ->setPosition(null);

$client->producttocategories()->create($post);
```

### Get product to category reference

```php
$client->producttocategories()->get(123);
```

### Get product to category references by product

```php
$client->producttocategories()->allFromProduct(123);
```

### Get product to category references by category

```php
$client->producttocategories()->allFromCategory(123);
```

### Delete product to category by reference

```php
$client->producttocategories()->delete(123);
```

### Update product to category reference

```php
$patch = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Producttocategories\Patch\Patch())
    ->setPosition(1);

$client->producttocategories()->update(123, $patch);
```

## Suppliers

### Get all suppliers

```php
$suppliers = $client->suppliers()->all();
```

### Get supplier

```php
$supplier = $client->suppliers()->get(12345);
```

### Create supplier

```php
$client->suppliers()->create(
    (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Suppliers\Input\Input())
        ->setName('foobar')
);
```

### Update supplier

```php
$input = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Suppliers\Input\Input())
    ->setName('bazboo');

$client->suppliers()->update(12345, $input);
```

### Delete supplier

```php
$client->suppliers()->delete(12345);
```

## Webhooks

### Get all webhooks

```php
$parameter = (new \JacobDeKeizer\Ccv\Parameters\Webhooks\All())
                ->setSize(10); // optional
                
$webhooks = $client->webhooks()->all($parameter);

$nextParameter = \JacobDeKeizer\Ccv\Parameters\Webhooks\All::fromUrl($webhooks->getNext());
```

### Get a webhook

```php
$webhook = $client->webhooks()->get(12345);
```

### Create a webhook

```php
$webhook = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Webhooks\Post\Post())
    ->setEvent('foo.bar')
    ->setAddress('https://example.com/foo.bar')
    ->setIsActive(true);

$createdWebhook = $client->webhooks()->create($webhook);

var_dump($createdWebhook->getId());
```

### Update a webhook

In this example, the webhook will be disabled.

```php
$webhook = (new \JacobDeKeizer\Ccv\Models\Internal\Resource\Webhooks\Patch\Patch())
                ->setIsActive(false);

$client->webhooks()->update(12345, $webhook);
```

### Delete a webhook

```php
$client->webhooks()->delete(12345);
```
