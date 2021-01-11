<?php

/* CHANGELOG
*  Sometimes you want to add custom classes for these components, this feature is now
*  supported. Simply include an array of your custom classes in the classlists
*  Added class show to bsAlert, so as to support bootstrap 4
*  
*/

class BootstrapCommons {

    /**
     * Alert Component
     * 
     * @param  string       $type
     * @param  string       $message
     * @param  Array|null   $classes
     * @return string
     */
    public function bsAlert($type, $message, Array $classes = NULL){
        try {
            if (isset($type)){
                return "<div class='alert alert-$type {$this->classes($classes)} fade in show'>
                            <a href=# class=close data-dismiss='alert' aria-label=close>&times;</a>
                            $message
                        </div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    /**
     * Button Component
     * 
     * @param  string     $btnclass
     * @param  string     $type
     * @param  string     $message
     * @param  Array|null $classes
     * @param  string     $size
     * @return string
     */
    public function bsButton($btnclass, $type, $message, Array $classes = NULL, $size = NULL){
        try {
            if (is_null($size)){
                return "<button class='btn btn-$btnclass {$this->classes($classes)}' 
                        type='$type'>
                            $message
                        </button>";
            } else {
                return "<button class='btn btn-$btnclass btn-$size {$this->classes($classes)}'
                        type='$type'>
                            $message
                        </button>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    // Panels are for older bs versions < 4.0. Gotta add support for cards
    // ToDo, add custom class support for this too. I just don't know where to start from
    
    /**
     * Panel Component
     * 
     * @param  string $type
     * @param  string $body
     * @param  string $heading
     * @param  string $footer
     * @return string
     */
    public function bsPanel($type, $body, $heading = NULL, $footer = NULL){
        try {
            if (is_null($heading) AND is_null($footer)){
                return "<div class='panel panel-$type'>
                            <div class='panel-body'>
                                $body
                            </div>
                        </div>";
            } else if (is_null($footer)){
                return "<div class='panel panel-$type'>
                            <div class='panel-heading'>
                                $heading
                            </div>
                            <div class='panel-body'>
                                $body
                            </div>
                        </div>";
            } else if (is_null($heading)){
                return "<div class='panel panel-$type'>
                            <div class='panel-body'>
                                $body
                            </div>
                            <div class='panel-footer'>
                                $footer
                            </div>
                        </div>";
            } else {
                return "<div class='panel panel-$type'>
                            <div class='panel-heading'>
                                $heading
                            </div>
                            <div class='panel-body'>
                                $body
                            </div>
                            <div class='panel-footer'>
                                $footer
                            </div>
                        </div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    /**
     * Glyphicon Component
     * 
     * @param  string     $name
     * @param  Array|null $classes
     * @return string
     */
    public function bsGlyphicon($name, Array $classes = NULL){
        try {
            if (!is_null($name)){
                return "<i class='glyphicon glyphicon-$name {$this->classes($classes)}'></i>'";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }
    
    /**
     * Label Component
     * 
     * @param  string     $labelClass
     * @param  string     $content
     * @param  Array|null $classes
     * @return string
     */
    // Labels have been replaced by badges, gotta add support for badges later too.
    public function bsLabel($labelClass, $content, Array $classes = NULL){
        try {
            if (isset($labelClass)){
                return "<span class='label label-$labelClass {$this->classes($classes)}'>
                            $content
                        </span>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    /**
     * Text Component
     * 
     * @param  string     $tag
     * @param  string     $content
     * @param  string     $textClass
     * @param  Array|null $classes
     * @return string
     */
    public function bsText($tag, $content, $textClass = NULL, Array $classes = NULL){
        try {
            if (is_null($textClass)){
                return "<$tag class='{$this->classes($classes)}'> 
                            $content 
                        </$tag>";
            } else {
                return "<$tag class='text-$textClass {$this->classes($classes)}'> 
                            $content 
                        </$tag>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    

    /* Contributions by Santiago (@itope84) starts here
    *  I plan to include this in an external file and include it here to reduce error risks
    *  This line just for fun :-)
    * 
    */
    // public function b

    /**
     * Handle custom classes arrays passed into each function
     * 
     * @param  Array|null $classlist
     * @return string
     */
    public function classes(Array $classlist = NULL){
        
        // I don't want to handle the case in which there are no custom classes from each function, better to just handle it here.
        
        if (is_null($classlist)) {
            return "";
        }

        $classes = '';
        foreach ($classlist as $key => $class) {
            $classes .= " ".$class;
        }
        return $classes;
    }
}

$bsHelper = new BootstrapCommons();
