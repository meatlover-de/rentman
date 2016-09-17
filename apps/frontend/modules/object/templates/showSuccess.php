<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $object->getId() ?></td>
    </tr>
    <tr>
      <th>Street:</th>
      <td><?php echo $object->getStreet() ?></td>
    </tr>
    <tr>
      <th>Postcode:</th>
      <td><?php echo $object->getPostcode() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $object->getCity() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $object->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $object->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $object->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $object->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $object->getVersion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('object/edit?id='.$object->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('object/index') ?>">List</a>
