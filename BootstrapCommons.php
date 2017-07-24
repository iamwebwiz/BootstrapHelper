<?php

class BootstrapCommons {

	public function bsAlert($type, $message){
		try {
			if (isset($type)){
				echo "<div class='alert alert-" . $type . " fade in'>";
				echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo $message;
				echo "</div>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsButton($btnclass, $type, $message, $size = NULL){
		try {
			if (is_null($size)){
				echo "<div style='margin-bottom: 20px'>";
				echo "<button class='btn btn-" . $btnclass . "' type='" . $type ."'>";
				echo $message;
				echo "</button>";
				echo "</div>";
			}
			else {
				echo "<div style='margin-bottom: 20px'>";
				echo "<button class='btn btn-" . $btnclass . " btn-" . $size . "' type='" . $type ."'>";
				echo $message;
				echo "</button>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsPanel($type, $body, $heading = NULL, $footer = NULL){
		try {
			if (is_null($heading) AND is_null($footer)){
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-body'>" . $body . "</div>";
				echo "</div>";
			}
			else if (is_null($footer)){
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-heading'>" . $heading . "</div>";
				echo "<div class='panel-body'>";
				echo $body;
				echo "</div>";
				echo "</div>";
			}
			else if (is_null($heading)){
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-body'>";
				echo $body;
				echo "</div>";
				echo "<div class='panel-footer'>" . $footer . "</div>";
				echo "</div>";
			}
			else {
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-heading'>" . $heading . "</div>";
				echo "<div class='panel-body'>";
				echo "" . $body;
				echo "</div>";
				echo "<div class='panel-footer'>" . $footer . "</div>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsGlyph($name){
		try {
			if (!is_null($name)){
				return "<i class='glyphicon glyphicon-" . $name . "'></i> ";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsLabel($labelClass, $content){
		try {
			if (isset($labelClass)){
				echo "<span class='label label-" . $labelClass . "'>" . $content . "</span>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsText($tag, $content, $textClass = NULL){
		try {
			if (is_null($textClass)){
				echo "<".$tag.">".$content."</".$tag.">";
			}
			else {
				echo "<".$tag." class='text-".$textClass."'>".$content."</".$tag.">";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}
}

$bsHelper = new BootstrapCommons();

