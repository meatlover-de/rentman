<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('owner/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('owner/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'owner/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['firstname']->renderLabel() ?></th>
        <td>
          <?php echo $form['firstname']->renderError() ?>
          <?php echo $form['firstname'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['surname']->renderLabel() ?></th>
        <td>
          <?php echo $form['surname']->renderError() ?>
          <?php echo $form['surname'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['street']->renderLabel() ?></th>
        <td>
          <?php echo $form['street']->renderError() ?>
          <?php echo $form['street'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['postcode']->renderLabel() ?></th>
        <td>
          <?php echo $form['postcode']->renderError() ?>
          <?php echo $form['postcode'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['city']->renderLabel() ?></th>
        <td>
          <?php echo $form['city']->renderError() ?>
          <?php echo $form['city'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_by']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_by']->renderError() ?>
          <?php echo $form['created_by'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_by']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_by']->renderError() ?>
          <?php echo $form['updated_by'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['version']->renderLabel() ?></th>
        <td>
          <?php echo $form['version']->renderError() ?>
          <?php echo $form['version'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
