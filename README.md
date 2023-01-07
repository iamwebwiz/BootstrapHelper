# BootstrapHelper
A bunch of bootstrap helper functions that make writing some very basic and common stuffs easy

## Requirements
- PHP
- Bootstrap
- JQuery

## Usage
- In order to use these helper functions, all you have to do is include the *BootstrapCommons.php* in your PHP scripts, well, the ones that uses Bootstrap in them anyways (usually front-end/views as the case may be).
- When *BootstrapCommons.php* is successfully included in your script(s), all you have to do is to invoke the methods/functions in the BootstapCommons.php file through the object already instantiated (**$bsHelper**).

#### Making alerts
To make use of the alert helper method, all you need to do is:
```php
<?php $bsHelper->bsAlert('success', 'You are successfully registered!'); ?>
```
This is going to display a dismissable success alert carrying _You are successfully registered_ in it: just as if you typed
```html
<div class='alert alert-success'>You are successfully registered!</div>
```

#### Making panels with or without heading and footer
To make panels with heading, for example:
```php
<?php $bsHelper->bsPanel('primary', 'this is the body of the panel', 'Panel heading', 'Panel footer'); ?>
```
The heading and footer parameters are optional, to produce a panel with body and footer only, you can say, for example:
```php
<?php $bsHelper->bsPanel('default', 'body of the panel', null, 'panel footer') ?>
```
In the same vein, to produce a panel with heading and body only, you can say, for example:
```php
<?php $bsHelper->bsPanel('primary', 'body of the panel', 'panel heading') ?>
```

#### Making buttons
To make buttons , do, for example:
```php
<?php $bsHelper->bsButton('info', 'Submit'); ?>
```
First parameter is the button class, and the second parameter is the value attribute of the button

#### Making Bootstrap Labels
To make labels, do, for example:
```php
<?php $bsHelper->bsLabel('success', '3 New Messages'); ?>
```
This helper takes two parameters, first is the class of the label, and second is the content/message of the label

#### Making Contextual Texts
If you want to make contextual texts by using classes provided by Twitter Bootstrap, such as this
```html
<h1 class='text-info'>Heading with info class</h1>
```
You only need to call on the method *bsText()* of the helper file. It takes three parameters:
- The tag (HTML tag e.g 'p', 'h1', 'h5')
- The content (this is the text you want to display e.g 'Heading with info class')
- The class (this is the bootstrap contextual class you want to use e.g. _text-info_)
Note that the third parameter is optional, if you do not insert the third parameter , you are still going to have your content anyways.
Reproducing the HTML code above using the helper method will look like this:
```php
<?php $bsHelper->bsText('h1', 'Heading with info class', 'info'); ?>
```

You can also use custom classes to further style your elements. These classes are passed as arguments (in an array form) into the corresponding function. For example:
```php
<?php $bsHelper->bsText('h1', 'Heading with info class', 'info', ['text-center', 'anotherclass']); ?>
```
or alternatively (and more preferrably)
```php
<?php $bsHelper->bsText('h1', 'Heading with info class', 'info', ['text-center anotherclass yetanotherclass']); ?>
```

To see how many of these can be used, check out test.php to see the live demo. You could also just pick up the code from there to use.

There! You have it! Hopefuly, more functions will be added in the future.

### Contributions
If you have some more helper functions you want to add, fork this repository and add your changes, send a pull request and I'll gladly merge!

### Rate
Find this utility useful? Kindly star this repository.

## Credits
Thanks to:
- [Elusoji Sodeeq](https://twitter.com/sdktalks)
- [Israel Adura](https://github.com/israeladura)
- [Myself](https://twitter.com/iamwebwiz)
