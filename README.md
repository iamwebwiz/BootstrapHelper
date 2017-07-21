# BootstrapHelper
A bunch of bootstrap helper functions that make writing some very basic and common stuffs easy

## Requirements
- PHP
- Bootstrap

## Usage
- In order to use these helper functions, all you have to do is include the *BootstrapCommons.php* in your PHP scripts, well, the ones that uses Bootstrap in them anyways (usually front-end/views as the case may be).
- When *BootstrapCommons.php* is successfully included in your script(s), all you have to do is to invoke the methods/functions in the BootstapCommons.php file through the object already instantiated (**$bsHelper**).

#### Making alerts
- To make use of the alert helper method, all you need to do is: 
	```php
	<?php $bsHelper->bsAlert('success', 'You are successfully registered!'); ?>
	```
This is going to display a dismissable success alert carrying _You are successfully registered_ in it: just as if you typed 
	```php
	<div class='alert alert-success'>You are successfully registered</div>
	```

#### Making a panel without heading
If you want to make a panel that has no heading