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
There! You have it!

### Contributions
If you have some more helper functions you want to add, fork this repository and add your changes, send a pull request and I'll gladly merge!

### Rate
Find this utility useful? Kindly star this repository.

## Credits
Thanks to:
- [Elusoji Sodeeq](https://twitter.com/sdktalks) for inspiration
- [Israel Adura](https://github.com/israeladura) for boosting me the JS way!
- [Myself](https://twitter.com/iamwebwiz) for "staying with the keys!", lol