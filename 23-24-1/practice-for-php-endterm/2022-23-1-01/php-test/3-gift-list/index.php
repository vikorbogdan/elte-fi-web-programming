<?php

$members = json_decode(file_get_contents("members.json"), true);

if (count($_POST) > 0) {
  $name = $_POST["name"];
  $member = [
    "name" => $name,
    "id" => uniqid()
  ];
  $members[] = $member;
  file_put_contents("members.json", json_encode($members, JSON_PRETTY_PRINT));
}

function countStatistics($member_id)
{
  $ideas = json_decode(file_get_contents("ideas.json"), true);
  $ideas_by_member = array_filter($ideas, function ($idea) use ($member_id) {
    return $idea["member_id"] === $member_id;
  });
  $numberOfActives = count(array_filter($ideas_by_member, function ($idea) {
    return $idea['active'] === true;
  }));
  $numberOfReadies = count(array_filter($ideas_by_member, function ($idea) {
    return $idea['state'] === "ready";
  }));

  return "(" . strval($numberOfReadies) . "/" . strval($numberOfActives) . ")";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 3</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <h1>Task 3: Gift list</h1>
  <h2>My family members</h2>
  <form action="" method="post">
    Name: <input type="text" name="name" required>
    <button type="submit">Add</button>
  </form>
  <ul>
    <?php foreach ($members as $member) : ?>
      <li>
        <a href="member.php?id=<?= $member['id'] ?>">
          <?=
          $member['name']
          ?>
        </a>
        <span><?= countStatistics($member['id']) ?></span>
      </li>
    <?php endforeach ?>
  </ul>
</body>

</html>