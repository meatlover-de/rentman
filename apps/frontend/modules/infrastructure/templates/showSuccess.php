<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $infrastructure->getId() ?></td>
    </tr>
    <tr>
      <th>Short:</th>
      <td><?php echo $infrastructure->getShort() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $infrastructure->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $infrastructure->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $infrastructure->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $infrastructure->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $infrastructure->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $infrastructure->getVersion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('infrastructure/edit?id='.$infrastructure->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('infrastructure/index') ?>">List</a>
