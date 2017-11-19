<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<li>
		<a href="'.site_url('film/film_control').'"><i class="fa fa-book"></i> Data film </a>
	</li><li>
		<a href="'.site_url('customer/customer_control').'"><i class="fa fa-list-alt"></i> Data Customer </a>
	</li>';
	}