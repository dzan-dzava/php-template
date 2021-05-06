<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:title" content="<?php echo $appInfo->TitlePrefix . $pageData['page_title_'.$lang]; ?>">
  <meta property="og:description" content="<?php echo $pageData['meta_desc_'.$lang] ?>">
  <meta property="og:image" content="http://site.com/thumbnail.jpg for Social Media reccomended 1200x630 less than 1MB">
  <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' && $_SERVER['SERVER_PORT'] === 443 ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:site_name" content="<?php echo $appInfo->SiteName; ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image:alt" content="Alt text for image">
  <meta name="description" content="<?php echo $pageData['meta_desc_'.$lang] ?>">
  <title><?php echo $appInfo->TitlePrefix . $pageData['page_title_'.$lang]; ?></title>
  <link rel="shortcut icon" href="<?php echo $baseUrl; ?>assets/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/grid.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/main.css">
</head>
<body>

  <?php require_once 'app/views/layouts/header.php'; ?>

  <div class="news">
    <div class="news__content">
      <div class="container">
<?php
      $sql = "SELECT id, title_{$lang} FROM news ORDER BY rank DESC";
      $sth = $dbh->query($sql);
      $news_row = $sth->fetchAll(PDO::FETCH_ASSOC);
      
      foreach($news_row as $news) {
        echo $news['title_'.$lang];
      }
?>
      </div>
    </div>
  </div>

  <?php require_once 'app/views/layouts/footer.php'; ?>

  <script src="<?php echo $baseUrl; ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/app.js"></script>
  <script>

    $(function() {

    });

  </script>
</body>
</html>
