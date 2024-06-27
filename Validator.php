<?php

Class Validator {

	public static function stringValidation($stringValue, $min = 1, $max = INF) {

		$stringValue = trim($stringValue);

		return strlen($stringValue) >= $min && strlen($stringValue) <= $max;
	}

}
