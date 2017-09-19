<?php

class ErrorHandler{
	function set($name,$msg){
		$session = new Session();
		$session->set('error_'.$name, $msg);
	}
	function get($name){
		$session = new Session();
		return $session->get('error_'.$name);
	}
	function display($name){
		?>
		<div class="alert alert-danger">
			<?php echo '('.$name . ') ' .$this->get($name)?>
		</div>
		<?php
	}
}