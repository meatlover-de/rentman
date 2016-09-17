<table class="table striped hovered cell-hovered border bordered">
    <tr>
        <th class="sortable-column">ID</th>
        <th class="sortable-column">Adresse</th>
        <th class="sortable-column">Einheiten</th>
        <th class="sortable-column">Frei</th>
        <th class="sortable-column">Besitzer</th>
        <th>Aktion</th>
    </tr>
    <?php foreach ($objects as $object): ?>
        <tr>
            <td><?php echo $object->getId(); ?></td>
            <td><?php echo $object->getAddress(); ?></td>
            <td><?php echo $object->getUnitCount(); ?></td>
            <td><?php echo $object->getFreeUnitCount(); ?></td>
            <td><?php echo $object->getOwners(); ?></td>
            <td><button class="edit">Bearbeiten</button></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="<?php echo url_for("object/new") ?>"><button class="button new">Neu</button></a>

<script type="text/javascript">
    $("button#newobject").click(function () {
        $.ajax({
            url: '<?php echo url_for("object/new") ?>',
            dataType: "html",
            success: function (data) {
                $('div.main').html("").html(data);
            }
        });
    });
</script>
