<h1>Suchergebnisse</h1>

<table class="table">
    <?php foreach ($objects as $obj): ?>
    <tr>
        <td>
            <a href="<?php echo url_for("object/show?id=" . $obj->getId()); ?>">
            <?php echo $obj; ?>
            </a>
        </td>
    </tr>
<?php endforeach; ?>
</table>