<?php
  if($multipleLang) {
?>
  <div class="container">
    <ul class="languages">
<?php
      if(stripos($_SERVER['REQUEST_URI'], '?')) {
        $req_uri = substr($_SERVER['REQUEST_URI'], stripos($_SERVER['REQUEST_URI'], '?'));
      } else {
        $req_uri = '';
      }

      foreach($allowedLanguages as $language) {
?>
        <li>
          <a href="<?php echo  $router || stripos($_SERVER['REQUEST_URI'], '?') ? $baseUrl . $language .'/' . implode('/', $router) . $req_uri : $baseUrl . $language; ?>"><?php echo $appInfo->LanguagesTitles->{$language} ?></a>
        </li>
<?php
      }
?>
    </ul>
  </div>
<?php
  }
?>
<header class="header__wrapper">
  <div class="container">
    <a class="header__logo" href="<?php echo $baseUrl; ?>"></a>
    <nav class="header__nav">
      <ul class="main-menu">
<?php
        $sql = "SELECT name, title_{$lang}, has_child FROM main_menu WHERE is_published='1' ORDER BY rank DESC";
        $sth = $dbh->query($sql);
        $m_row = $sth->fetchAll(PDO::FETCH_ASSOC);

        foreach($m_row as $m_item) {

          if($m_item['has_child'] != 1) {
?>
            <li><a href="<?php echo $multipleLang ? $baseUrl.$lang.'/'.$m_item['name'] : $baseUrl.$m_item['name']; ?>"><?php echo $m_item['title_'.$lang]; ?></a></li>
<?php
          } else {

            $sql = "SELECT name, title_{$lang} FROM sub_menu WHERE parent='{$m_item['name']}' AND is_published='1' ORDER BY rank DESC";
            $sth = $dbh->query($sql);

            if($sth->rowCount() > 0) {

              $s_row = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
              <li>
                <a href="javascript:"><?php echo $m_item['title_'.$lang] ?></a>
                <ul class="sub-menu">
<?php
                foreach($s_row as $s_item) {
?>
                  <li><a href="<?php echo $multipleLang ? $baseUrl.$lang.'/'.$m_item['name'].'/'.$s_item['name'] : $baseUrl.$m_item['name'].'/'.$s_item['name']; ?>"><?php echo $s_item['title_'.$lang] ?></a></li>
<?php
                }
?>
                </ul>
              </li>
<?php
            }

          }

        }
?>
      </ul>
    </nav>
  </div>
</header>
