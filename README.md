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
<div class='alert alert-success'>You are successfully registered!</div>
```

#### Making a panel without heading
If you want to make a panel that has no heading in your project, example:
```php
<?php $bsHelper->bsPanel('primary', 'This is just the beginning of many more greater things!'); ?>
```

#### Making panels with heading
To make panels with heading, for example:
```php
<?php $bsHelper->bsPanels('primary', 'this is the heading', 'this is the body'); ?>
```

#### Making buttons
To make buttons , do, for example:
```php
<?php $bsHelper->bsButton('info', 'Submit'); ?>
```
First parameter is the button class, and the second parameter is the value attribute of the button

### Contributions
If you have some more helper functions you want to add, fork this repository and add your changes, send a pull request and I'll gladly merge!

### Conclusion
Find this utility useful? Kindly star this repository.