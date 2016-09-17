<h1>Mietobjekte</h1>
<table class="table striped hovered cell-hovered border bordered">
    <tr>
        <th>ID</th>
        <th>Adresse</th>
        <th>Einheiten</th>
        <th>Frei</th>
        <th>Besitzer</th>
        <th>Aktion</th>
    </tr>
    <?php foreach ($objects as $object): ?>
        <tr>
            <td><?php echo $object->getId(); ?></td>
            <td><?php echo $object->getAddress(); ?></td>
            <td><?php echo $object->getUnitCount(); ?></td>
            <td><?php echo $object->getFreeUnitCount(); ?></td>
            <td><?php echo $object->getOwnersList(); ?></td>
            <td>
				<a href="<?php echo url_for("object/show?id=" . $object->getId()); ?>"><button class="button show">Anzeigen</button></a>
				<a href="<?php echo url_for("object/edit?id=" . $object->getId()); ?>"><button class="button edit">Bearbeiten</button></a>
			</td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo url_for("object/new") ?>"><button class="button new">Neu</button></a>
