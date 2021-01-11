<?php

/* CHANGELOG
*  Sometimes you want to add custom classes for these components, this feature is now
*  supported. Simply include an array of your custom classes in the classlists
*  Added class show to bsAlert, so as to support bootstrap 4
*  
*  ## 2021-01-11
* - Added Progress, Card and Badge components
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
        // Panels are for older Bootstrap versions < 4.0
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
    
    public function bsLabel($labelClass, $content, Array $classes = NULL){
        // Labels have been replaced by Badges
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

    /**
     * Bootstrap Progress Component
     * 
     * @param  int          $valueMin
     * @param  int          $valueNow
     * @param  int          $valueMax
     * @param  Array|null   $classes
     * 
     * @return string
     */
    public function bsProgress($valueMin, $valueNow, $valueMax, Array $classes = NULL){

        //Filter variables
        $valueMin = filter_var($valueMin, FILTER_SANITIZE_NUMBER_INT);
        $valueNow = filter_var($valueNow, FILTER_SANITIZE_NUMBER_INT);
        $valueMax = filter_var($valueMax, FILTER_SANITIZE_NUMBER_INT);

        try {
            return "<div class='progress'>
                        <div class='progress-bar {$this->classes($classes)}' role='progressbar' style='width: $valueNow%' 
                            aria-valuenow='$valueNow' aria-valuemin='$valueMin' aria-valuemax='$valueMax'>
                        </div>
                    </div>";
        } catch (Exception $e){
            // nothing to do...
        }
    }

    /**
     * Card Component
     * 
     * @param  string $body
     * @param  string $header
     * @param  string $footer
     * @return string
     */
    public function bsCard($body, $header = NULL, $footer = NULL){
        try {
            if (is_null($header) AND is_null($footer)){
                return "<div class='card'>
                            <div class='card-body'>
                                $body
                            </div>
                        </div>";
            } else if (is_null($footer)){
                return "<div class='card'>
                            <div class='card-header'>
                                $header
                            </div>
                            <div class='card-body'>
                                $body
                            </div>
                        </div>";
            } else if (is_null($header)){
                return "<div class='card'>
                            <div class='card-body'>
                                $body
                            </div>
                            <div class='card-footer'>
                                $footer
                            </div>
                        </div>";
            } else {
                return "<div class='card'>
                            <div class='card-header'>
                                $header
                            </div>
                            <div class='card-body'>
                                $body
                            </div>
                            <div class='card-footer'>
                                $footer
                            </div>
                        </div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    /**
     * Badge Component
     * 
     * @param  string       $content
     * @param  string       $type
     * @param  Array|null   $classes
     * @return string
     */
    public function bsBadge($content, $type, Array $classes = NULL){
        try {
            if (isset($type)){
                return "<span class='badge badge-$type {$this->classes($classes)}'>
                            $content
                        </span>";
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
