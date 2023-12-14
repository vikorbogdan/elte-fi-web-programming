<?php


$members = json_decode(file_get_contents("members.json"), true);

$id = $_GET["id"] ?? "";

$member_data = current(array_filter($members, function ($member) use ($id) {
  return $member["id"] === $id;
}));
$ideas = json_decode(file_get_contents("ideas.json"), true);
if ($_POST) {
  if (isset($_POST['function-add'])) {
    $idea_text = $_POST["idea"];
    $idea_to_add = [
      "name" => $idea_text,
      "active" => true,
      "state" => false,
      "comments" => [],
      "member_id" => $member_data["id"],
      "id" => uniqid()
    ];
    $ideas[] = $idea_to_add;
    file_put_contents("ideas.json", json_encode($ideas, JSON_PRETTY_PRINT));
  } else if (isset($_POST['add-comment'])) {
    $idea_data = current(array_filter($ideas, function ($idea) {
      return $idea["id"] === $_POST['idea-id'];
    }));
    // remove original item from the array
    $key = array_search($idea_data, $ideas);
    array_splice($ideas, (int)$key, 1);
    // update the element and put it inside the array
    $idea_data['comments'][] = $_POST['comment'];
    $ideas[] = $idea_data;
    file_put_contents("ideas.json", json_encode($ideas, JSON_PRETTY_PRINT));
  } else if (isset($_POST['complete'])) {
    $idea_data = current(array_filter($ideas, function ($idea) {
      return $idea["id"] === $_POST['idea-id'];
    }));
    // remove original item from the array
    $key = array_search($idea_data, $ideas);
    array_splice($ideas, (int)$key, 1);
    // change the ready key's value to true
    $idea_data['state'] = "ready";
    $ideas[] = $idea_data;
    file_put_contents("ideas.json", json_encode($ideas, JSON_PRETTY_PRINT));
  } else if (isset($_POST['hide'])) {
    $idea_data = current(array_filter($ideas, function ($idea) {
      return $idea["id"] === $_POST['idea-id'];
    }));
    // remove original item from the array
    $key = array_search($idea_data, $ideas);
    array_splice($ideas, (int)$key, 1);
    // change the ready key's value to true
    $idea_data['active'] = false;
    $ideas[] = $idea_data;
    file_put_contents("ideas.json", json_encode($ideas, JSON_PRETTY_PRINT));
  }
}

$ideas_by_user = array_filter($ideas, function ($idea) use ($member_data) {
  return $idea["member_id"] === $member_data["id"];
});


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
  <a href="index.php">Back to main page</a>
  <h2>Ideas for <?= $member_data['name'] ?></h2>
  <form action="" method="post">
    <fieldset>
      <legend>New idea</legend>
      Idea: <input type="text" name="idea" required>
      <button name="function-add" type="submit">Add new idea</button>
    </fieldset>
  </form>
  <?php foreach ($ideas_by_user as $idea) : ?>
    <?php if ($idea['active']) : ?>
      <details>
        <summary>
          <?= $idea['name'] ?> <?= $idea['state'] === "ready" ? "<span>✓</span>" : "" ?>
        </summary>
        <form action="" method="post">
          <input type="hidden" name="idea-id" value="<?= $idea['id'] ?>">
          Comment: <input type="text" name="comment" required>
          <button type="submit" name="add-comment">Add comment</button> <br>
        </form>
        <form action="" method="post">
          <input type="hidden" name="idea-id" value="<?= $idea['id'] ?>">
          <button type="submit" name="complete">Complete</button>
          <button type="submit" name="hide">Hide</button>
        </form>
        <ul>
          <?php foreach ($idea['comments'] as $comment) : ?>
            <li><?= $comment ?></li>
          <?php endforeach; ?>
        </ul>
      </details>
    <?php endif; ?>
  <?php endforeach; ?>
</body>

</html>