<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $info->getName() ?></td>
    </tr>
    <tr>
      <th>Pass:</th>
      <td><?php echo $info->getPass() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $info->getTitle() ?></td>
    </tr>
    <tr>
      <th>Text:</th>
      <td><?php echo $info->getText() ?></td>
    </tr>
    <tr>
      <th>Id:</th>
      <td><?php echo $info->getId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('blog/edit?id='.$info->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('blog/index') ?>">List</a>
