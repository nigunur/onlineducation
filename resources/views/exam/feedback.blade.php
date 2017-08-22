<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Şikayət və Təkliflər</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>

    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'") ;</script>';}
?>
<!--alert message end-->

</head>

<body>

<!--header start-->
<div class="row header">
    <div class="col-lg-6">
        <span class="logo">Onlayn Təhsil Mərkəzi</span></div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4">
        <?php
        include_once 'dbConnection.php';
        session_start();
        if((!isset($_SESSION['email']))){
            echo '<a href="#" class="pull-right sub1 btn title3" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Daxil Ol</a>&nbsp;';}
        else
        {
            echo '<a href="logout.php?q=feedback.php" class="pull-right sub1 btn title3"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Çıxış</a>&nbsp;';}
        ?>

        <a href="index.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Ana Səhifə</a>&nbsp;
    </div></div>

<!--sign in modal start-->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content title1">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title title1"><span style="color:orange">Şəxsi Kabinet</span></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                    <fieldset>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email"></label>
                            <div class="col-md-6">
                                <input id="email" name="email" placeholder="Poçt Adresinizi Daxil Edin" class="form-control input-md" type="email">

                            </div>
                        </div>

                        <!-- Password input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password"></label>
                            <div class="col-md-6">
                                <input id="password" name="password" placeholder="Şifrənizi Daxil Edin" class="form-control input-md" type="password">

                            </div>
                        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Bağla</button>
                <button type="submit" class="btn btn-primary">Daxil Ol</button>
                </fieldset>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--header end-->

<div class="bg1">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 panel" style="background-image:url(image/bg1.jpg); min-height:430px;">
            <h2 align="center" style="font-family:'Tahoma'; color:cornsilk">Şikayət və Təklifləriniz</h2>
            <div style="font-size:14px; color:cornsilk">
                <?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
                else
                {echo'
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Adınız və Soyadınız:</b><br /><br /><br /><b>Mövzu Başlığı:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name"  class="form-control input-md" type="text"><br />
   <input id="name" name="subject"  class="form-control input-md" type="text">

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>Poçt Adresiniz:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email"  class="form-control input-md" type="email">
 </div>
</div>
</div><!--End of row-->

<div class="form-group">
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Şikayət və Təklifinizi buraya yazın..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Göndər" class="btn btn-primary" />
</div>
</form>';}?>
            </div><!--col-md-6 end-->
            <div class="col-md-3"></div></div>
    </div></div>
</div><!--container end-->


<!--Footer start-->
<div class="row footer">
    <div class="col-md-3 box">
        <a href="http://www.onlayn-tehsil.com" target="_blank">Sayta Keçid</a>
    </div>
    <div class="col-md-3 box">
        <a href="#" data-toggle="modal" data-target="#login">İmtahan Nəzarətçisi</a></div>
    <div class="col-md-3 box">
        <a href="feedback.php" target="_blank">Şikayət və Təkliflər</a></div></div>
<!-- Modal For Developers-->

<!--Modal for admin login-->
<div class="modal fade" id="login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Bağla</span></button>
                <h4 class="modal-title"><span style="color:orange;font-family:'Tahoma' ">Şəxsi Kabinet</span></h4>
            </div>
            <div class="modal-body title1">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form role="form" method="post" action="admin.php?q=index.php">
                            <div class="form-group">
                                <input type="text" name="uname" maxlength="20"  placeholder="Nəzarətçinin Poçt Adresi" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" maxlength="15" placeholder="Nəzarətçinin Şifrəsi" class="form-control"/>
                            </div>
                            <div class="form-group" align="center">
                                <input type="submit" name="login" value="Daxil Ol" class="btn btn-primary" />
                            </div>
                        </form>
                    </div><div class="col-md-3"></div></div>
            </div>
            <!--<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>