<h1>Blog List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Pass</th>
      <th>Title</th>
      <th>Text</th>
      <th>Id</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($info_list as $info): ?>
    <tr>
      <td><?php echo $info->getName() ?></td>
      <td><?php echo $info->getPass() ?></td>
      <td><?php echo $info->getTitle() ?></td>
      <td><?php echo $info->getText() ?></td>
      <td><a href="<?php echo url_for('blog/show?id='.$info->getId()) ?>"><?php echo $info->getId() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('blog/new') ?>">New</a>
