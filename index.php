<?php
function loadCache()
{
  $cacheFileName = './cache/file.txt';
  $hasCache = file_exists($cacheFileName);
  if ($hasCache) {
    return file_get_contents($cacheFileName);
  }

  file_put_contents($cacheFileName, "THIS IS CACHE.(" . date("Y-m-d H:i:s") . ")");
  return "NOT USE CACHE.";
}
?>
<html>

<head>
  <title>project</title>
</head>

<body>
  <h1><?php echo loadCache(); ?></h1>
</body>

</html>
