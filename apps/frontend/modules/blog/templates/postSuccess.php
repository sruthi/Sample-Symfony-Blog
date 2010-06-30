<?php
use_helper('Form');
echo form_tag('blog/post');
echo input_tag('text', ' ');
echo submit_tag('post');
?>
</form>
<?php
use_helper('Form');
echo form_tag('blog/home');
echo submit_tag('back');
?>
</form>
