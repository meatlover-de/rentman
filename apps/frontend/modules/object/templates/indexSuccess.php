<h1>Objects List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Street</th>
      <th>Postcode</th>
      <th>City</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Version</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($objects as $object): ?>
    <tr>
      <td><a href="<?php echo url_for('object/show?id='.$object->getId()) ?>"><?php echo $object->getId() ?></a></td>
      <td><?php echo $object->getStreet() ?></td>
      <td><?php echo $object->getPostcode() ?></td>
      <td><?php echo $object->getCity() ?></td>
      <td><?php echo $object->getCreatedAt() ?></td>
      <td><?php echo $object->getUpdatedAt() ?></td>
      <td><?php echo $object->getCreatedBy() ?></td>
      <td><?php echo $object->getUpdatedBy() ?></td>
      <td><?php echo $object->getVersion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('object/new') ?>">New</a>
