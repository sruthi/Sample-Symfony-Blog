<head>
<link rel = "stylesheet" type = "text/css" href = "/css/style.css" />
<style type="text/css">
p {text-align:center;
font-weight:bold;
font-color:black;}
th {text-align:center;
background-color:lightblue;}
</style>
</head>

<?php use_helper('Form');
//echo $hello;
echo form_tag('blog/login');?>

<table>
<th><p> <?php echo "USERNAME";?>
<?php echo input_tag('name', '');?></p>
<p><br><?php echo "PASSWORD";?></br>
<?php echo input_password_tag('password', '');?></p>
<p><br><?php echo submit_tag('login');?></br>
<a href = "http://sruthi.localhost/frontend_dev.php/blog/new">new user</a></p>
</th></table>
