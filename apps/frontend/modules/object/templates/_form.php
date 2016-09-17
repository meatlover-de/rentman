<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('object/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    <?php echo $form->renderHiddenFields(false) ?>
                    &nbsp;<a href="<?php echo url_for('object/index') ?>" class="button back">Back to list</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'object/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?', 'class' => 'button delete')) ?>
                    <?php endif; ?>
                    <input type="submit" class="button save" value="Save" />
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form->renderGlobalErrors() ?>
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
                <th><?php echo $form['objecttype_id']->renderLabel() ?></th>
                <td>
                    <?php echo $form['objecttype_id']->renderError() ?>
                    <?php echo $form['objecttype_id'] ?>
                </td>
            </tr>
        </tbody>
    </table>
</form>
