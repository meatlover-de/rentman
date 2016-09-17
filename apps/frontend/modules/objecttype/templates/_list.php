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
