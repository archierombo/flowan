<?php
/**
 * Created by PhpStorm.
 * User: archie
 * Date: 3/30/16
 * Time: 5:15 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Flowan General Suppliers | Contact</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Custom Css-->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!--font awesome-->
    <link href="font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="row"><!--menu-->
    <div class="col-sm-12 col-md-12">
        <nav class="navbar navbar-default">
            <div class="container-fluid" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.1);height: 73px;">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo2.png" class="img-responsive"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <!--              <li><a href="#">About Us</a> </li>-->
                        <li><a href="#">Supplies</a> </li>
                        <li class="active"><a href="contact.php">Contact</a> </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</div><!--menu-->
<div class="row ruler"><!--Contact Form and Contact Information-->
    <div class="col-md-9"><!--Contact Form-->
        <h4 id="contacth4">Contact Form</h4>
        <form name="contactform" method="post" action="email_form.php" id="form">
            <div class="row-fluid">
                <div class="col-md-4">
                    <p>Name&nbsp;<sup>*</sup></p>
                    <p><input type="text" class="form-control" placeholder="e.g John Doe" required id="name"></p>
                    <p>&nbsp;</p>
                </div>
                <div class="col-md-4">
                    <p>Email&nbsp;<sup>*</sup></p>
                    <p><input type="email" class="form-control"  name="email" placeholder="e.g me@me.com" required id="email" title="Type Your Email Address here"></p>
                    <p>&nbsp;</p>
                </div>
                <div class="col-md-4">
                    <p>Subject&nbsp;<sup>*</sup></p>
                    <p><input type="text" class="form-control" placeholder="e.g Inquiry" required id="subject"></p>
                    <p>&nbsp;</p>
                </div>
                <div class="row-fluid">
                    <div class="col-md-12">
                        <p>Message&nbsp;<sup>*</sup></p>
                        <textarea class="form-control" rows="8"  name="message" required id='message' title="Type Your Message here"></textarea>
                        <p>&nbsp;</p>
                        <button type="submit" class="btn  btn-lg btn-primary">Send Email</button>
                        <p>&nbsp;</p>

                    </div>

                </div>

            </div>
        </form>
    </div><!--Contact Form-->
    <div class="col-md-3"><!--Location &amp; Contact Information-->
        <h4 id="addressh4">Contact Info</h4>
        <p style="line-height: 2;">
            <i class="fa fa-mobile fa-lg"></i>&nbsp;+254 (0)734 398 100<br>
            <i class="fa fa-envelope-o fa-lg"></i>&nbsp;info@flowangeneralsupplies.co.ke
        </p>

    </div><!--Location &amp; Contact Information-->
</div><!--Contact Form and Contact Information-->
<footer class="row">
    <p><i class="fa fa-copyright"></i> &nbsp;<?php echo date('Y'); ?>&nbsp; Flowan General Suppliers&nbsp;| All Rights Reserved</p>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    $(function(){
        $('#form').submit(function(e){

            // Stop the form actually posting
            e.preventDefault();

            // Send the request
            $.post('email_form.php', {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#message').val(),

            }, function(d){
                console.log(d);
                // Here we handle the response from the script
                // We are just going to alert the result for now
                alert(d);
                $('form').clearForm()

            });
        });

    });


    $.fn.clearForm = function() {
        return this.each(function() {
            var type = this.type, tag = this.tagName.toLowerCase();
            if (tag == 'form')
                return $(':input',this).clearForm();
            if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'email')
                this.value = '';
            else if (type == 'checkbox' || type == 'radio')
                this.checked = false;
            else if (tag == 'select')
                this.selectedIndex = -1;
        });
    };




</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
?>