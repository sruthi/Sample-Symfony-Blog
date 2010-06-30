<head>
<style type = "text/css">
p{text-align:center;
font-size:20px;}
</style>
</head>

<?php 
echo use_helper('Form');
echo form_tag('blog/post');?>
<p><?php echo submit_tag('post')?></p>
</form>
<?php
echo form_tag('blog/view');?>
<p><?php echo submit_tag('view');?></p>
</form>
<?php echo form_tag('blog/logout');?>
<table>
<br><tr><td><td><?php echo submit_tag('logout')?></tr></td></td></br>
</table>
