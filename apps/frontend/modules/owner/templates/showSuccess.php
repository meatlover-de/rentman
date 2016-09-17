<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $owner->getId() ?></td>
    </tr>
    <tr>
      <th>Firstname:</th>
      <td><?php echo $owner->getFirstname() ?></td>
    </tr>
    <tr>
      <th>Surname:</th>
      <td><?php echo $owner->getSurname() ?></td>
    </tr>
    <tr>
      <th>Street:</th>
      <td><?php echo $owner->getStreet() ?></td>
    </tr>
    <tr>
      <th>Postcode:</th>
      <td><?php echo $owner->getPostcode() ?></td>
    </tr>
    <tr>
      <th>City:</th>
      <td><?php echo $owner->getCity() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $owner->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $owner->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Created by:</th>
      <td><?php echo $owner->getCreatedBy() ?></td>
    </tr>
    <tr>
      <th>Updated by:</th>
      <td><?php echo $owner->getUpdatedBy() ?></td>
    </tr>
    <tr>
      <th>Version:</th>
      <td><?php echo $owner->getVersion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('owner/edit?id='.$owner->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('owner/index') ?>">List</a>
