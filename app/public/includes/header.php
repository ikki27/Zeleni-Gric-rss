<?php
// header.php
$title = $title ?? 'Zeleni Grič';
?>
<!DOCTYPE html>
<html lang="sl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($title) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/style.css"><!-- absolutna pot, da deluje z include -->
</head>
<body>
<?php include __DIR__ . '/nav.php'; ?>