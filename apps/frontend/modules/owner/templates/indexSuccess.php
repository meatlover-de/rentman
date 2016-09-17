<h1>Owners List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Firstname</th>
      <th>Surname</th>
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
    <?php foreach ($owners as $owner): ?>
    <tr>
      <td><a href="<?php echo url_for('owner/show?id='.$owner->getId()) ?>"><?php echo $owner->getId() ?></a></td>
      <td><?php echo $owner->getFirstname() ?></td>
      <td><?php echo $owner->getSurname() ?></td>
      <td><?php echo $owner->getStreet() ?></td>
      <td><?php echo $owner->getPostcode() ?></td>
      <td><?php echo $owner->getCity() ?></td>
      <td><?php echo $owner->getCreatedAt() ?></td>
      <td><?php echo $owner->getUpdatedAt() ?></td>
      <td><?php echo $owner->getCreatedBy() ?></td>
      <td><?php echo $owner->getUpdatedBy() ?></td>
      <td><?php echo $owner->getVersion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('owner/new') ?>">New</a>
