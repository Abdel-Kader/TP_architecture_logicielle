<?php
	require('controllers/controller.php');
	
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'getArticles') {
			getArticles();
		}
		else if($_GET['action'] == 'getItem'){
			getArticle();
		}
	}
	else {
		getArticles();
	}