<?php 
echo use_helper('Form');
echo form_tag('blog/post');
echo submit_tag('post');
?>
</form>
<?php

echo form_tag('blog/view');
echo submit_tag('view');?>
</form>
<?php
echo form_tag('blog/logout');?>
<table>
<br><tr><td><td><?php echo submit_tag('logout')?></tr></td></td></br>
</table>
