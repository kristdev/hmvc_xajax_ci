<?php
 if (!defined ('BASEPATH')) exit ('No direct script access allowed');
 class MY_Form_validation extends CI_Form_validation{
	function run ($module='', $group=''){
		(is_object($module)) and $this->CI= &$module;
		return parent::run($group);
	}
 }
?>