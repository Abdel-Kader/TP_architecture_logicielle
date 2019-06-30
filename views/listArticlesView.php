<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualités MGLSI</title>
	<link rel="stylesheet" type="text/css" href="public/styles/style.css">
</head>
<body>
	<?php require_once 'enteteView.php'; ?>
	<div id="contenu">
		<?php
			foreach ($articles as $article)
            {?>
                <div class="article">
                    <h1><a href="index.php?action=getItem&amp;id=<?= $article->id ?>"><?= $article->titre ?></a></h1>
                    <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
                </div><?php
            }
		?>
	</div>
	<?php 
		require('menuView.php');
	?>
</body>
</html>