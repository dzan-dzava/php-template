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
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/css/main.css">
</head>
<body>

  <?php require_once 'app/views/layouts/header.php'; ?>

  <div class="contact">
    <div class="contact__content">
      <div class="container">
        <form id="contactForm" class="contact__form" novalidate>
          <div class="contact__form-group">
            <label class="contact__form-label"><?php echo $appWords->ContactForm->Labels->Name; ?></label>
            <input id="contactFormName" type="text" class="contact__form-control" autocomplete="off">
            <div class="contact__form-error"></div>
          </div>
          <div class="contact__form-group">
            <label class="contact__form-label"><?php echo $appWords->ContactForm->Labels->Email; ?></label>
            <input id="contactFormEmail" type="email" class="contact__form-control" autocomplete="off">
            <div class="contact__form-error"></div>
          </div>
          <div class="contact__form-group">
            <label class="contact__form-label"><?php echo $appWords->ContactForm->Labels->Text; ?></label>
            <textarea id="contactFormText" class="contact__form-textarea"></textarea>
            <div class="contact__form-error"></div>
          </div>
          <div class="contact__form-group">
            <button type="submit"><?php echo $appWords->ContactForm->Button; ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php require_once 'app/views/layouts/footer.php'; ?>

  <script src="<?php echo $baseUrl; ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo $baseUrl; ?>assets/js/app.js"></script>
  <script>

    $(function() {

      var submitted = false;
      var emailRegExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      var form = $('#contactForm');
      var formNameElement = $('#contactFormName');
      var formEmailElement = $('#contactFormEmail');
      var formTextElement = $('#contactFormText');

      form.on('submit', function(e) {
        e.preventDefault();
        submitted = true;

        var formNameValue = formNameElement.val();
        var formEmailValue = formEmailElement.val();
        var formTextValue = formTextElement.val();

        if(formNameValue && formEmailValue && emailRegExp.test(formEmailValue) && formTextValue) {
          
          $.ajax({
            type: 'GET',
            url: '<?php echo $baseUrl; ?>app/xhr/contact-form.php',
            data: {
              sendEmail: true,
              baseUrl: '<?php echo $baseUrl; ?>',
              siteName: '<?php echo $appInfo->SiteName; ?>',
              name: formNameValue,
              email: formEmailValue,
              text: formTextValue
            },
            success: function(res) {
              
            }
          });

        } else {
          
          if(!formNameValue) {
            formNameElement.next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
          }

          if(!formEmailValue) {
            formEmailElement.next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
          } else if(!emailRegExp.test(formEmailValue)) {
            formEmailElement.next().text('<?php echo $appWords->ContactForm->Alerts->InvalidEmail; ?>');
          }

          if(!formTextValue) {
            formTextElement.next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
          }

        }
        
      });

      formNameElement.on({
        keydown: function(e) {
          if(!e.target.value && e.keyCode === 32) {
            e.preventDefault();
          }
        },
        input: function(e) {
          if(submitted) {
            if(e.target.value) {
              $(this).next().text('');
            } else {
              $(this).next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
            }
          }
        }
      });

      formEmailElement.on({
        keydown: function(e) {
          if(e.keyCode === 32) {
            e.preventDefault();
          }
        },
        input: function(e) {
          if(submitted) {
            if(e.target.value && emailRegExp.test(e.target.value)) {
              $(this).next().text('');
            } else {
              if(!e.target.value) {
                $(this).next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
              } else if(!emailRegExp.test(e.target.value)) {
                $(this).next().text('<?php echo $appWords->ContactForm->Alerts->InvalidEmail; ?>');
              }
            }
          }
        }
      });

      formTextElement.on('input', function(e) {
        if(submitted) {
          if(e.target.value) {
            $(this).next().text('');
          } else {
            $(this).next().text('<?php echo $appWords->ContactForm->Alerts->RequiredField; ?>');
          }
        }
      });

    });

  </script>
</body>
</html>
