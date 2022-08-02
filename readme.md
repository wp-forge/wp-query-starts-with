# WordPress Query Starts With

<a href="https://wordpress.org/" target="_blank">
    <img src="https://img.shields.io/static/v1?label=&message=2.8+-+6.0&color=blue&style=flat-square&logo=wordpress&logoColor=white" alt="WordPress Versions">
</a>
<a href="https://www.php.net/" target="_blank">
    <img src="https://img.shields.io/static/v1?label=&message=5.2+-+8.1&color=777bb4&style=flat-square&logo=php&logoColor=white" alt="PHP Versions">
</a>

A Composer package for WordPress that allows you to query posts based on what the title starts with.

## Installation

Install [Composer](https://getcomposer.org/).

In your WordPress plugin or theme directory, run:

```
composer require wp-forge/wp-query-starts-with
```

Make sure you have this line of code in your project:

```php
<?php

require __DIR__ . '/vendor/autoload.php';
```

## Usage

When creating a custom query:

```php
<?php

$query = new WP_Query(
	array(
		'post_type' => 'post',
		'starts_with' => 'Pre', // This is case-sensitive and must match the first part of the post title exactly.
		// ...
	)
);
```
