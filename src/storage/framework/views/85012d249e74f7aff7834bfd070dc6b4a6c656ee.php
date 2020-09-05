<?php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo e(config('app.name')); ?></title>

  <link rel="stylesheet" href="<?php echo e(mix('dist/css/app.css')); ?>">
</head>
<body>
  <div id="app"></div>

  
  <script>
    window.config = <?php echo json_encode($config, 15, 512) ?>;
  </script>

  
  <script src="<?php echo e(mix('dist/js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/spa.blade.php ENDPATH**/ ?>