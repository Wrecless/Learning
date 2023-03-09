<?php
$Bruno = [
    'name' => 'Bruno',
    'age' => 25,
    'job' => 'Developer'
];
$Sam = [
    'name' => 'Sam',
    'age' => 30,
    'job' => 'Designer'
];
$Brian = [
    'name' => 'Brian',
    'age' => 35,
    'job' => 'Manager'
];

$users = [
    $Bruno,
    $Sam,
    $Brian
];

echo $users[2]['name']; // Brian

$articlex = [
    [
        'title' => 'Article One',
        'author' => 'Bruno',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.'
    ],
    [
        'title' => 'Article Two',
        'author' => 'Sam',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.'
    ],
    [
        'title' => 'Article Three',
        'author' => 'Brian',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quod.'
    ]
];

$db_host = "localhost";
$db_name = "cms";
$db_user = "cms_www";
$db_pass = "*n4Sk!O2rp59uxgp";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

echo "Connected to database: " . $db_name;

$sql = "SELECT * FROM articles ORDER BY published_at;";

$results = mysqli_query($connection, $sql);

if ($results === false){
    echo mysqli_error($connection);
}
else
{
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
</head>
<body>
<main>
    <?php if (empty($articles)): ?>
		<p>No articles found.</p>
    <?php else: ?>
	<ul>
        <?php foreach($users as $user): ?>
			<li><?php echo $user['name']; ?></li>
        <?php endforeach; ?>
	</ul>
	<ul>
        <?php foreach($articles as $article): ?>
			<li>
				<h3><?php echo $article['title']; ?></h3>
				<p><?php echo $article['content']; ?></p>
			</li>
        <?php endforeach; ?>
	</ul>
	<?php endif; ?>
</main>

</body>
</html>