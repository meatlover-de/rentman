<h1>Ausstattungen</h1>
<table class="table striped hovered cell-hovered border bordered">
    <tr>
        <th>ID</th>
        <th>Bezeichnung</th>
        <th>Aktion</th>
    </tr>
    <?php foreach ($infrastructures as $inf): ?>
        <tr>
            <td><?php echo $inf->getId(); ?></td>
            <td><?php echo $inf->getObjecttype(); ?></td>
            <td><a href="<?php echo url_for("infrastructure/edit?id=" . $inf->getId()); ?> class="button edit">Bearbeiten</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo url_for("infrastructure/new") ?>"><button class="button new">Neu</button></a>
