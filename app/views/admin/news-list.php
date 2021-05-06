<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo $baseUrl; ?>assets/img/favicon.ico">
  <title><?php echo $appInfo->SiteName; ?> - სიახლეების სია</title>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/select2/css/select2.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>assets/admin/lib/bootstrap-slider/css/bootstrap-slider.css"/>
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/css/style.css" type="text/css"/>
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>assets/admin/css/main.css">
</head>
<body>
  <div class="be-wrapper be-fixed-sidebar">
    
    <?php require_once 'app/views/admin/layouts/header.php'; ?>

    <?php require_once 'app/views/admin/layouts/sidebar.php'; ?>

    <div class="be-content">
      <div class="page-head">
        <h2 class="page-head-title">Form Elements</h2>
        <ol class="breadcrumb page-head-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">Forms</a></li>
          <li class="active">Elements</li>
        </ol>
      </div>
      <div class="main-content container-fluid">
        <!--Basic forms-->
        <div class="row">
          <div class="col-sm-6">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Basic Form<span class="panel-subtitle">This is the default bootstrap form layout</span></div>
              <div class="panel-body">
                <form>
                  <div class="form-group xs-pt-10">
                    <label>Email address</label>
                    <input type="email" placeholder="Enter email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="form-control">
                  </div>
                  <div class="row xs-pt-15">
                    <div class="col-xs-6">
                      <div class="be-checkbox">
                        <input id="check1" type="checkbox">
                        <label for="check1">Remember me</label>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                        <button class="btn btn-space btn-default">Cancel</button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Horizontal Form<span class="panel-subtitle">This is the horizontal bootstrap layout</span></div>
              <div class="panel-body">
                <form class="form-horizontal">
                  <div class="form-group xs-mt-10">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input id="inputEmail3" type="email" placeholder="Email" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input id="inputPassword3" type="password" placeholder="Password" class="form-control">
                    </div>
                  </div>
                  <div class="row xs-pt-15">
                    <div class="col-xs-6">
                      <div class="be-checkbox">
                        <input id="check2" type="checkbox">
                        <label for="check2">Remember me</label>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Register</button>
                        <button class="btn btn-space btn-default">Cancel</button>
                      </p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Basic Elements-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Basic Elements<span class="panel-subtitle">These are the basic bootstrap form elements</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Input Text</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Input Password</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Placeholder Input</label>
                    <div class="col-sm-6">
                      <input type="text" placeholder="Placeholder text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Disabled Input</label>
                    <div class="col-sm-6">
                      <input type="text" disabled="disabled" placeholder="Disabled input text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Readonly Input</label>
                    <div class="col-sm-6">
                      <input type="text" readonly="readonly" value="Readonly input text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Textarea</label>
                    <div class="col-sm-6">
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Sizing-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Input Sizing<span class="panel-subtitle">These are the different form control component sizes</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Large</label>
                    <div class="col-sm-6">
                      <input type="text" value="Large input" class="form-control input-lg">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Default</label>
                    <div class="col-sm-6">
                      <input type="text" value="Default input" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Small</label>
                    <div class="col-sm-6">
                      <input type="text" value="Small input" class="form-control input-sm">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Extra Small</label>
                    <div class="col-sm-6 xs-pt-5">
                      <input type="text" value="Extra small input" class="form-control input-xs">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Select & Option Elements-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Select & Option Elements<span class="panel-subtitle">Advanced custom radio & checkboxes components with pure css</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label xs-pt-20">Icon Radio</label>
                    <div class="col-sm-6">
                      <div class="be-radio-icon inline">
                        <input type="radio" checked="" name="rad1" id="rad1">
                        <label for="rad1"><span class="mdi mdi-female"></span></label>
                      </div>
                      <div class="be-radio-icon inline">
                        <input type="radio" name="rad1" id="rad2">
                        <label for="rad2"><span class="mdi mdi-male-alt"></span></label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Checkbox</label>
                    <div class="col-sm-6">
                      <div class="be-checkbox">
                        <input id="check3" type="checkbox" checked="">
                        <label for="check3">Option 1</label>
                      </div>
                      <div class="be-checkbox">
                        <input id="check4" type="checkbox">
                        <label for="check4">Option 2</label>
                      </div>
                      <div class="be-checkbox">
                        <input id="check5" type="checkbox">
                        <label for="check5">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Inline Checkbox</label>
                    <div class="col-sm-6">
                      <div class="be-checkbox inline">
                        <input id="check6" type="checkbox" checked="">
                        <label for="check6">Option 1</label>
                      </div>
                      <div class="be-checkbox inline">
                        <input id="check7" type="checkbox">
                        <label for="check7">Option 2</label>
                      </div>
                      <div class="be-checkbox inline">
                        <input id="check8" type="checkbox">
                        <label for="check8">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Full Color</label>
                    <div class="col-sm-6">
                      <div class="be-checkbox be-checkbox-color inline">
                        <input id="check9" type="checkbox" checked="">
                        <label for="check9">Option 1</label>
                      </div>
                      <div class="be-checkbox be-checkbox-color inline">
                        <input id="check10" type="checkbox">
                        <label for="check10">Option 2</label>
                      </div>
                      <div class="be-checkbox be-checkbox-color inline">
                        <input id="check11" type="checkbox">
                        <label for="check11">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Radio</label>
                    <div class="col-sm-6">
                      <div class="be-radio">
                        <input type="radio" checked="" name="rad2" id="rad3">
                        <label for="rad3">Option 1</label>
                      </div>
                      <div class="be-radio">
                        <input type="radio" name="rad2" id="rad4">
                        <label for="rad4">Option 2</label>
                      </div>
                      <div class="be-radio">
                        <input type="radio" name="rad2" id="rad5">
                        <label for="rad5">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Inline Radio</label>
                    <div class="col-sm-6">
                      <div class="be-radio inline">
                        <input type="radio" checked="" name="rad3" id="rad6">
                        <label for="rad6">Option 1</label>
                      </div>
                      <div class="be-radio inline">
                        <input type="radio" checked="" name="rad3" id="rad7">
                        <label for="rad7">Option 2</label>
                      </div>
                      <div class="be-radio inline">
                        <input type="radio" checked="" name="rad3" id="rad8">
                        <label for="rad8">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Full Color</label>
                    <div class="col-sm-6">
                      <div class="be-radio be-radio-color inline">
                        <input type="radio" checked="" name="rad4" id="rad9">
                        <label for="rad9">Option 1</label>
                      </div>
                      <div class="be-radio be-radio-color inline">
                        <input type="radio" name="rad4" id="rad10">
                        <label for="rad10">Option 2</label>
                      </div>
                      <div class="be-radio be-radio-color inline">
                        <input type="radio" name="rad4" id="rad11">
                        <label for="rad11">Option 3</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Basic Select</label>
                    <div class="col-sm-6">
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Multiple Select</label>
                    <div class="col-sm-6">
                      <select multiple="" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Validation States-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Validation States<span class="panel-subtitle">Default bootstrap validation states</span></div>
              <div class="panel-body">
                <form action="#" class="form-horizontal group-border-dashed">
                  <div class="form-group has-success">
                    <label class="col-sm-3 control-label">Success</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group has-warning">
                    <label class="col-sm-3 control-label">Warning</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="form-group has-error">
                    <label class="col-sm-3 control-label">Danger</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                  <div class="panel-divider"></div>
                  <div class="form-group has-success has-feedback">
                    <label class="col-sm-3 control-label">Success</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"><span class="mdi mdi-check form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="form-group has-warning has-feedback">
                    <label class="col-sm-3 control-label">Warning</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"><span class="mdi mdi-alert-triangle form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="form-group has-error has-feedback">
                    <label class="col-sm-3 control-label">Danger</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"><span class="mdi mdi-close form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="panel-divider"></div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Checkbox</label>
                    <div class="col-sm-6">
                      <div class="be-checkbox has-success">
                        <input id="checksucc" type="checkbox" checked="">
                        <label for="checksucc">Success</label>
                      </div>
                      <div class="be-checkbox has-warning">
                        <input id="checkwarn" type="checkbox">
                        <label for="checkwarn">Warning</label>
                      </div>
                      <div class="be-checkbox has-danger">
                        <input id="checkdang" type="checkbox">
                        <label for="checkdang">Danger</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Full Color</label>
                    <div class="col-sm-6">
                      <div class="be-checkbox be-checkbox-color has-success inline">
                        <input id="checkinsucc" type="checkbox" checked="">
                        <label for="checkinsucc">Success</label>
                      </div>
                      <div class="be-checkbox be-checkbox-color has-warning inline">
                        <input id="checkinwarn" type="checkbox" checked="">
                        <label for="checkinwarn">Warning</label>
                      </div>
                      <div class="be-checkbox be-checkbox-color has-danger inline">
                        <input id="checkindang" type="checkbox" checked="">
                        <label for="checkindang">Danger</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Radio</label>
                    <div class="col-sm-6">
                      <div class="be-radio has-success">
                        <input type="radio" checked="" name="rad2" id="radsucc">
                        <label for="radsucc">Success</label>
                      </div>
                      <div class="be-radio has-warning">
                        <input type="radio" name="rad2" id="radwarn">
                        <label for="radwarn">Warning</label>
                      </div>
                      <div class="be-radio has-danger">
                        <input type="radio" name="rad2" id="raddang">
                        <label for="raddang">Danger</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Inline Radio</label>
                    <div class="col-sm-6">
                      <div class="be-radio has-success inline">
                        <input type="radio" checked="" name="rad3" id="radinsucc">
                        <label for="radinsucc">Success</label>
                      </div>
                      <div class="be-radio has-warning inline">
                        <input type="radio" name="rad3" id="radinwarn">
                        <label for="radinwarn">Warning</label>
                      </div>
                      <div class="be-radio has-danger inline">
                        <input type="radio" name="rad3" id="radindang">
                        <label for="radindang">Danger</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Full Color</label>
                    <div class="col-sm-6">
                      <div class="be-radio be-radio-color has-success inline">
                        <input type="radio" checked="" name="rad4" id="rad34">
                        <label for="rad34">Success</label>
                      </div>
                      <div class="be-radio be-radio-color has-warning inline">
                        <input type="radio" name="rad4" id="rad35">
                        <label for="rad35">Warning</label>
                      </div>
                      <div class="be-radio be-radio-color has-danger inline">
                        <input type="radio" name="rad4" id="rad36">
                        <label for="rad36">Danger</label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Input Groups-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Input Groups<span class="panel-subtitle">Bootstrap input groups components</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Input Text</label>
                    <div class="col-sm-6">
                      <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group xs-mb-15">
                        <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                      </div>
                      <div class="input-group xs-mb-15"><span class="input-group-addon">$</span>
                        <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Input Sizing</label>
                    <div class="col-sm-6">
                      <div class="input-group input-group-lg xs-mb-15"><span class="input-group-addon">@</span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group xs-mb-15"><span class="input-group-addon">@</span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                      <div class="input-group input-group-sm xs-mb-15"><span class="input-group-addon">@</span>
                        <input type="text" placeholder="Username" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Checkbox & Radio</label>
                    <div class="col-sm-6">
                      <div class="input-group xs-mb-15">
                        <div class="input-group-addon">
                          <div class="be-checkbox">
                            <input type="checkbox" id="check12">
                            <label for="check12"></label>
                          </div>
                        </div>
                        <input type="text" class="form-control">
                      </div>
                      <div class="input-group xs-mb-15">
                        <div class="input-group-addon">
                          <div class="be-radio">
                            <input type="radio" id="rad12">
                            <label for="rad12"></label>
                          </div>
                        </div>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Button Addons</label>
                    <div class="col-sm-6">
                      <div class="input-group xs-mb-15">
                        <input type="text" class="form-control"><span class="input-group-btn">
                          <button type="button" class="btn btn-primary">Go!</button></span>
                      </div>
                      <div class="input-group xs-mb-15">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="input-group xs-mb-15">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                          <button tabindex="-1" type="button" class="btn btn-primary">Action</button>
                          <button tabindex="-1" data-toggle="dropdown" type="button" class="btn btn-primary btn-shade1 dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                          <ul role="menu" class="dropdown-menu pull-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Swtich Component-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Switch Component<span class="panel-subtitle">Custom switch component using only css</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Sizes</label>
                    <div class="col-sm-6">
                      <div class="switch-button switch-button-xs">
                        <input type="checkbox" checked="" name="swt1" id="swt1"><span>
                          <label for="swt1"></label></span>
                      </div>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="swt2" id="swt2"><span>
                          <label for="swt2"></label></span>
                      </div>
                      <div class="switch-button">
                        <input type="checkbox" checked="" name="swt3" id="swt3"><span>
                          <label for="swt3"></label></span>
                      </div>
                      <div class="switch-button switch-button-lg">
                        <input type="checkbox" checked="" name="swt4" id="swt4"><span>
                          <label for="swt4"></label></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Success</label>
                    <div class="col-sm-6 xs-pt-5">
                      <div class="switch-button switch-button-success">
                        <input type="checkbox" checked="" name="swt5" id="swt5"><span>
                          <label for="swt5"></label></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Warning</label>
                    <div class="col-sm-6 xs-pt-5">
                      <div class="switch-button switch-button-warning">
                        <input type="checkbox" checked="" name="swt6" id="swt6"><span>
                          <label for="swt6"></label></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Danger</label>
                    <div class="col-sm-6 xs-pt-5">
                      <div class="switch-button switch-button-danger">
                        <input type="checkbox" checked="" name="swt7" id="swt7"><span>
                          <label for="swt7"></label></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Yes/No Labels</label>
                    <div class="col-sm-6 xs-pt-5">
                      <div class="switch-button switch-button-yesno">
                        <input type="checkbox" checked="" name="swt8" id="swt8"><span>
                          <label for="swt8"></label></span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Datepicker-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Date Picker<span class="panel-subtitle">Datepicker bootstrap plugin</span></div>
              <div class="panel-body">
                <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Default</label>
                    <div class="col-sm-6">
                      <input type="text" value="" class="form-control datetimepicker">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Read Only</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" readonly="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label"> Only Date </label>
                    <div class="col-md-3 col-xs-7">
                      <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Decade View</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-start-view="4" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Year View</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-start-view="3" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Month View</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-start-view="2" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Day View</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hour View</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Day View Meridian</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-show-meridian="true" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Hour View Meridian</label>
                    <div class="col-md-3 col-xs-7">
                      <div data-show-meridian="true" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1" class="input-group date datetimepicker">
                        <input size="16" type="text" value="" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--Select2 & Slider-->
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default panel-border-color panel-border-color-primary">
              <div class="panel-heading panel-heading-divider">Advanced Controls<span class="panel-subtitle">Select2 & Bootstrap slider plugins</span></div>
              <div class="panel-body">
                <form action="#" class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Select2</label>
                    <div class="col-sm-6">
                      <select class="select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ">Arizona</option>
                          <option value="CO">Colorado</option>
                          <option value="ID">Idaho</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NM">New Mexico</option>
                          <option value="ND">North Dakota</option>
                          <option value="UT">Utah</option>
                          <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL">Alabama</option>
                          <option value="AR">Arkansas</option>
                          <option value="IL">Illinois</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="OK">Oklahoma</option>
                          <option value="SD">South Dakota</option>
                          <option value="TX">Texas</option>
                          <option value="TN">Tennessee</option>
                          <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="IN">Indiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="OH">Ohio</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WV">West Virginia</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">MultiTag Input</label>
                    <div class="col-sm-6">
                      <select multiple="" class="tags">
                        <option value="1">Green</option>
                        <option value="2">Red</option>
                        <option value="3">Blue</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Multitag from Select</label>
                    <div class="col-sm-6">
                      <select multiple="" class="select2">
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                          <option value="AK">Alaska</option>
                          <option value="HI">Hawaii</option>
                        </optgroup>
                        <optgroup label="Pacific Time Zone">
                          <option value="CA">California</option>
                          <option value="NV">Nevada</option>
                          <option value="OR">Oregon</option>
                          <option value="WA">Washington</option>
                        </optgroup>
                        <optgroup label="Mountain Time Zone">
                          <option value="AZ">Arizona</option>
                          <option value="CO">Colorado</option>
                          <option value="ID">Idaho</option>
                          <option value="MT">Montana</option>
                          <option value="NE">Nebraska</option>
                          <option value="NM">New Mexico</option>
                          <option value="ND">North Dakota</option>
                          <option value="UT">Utah</option>
                          <option value="WY">Wyoming</option>
                        </optgroup>
                        <optgroup label="Central Time Zone">
                          <option value="AL">Alabama</option>
                          <option value="AR">Arkansas</option>
                          <option value="IL">Illinois</option>
                          <option value="IA">Iowa</option>
                          <option value="KS">Kansas</option>
                          <option value="KY">Kentucky</option>
                          <option value="LA">Louisiana</option>
                          <option value="MN">Minnesota</option>
                          <option value="MS">Mississippi</option>
                          <option value="MO">Missouri</option>
                          <option value="OK">Oklahoma</option>
                          <option value="SD">South Dakota</option>
                          <option value="TX">Texas</option>
                          <option value="TN">Tennessee</option>
                          <option value="WI">Wisconsin</option>
                        </optgroup>
                        <optgroup label="Eastern Time Zone">
                          <option value="CT">Connecticut</option>
                          <option value="DE">Delaware</option>
                          <option value="FL">Florida</option>
                          <option value="GA">Georgia</option>
                          <option value="IN">Indiana</option>
                          <option value="ME">Maine</option>
                          <option value="MD">Maryland</option>
                          <option value="MA">Massachusetts</option>
                          <option value="MI">Michigan</option>
                          <option value="NH">New Hampshire</option>
                          <option value="NJ">New Jersey</option>
                          <option value="NY">New York</option>
                          <option value="NC">North Carolina</option>
                          <option value="OH">Ohio</option>
                          <option value="PA">Pennsylvania</option>
                          <option value="RI">Rhode Island</option>
                          <option value="SC">South Carolina</option>
                          <option value="VT">Vermont</option>
                          <option value="VA">Virginia</option>
                          <option value="WV">West Virginia</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Slider</label>
                    <div class="col-sm-6">
                      <input type="text" value="" class="bslider form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Range Slider</label>
                    <div class="col-sm-6">
                      <input type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="" class="bslider form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Vertical Slider</label>
                    <div class="col-sm-6">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-2" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                      <input type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="" class="form-control bslider">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="be-right-sidebar">
      <div class="sb-content">
        <div class="tab-navigation">
          <ul role="tablist" class="nav nav-tabs nav-justified">
            <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
            <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
            <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
          </ul>
        </div>
        <div class="tab-panel">
          <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane tab-chat active">
              <div class="chat-contacts">
                <div class="chat-sections">
                  <div class="be-scroller">
                    <div class="content">
                      <h2>Recent</h2>
                      <div class="contact-list contact-list-recent">
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar1.png" alt="Avatar">
                            <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span><span class="message">Can you share the...</span></div></a></div>
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar2.png" alt="Avatar">
                            <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span><span class="message">I confirmed the info.</span></div></a></div>
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar3.png" alt="Avatar">
                            <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span><span class="message">Ready for the meeti...</span></div></a></div>
                      </div>
                      <h2>Contacts</h2>
                      <div class="contact-list">
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar4.png" alt="Avatar">
                            <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div></a></div>
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar5.png" alt="Avatar">
                            <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div></a></div>
                        <div class="user"><a href="#"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar6.png" alt="Avatar">
                            <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bottom-input">
                  <input type="text" placeholder="Search..." name="q"><span class="mdi mdi-search"></span>
                </div>
              </div>
              <div class="chat-window">
                <div class="title">
                  <div class="user"><img src="<?php echo $baseUrl; ?>assets/admin/img/avatar2.png" alt="Avatar">
                    <h2>Maggie jackson</h2><span>Active 1h ago</span>
                  </div><span class="icon return mdi mdi-chevron-left"></span>
                </div>
                <div class="chat-messages">
                  <div class="be-scroller">
                    <div class="content">
                      <ul>
                        <li class="friend">
                          <div class="msg">Hello</div>
                        </li>
                        <li class="self">
                          <div class="msg">Hi, how are you?</div>
                        </li>
                        <li class="friend">
                          <div class="msg">Good, I'll need support with my pc</div>
                        </li>
                        <li class="self">
                          <div class="msg">Sure, just tell me what is going on with your computer?</div>
                        </li>
                        <li class="friend">
                          <div class="msg">I don't know it just turns off suddenly</div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="chat-input">
                  <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                    <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab2" role="tabpanel" class="tab-pane tab-todo">
              <div class="todo-container">
                <div class="todo-wrapper">
                  <div class="be-scroller">
                    <div class="todo-content"><span class="category-title">Today</span>
                      <ul class="todo-list">
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo1" type="checkbox" checked="">
                            <label for="todo1">Initialize the project</label>
                          </div>
                        </li>
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo2" type="checkbox">
                            <label for="todo2">Create the main structure</label>
                          </div>
                        </li>
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo3" type="checkbox">
                            <label for="todo3">Updates changes to GitHub</label>
                          </div>
                        </li>
                      </ul><span class="category-title">Tomorrow</span>
                      <ul class="todo-list">
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo4" type="checkbox">
                            <label for="todo4">Initialize the project</label>
                          </div>
                        </li>
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo5" type="checkbox">
                            <label for="todo5">Create the main structure</label>
                          </div>
                        </li>
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo6" type="checkbox">
                            <label for="todo6">Updates changes to GitHub</label>
                          </div>
                        </li>
                        <li>
                          <div class="be-checkbox be-checkbox-sm"><span class="delete mdi mdi-delete"></span>
                            <input id="todo7" type="checkbox">
                            <label for="todo7" title="This task is too long to be displayed in a normal space!">This task is too long to be displayed in a normal space!</label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="bottom-input">
                  <input type="text" placeholder="Create new task..." name="q"><span class="mdi mdi-plus"></span>
                </div>
              </div>
            </div>
            <div id="tab3" role="tabpanel" class="tab-pane tab-settings">
              <div class="settings-wrapper">
                <div class="be-scroller"><span class="category-title">General</span>
                  <ul class="settings-list">
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="st1" id="st1"><span>
                          <label for="st1"></label></span>
                      </div><span class="name">Available</span>
                    </li>
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="st2" id="st2"><span>
                          <label for="st2"></label></span>
                      </div><span class="name">Enable notifications</span>
                    </li>
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="st3" id="st3"><span>
                          <label for="st3"></label></span>
                      </div><span class="name">Login with Facebook</span>
                    </li>
                  </ul><span class="category-title">Notifications</span>
                  <ul class="settings-list">
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" name="st4" id="st4"><span>
                          <label for="st4"></label></span>
                      </div><span class="name">Email notifications</span>
                    </li>
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="st5" id="st5"><span>
                          <label for="st5"></label></span>
                      </div><span class="name">Project updates</span>
                    </li>
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" checked="" name="st6" id="st6"><span>
                          <label for="st6"></label></span>
                      </div><span class="name">New comments</span>
                    </li>
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" name="st7" id="st7"><span>
                          <label for="st7"></label></span>
                      </div><span class="name">Chat messages</span>
                    </li>
                  </ul><span class="category-title">Workflow</span>
                  <ul class="settings-list">
                    <li>
                      <div class="switch-button switch-button-sm">
                        <input type="checkbox" name="st8" id="st8"><span>
                          <label for="st8"></label></span>
                      </div><span class="name">Deploy on commit</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/js/main.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/moment.js/min/moment.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/select2/js/select2.min.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/lib/bootstrap-slider/js/bootstrap-slider.js" type="text/javascript"></script>
  <script src="<?php echo $baseUrl; ?>assets/admin/js/app-form-elements.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      //initialize the javascript
      App.init();
      App.formElements();
    });
  </script>
</body>
</html>