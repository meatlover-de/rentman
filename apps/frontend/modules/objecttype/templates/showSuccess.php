<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $objecttype->getId() ?></td>
    </tr>
    <tr>
      <th>Objecttype:</th>
      <td><?php echo $objecttype->getObjecttype() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $objecttype->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $objecttype->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $objecttype->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $objecttype->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $objecttype->getVersion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('objecttype/edit?id='.$objecttype->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('objecttype/index') ?>">List</a>
