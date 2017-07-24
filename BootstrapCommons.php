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

	public function bsButton($btnclass, $type, $message){
		try {
			if (isset($type)){
				echo "<div style='margin-bottom: 20px'>";
				echo "<button class='btn btn-" . $btnclass . "' type='" . $type ."'>";
				echo $message;
				echo "</button>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsPanel($type, $body){
		try {
			if (!empty($type) && !empty($body)){
				echo "<div class='panel panel-" . $type . "'>";
				echo "<div class='panel-body'>";
				echo $body;
				echo "</div>";
				echo "</div>";
			}
		}
		catch (Exception $e){
			// nothing to do...
		}
	}

	public function bsPanels($type, $heading, $body){
		if (!empty($type) && !empty($body)){
			try {
				if (isset($heading)){
					echo "<div class='panel panel-" . $type . "'>";
					echo "<div class='panel-heading'>" . $heading . "</div>";
					echo "<div class='panel-body'>";
					echo $body;
					echo "</div>";
					echo "</div>";
				}
				else {
					echo "<div class='panel panel-" . $type . "'>";
					echo "<div class='panel-body'>";
					echo $body;
					echo "</div>";
					echo "</div>";
				}
			}
			catch (Exception $e){
				// nothing to do...
			}
		}
	}

	public function bsGlyph($name){
		try {
			if (isset($name)){
				echo "<span class='glyphicon glyphicon-" . $name . "'></span>";
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

