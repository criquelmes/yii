<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $this->pageTitle;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl;?>/css/responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.png">
  </head>
  <body>

<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo Yii::app()->homeUrl;?>">
        <img alt="brand" src="<?php echo Yii::app()->theme->baseUrl;?>/img/brand_img.png">Sigma
      </a>

      <div class="nav-collapse collapse pull-right">
        <?php $this->widget('zii.widgets.CMenu',array(
          'htmlOptions'=>array("class"=>"nav"),
          'items'=>array(
            #array('label'=>'Inicio', 'url'=>array('/site/index')),
            array('label'=>'Administrar Personal', 'url'=>array('/personals/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Usuarios', 'url'=>array('/users/index'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>

      </div><!--/.nav-collapse -->

    </div>
  </div>
</div>

<?php if(!empty($this->breadcrumbs)):?>
  <div class="container" style="padding:0">
  <div class="row-fluid">
  <div class="span12">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'htmlOptions'=>array("style"=>"margin: 10px 0;"),
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
  </div>
  </div> 
  </div>
<?php endif?>
<?php if(($msgs=Yii::app()->user->getFlashes())!==null and $msgs!==array()):?>
  <div class="container" style="padding-top:0">
    <div class="row-fluid">
      <div class="span12">
        <?php foreach($msgs as $type => $message):?>
          <div class="alert alert-<?php echo $type?>">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><?php echo ucfirst($type)?>!</h4>
            <?php echo $message?>
          </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
<?php endif;?>

<?php echo $content;?>

<footer class="footer-credits">
  <div class="container">
    <ul class="clearfix">
      <li>© 2014 Sigma SA.</li>
      <li>Diagonal Oriente #5170 Ñuñoa, Santiago</li>
      <li>Teléfono: <a href="tel:+5629636400" class="tele">+56 2 9636400</a></li>
      <li>Email: <a href="mailto:email@sigmasa.cl"> email@sigmasa.cl</a></li>
    </ul>
  </div>
  <!--close footer-credits container-->
</footer>

  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/bootstrap.min.js"></script>
  <script src="<?php echo Yii::app()->theme->baseUrl;?>/js/jquery.price_format.2.0.js"></script>
  </body>
</html>
