<h1>Objektarten</h1>
<table class="table striped hovered cell-hovered border bordered">
    <tr>
        <th>ID</th>
        <th>Bezeichnung</th>
        <th>Aktion</th>
    </tr>
    <?php foreach ($objecttypes as $objecttype): ?>
        <tr>
            <td><?php echo $objecttype->getId(); ?></td>
            <td><?php echo $objecttype->getObjecttype(); ?></td>
            <td><button class="edit">Bearbeiten</button></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo url_for("objecttype/new") ?>"><button class="button new">Neu</button></a>
