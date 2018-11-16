<?php

	class PHPLegacyDebugger {

		private $state = [];

		public function __construct() {}

		public function getState(){
			return $this->state;
		}

		public function printState(){
			echo json_encode($this->getState());
		}

		public function subscribe($name, $variable) {
			$stateobj[$name] = $variable;
			array_push($this->state, $stateobj);
		}

	}

?>