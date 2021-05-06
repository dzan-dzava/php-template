<nav class="navbar navbar-default navbar-fixed-top be-top-header">
  <div class="container-fluid">
    <div class="navbar-header"><a href="<?php echo $adminUrl; ?>" class="navbar-brand"></a></div>
    <div class="be-right-navbar">
      <ul class="nav navbar-nav navbar-right be-user-nav">
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">
            <img src="<?php echo $baseUrl; ?>assets/admin/img/avatar.png" alt="Avatar">
            <span class="user-name"><?php echo $_SESSION['auth_admin']['name']; ?></span>
          </a>
          <ul role="menu" class="dropdown-menu">
            <li>
              <div class="user-info">
                <div class="user-name"><?php echo $_SESSION['auth_admin']['name']; ?></div>
              </div>
            </li>
            <li><a id="logOutLink" data-base-url="<?php echo $baseUrl; ?>" data-redirect-url="<?php echo $adminUrl . '/login'; ?>" href="javascript:"><span class="icon mdi mdi-power"></span>გამოსვლა</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right be-icons-nav">
        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
          <ul class="dropdown-menu be-notifications">
            <li>
              <div class="title">Notifications<span class="badge">3</span></div>
              <div class="list">
                <div class="be-scroller">
                  <div class="content">
                    <ul>
                      <li class="notification notification-unread"><a href="#">
                          <div class="image"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar2.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                          </div></a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar3.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                          </div></a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar4.png" alt="Avatar"></div>
                          <div class="notification-info">
                            <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                          </div></a></li>
                      <li class="notification"><a href="#">
                          <div class="image"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar5.png" alt="Avatar"></div>
                          <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer"> <a href="#">View all notifications</a></div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>