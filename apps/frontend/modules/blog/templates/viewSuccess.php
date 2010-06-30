<?php echo use_helper('Form');
echo form_tag('blog/home');
echo submit_tag('back');
?>
<br></br>
<?php echo "Various Posts :: ";
foreach ($info_list as $entry)
{?>
	<br> <?php echo $entry->getText();?></br>
	           <br> <?php echo $entry->getCreatedAt();?> </br>
		<?php }?>
	</form>

