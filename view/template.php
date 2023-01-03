<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script defer src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="public/styles.css" />
</head>
<body>
    <?= $html ?>
    <div id="map"></div>
    <script type="text/javascript" src="public/app.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkkQ7ppb6I76nMzr73Ee1heLnglIO9Fs0&callback=initMap&v=weekly"
      defer
    ></script>
</body>
</html>