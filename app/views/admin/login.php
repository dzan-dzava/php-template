<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo $baseUrl; ?>assets/img/favicon.ico">
  <title><?php echo $appInfo->SiteName; ?> - შესვლა</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/jquery.gritter/css/jquery.gritter.css"/>
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/css/style.css" type="text/css"/>
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/css/main.css">
</head>
<body class="be-splash-screen">
  <div class="be-wrapper be-login">
    <div class="be-content">
      <div class="main-content container-fluid">
        <div class="splash-container">
          <div class="panel panel-default panel-border-color panel-border-color-primary">
            <div class="panel-heading">
              <img src="<?php echo $baseUrl; ?>assets/img/logo.png" alt="logo" class="logo-img">
            </div>
            <div class="panel-body">
              <form id="loginForm">
                <div class="form-group">
                  <input id="loginAdministrator" type="text" placeholder="ადმინისტრატორი" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                  <input id="loginPassword" type="password" placeholder="პაროლი" class="form-control">
                </div>
                <div class="form-group login-submit">
                  <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">შესვლა</button>
                </div>
              </form>
            </div>
          </div>
          <div class="splash-footer"><a href="<?php echo $baseUrl; ?>">მთავარ გვერდზე გადასვლა</a></div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/js/main.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
  <script type="text/javascript">

    $(document).ready(function() {

      // initialize the javascript
      App.init();

      $('#loginForm').on('submit', function(event) {

        event.preventDefault();
        
        var loginAdminElement = $('#loginAdministrator');
        var loginAdminValue = loginAdminElement.val();
        var loginPasswordElement = $('#loginPassword');
        var loginPasswordValue = loginPasswordElement.val();

        if(loginAdminValue !== '' && loginPasswordValue !== '') {

          $.ajax({
            type: 'POST',
            url: '<?php echo $baseUrl; ?>app/xhr/admin/login.php',
            data: {
              login: true,
              administrator: loginAdminValue,
              password: loginPasswordValue
            },
            success: function(res) {

              var res = JSON.parse(res);
              
              if(res.access === true) {

                window.location.href = '<?php echo $adminUrl; ?>';

              } else {

                loginAdminElement.val('');
                loginPasswordElement.val('');
                
                $.gritter.add({
                  title: 'შეცდომა',
                  text: 'ადმინისტრატორი ან პაროლი არასწორია',
                  class_name: 'color danger'
                });

              }
              
            }
          });

        } else {

          $.gritter.add({
            title: 'შეცდომა',
            text: 'ორივე ველის შევსება აუცილებელია',
            class_name: 'color danger'
          });

        }

      });

    });
    
  </script>
</body>
</html>