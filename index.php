<?php
const CACHE_FILE_PATH = 'cache/file.txt';
function loadText()
{
  if (file_exists(CACHE_FILE_PATH)) {
    return file_get_contents(CACHE_FILE_PATH);
  }

  file_put_contents(CACHE_FILE_PATH, "THIS IS CACHE.(" . date("Y-m-d H:i:s") . ")");
  return "NOT USE CACHE.";
}
?>
<html>

<head>
  <title>project</title>
</head>

<body>
  <h1>Hello</h1>
  <h2><?php echo loadText(); ?></h2>
</body>

</html>
