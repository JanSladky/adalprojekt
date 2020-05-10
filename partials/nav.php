<?php

	foreach ($navItems as $item) {


	echo '<li><a href="' . $base_url . '/' . $item['name'] . '">' . $item['title'] . '</a></li>';
	}
?>
