<div class="be-left-sidebar">
  <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">მენიუ</a>
    <div class="left-sidebar-spacer">
      <div class="left-sidebar-scroll">
        <div class="left-sidebar-content">
          <ul class="sidebar-elements">
            <li class="divider">მენიუ</li>
            <li class="<?php echo (!isset($router[0]) || $router[0] === 'index') ? 'active' : ''; ?>">
              <a href="<?php echo $adminUrl; ?>"><span>მთავარი</span></a>
            </li>
            <li class="parent <?php echo (isset($router[0]) && $router[0] === 'news') ? 'active open' : ''; ?>">
              <a href="#"><span>სიახლეები</span></a>
              <ul class="sub-menu">
                <li class="<?php echo (isset($router[0]) && $router[0] === 'news' && isset($router[1]) && $router[1] === 'add') ? 'active' : ''; ?>">
                  <a href="<?php echo $adminUrl; ?>/news/add">სიახლის დამატება</a>
                </li>
                <li class="<?php echo (isset($router[0]) && $router[0] === 'news' && isset($router[1]) && $router[1] === 'list') ? 'active' : ''; ?>">
                  <a href="<?php echo $adminUrl; ?>/news/list">სიახლეების სია</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>