<?php

// Déclaration du tableau des recettes
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'c est la recette',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'c est la recette',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'c est la recette',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => 'c est la recette',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
	<h1>Affichage des recettes</h1>
	<?php foreach($recipes as $recipe) { ?>
		<?php if ($recipe['is_enabled']) { ?>
			<h2><?php echo $recipe['title']; ?></h2>
			<p><?php echo $recipe['recipe']; ?><br>
			<i><?php echo $recipe['author']; ?></i></p>
		<?php } ?>
	<?php } ?>
</body>
</html>