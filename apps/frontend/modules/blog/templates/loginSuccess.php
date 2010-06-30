<head>
<link rel = "stylesheet" type = "text/css" href = "/css/style.css" />
<style type="text/css">
p{text-align:center;
font-size:20px;
font-weight:bold;}
</head>

<?php use_helper('Form');
//echo $hello;
echo form_tag('blog/login');?>
<p> <?php echo "USERNAME";?>
<?php echo input_tag('name', '');?></p>
<p><br><?php echo "PASSWORD";?></br>
<?php echo input_password_tag('password', '');?></p>
<p1 font-weight:normal,text-align:center><br><?php echo submit_tag('login');?></br>
<a href = "http://sruthi.localhost/frontend_dev.php/blog/new">new user</a></p1>
