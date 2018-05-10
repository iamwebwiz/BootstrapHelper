<?php

/* CHANGELOG
*  Sometimes you wanna add custom classes for these components, this feature is now
*  supported. simply include an array of your custom classes in the classlists
*  Added class show to bsAlert, so as to support bootstrap 4
*  
*/

class BootstrapCommons {

    public function bsAlert($type, $message, Array $classes = NULL){
        try {
            if (isset($type)){
                echo "<div class='alert alert-" . $type . $this->classes($classes) . " fade in show'>";
                echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
                echo $message;
                echo "</div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    public function bsButton($btnclass, $type, $message, Array $classes = NULL, $size = NULL){
        try {
            if (is_null($size)){
                echo "<div style='margin-bottom: 20px'>";
                echo "<button class='btn btn-" . $btnclass . $this->classes($classes) . "' type='" . $type ."'>";
                echo $message;
                echo "</button>";
                echo "</div>";
            } else {
                echo "<div style='margin-bottom: 20px'>";
                echo "<button class='btn btn-" . $btnclass . " btn-" . $size . $this->classes($classes) . "' type='" . $type ."'>";
                echo $message;
                echo "</button>";
                echo "</div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    // Panels are for older bs versions < 4.0. Gotta add support for cards
    // ToDo, add custom class support for this too. I just don't know where to start from
    public function bsPanel($type, $body, $heading = NULL, $footer = NULL){
        try {
            if (is_null($heading) AND is_null($footer)){
                echo "<div class='panel panel-" . $type . "'>";
                echo "<div class='panel-body'>" . $body . "</div>";
                echo "</div>";
            } else if (is_null($footer)){
                echo "<div class='panel panel-" . $type . "'>";
                echo "<div class='panel-heading'>" . $heading . "</div>";
                echo "<div class='panel-body'>";
                echo $body;
                echo "</div>";
                echo "</div>";
            } else if (is_null($heading)){
                echo "<div class='panel panel-" . $type . "'>";
                echo "<div class='panel-body'>";
                echo $body;
                echo "</div>";
                echo "<div class='panel-footer'>" . $footer . "</div>";
                echo "</div>";
            } else {
                echo "<div class='panel panel-" . $type . "'>";
                echo "<div class='panel-heading'>" . $heading . "</div>";
                echo "<div class='panel-body'>";
                echo "" . $body;
                echo "</div>";
                echo "<div class='panel-footer'>" . $footer . "</div>";
                echo "</div>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    public function bsGlyph($name, Array $classes = NULL){
        try {
            if (!is_null($name)){
                return "<i class='glyphicon glyphicon-" . $name . $this->classes($classes) . "'></i> ";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    // Labels have been replaced by badges, gotta add support for badges later too.
    public function bsLabel($labelClass, $content, Array $classes = NULL){
        try {
            if (isset($labelClass)){
                return "<span class='label label-" . $labelClass . $this->classes($classes) . "'>" . $content . "</span>";
            }
        } catch (Exception $e){
            // nothing to do...
        }
    }

    public function bsText($tag, $content, $textClass = NULL, Array $classes = NULL){
        try {
            if (is_null($textClass)){
                return "<".$tag." class = '". $this->classes($classes) ."'>".$content."</".$tag.">";
            } else {
                return "<".$tag." class='text-".$textClass . $this->classes($classes) ."'>".$content."</".$tag.">";
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

    // This function is used to handle custom classes arrays passed into each function
    public function classes(Array $classlist = NULL){
        
        // I don't wanna handle the case in which there are no custom classes from each function, better to just handle it here.
        if ($classlist == NULL) {
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
