<table class="table">
    <tbody>
        <tr>
            <td valign="top">
                <table>
                    <tr>
                        <th>
                            Id:
                        </th>
                        <td>
                            <?php echo $object->getId() ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Street:
                        </th>
                        <td>
                            <?php echo $object->getStreet() ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Postcode:
                        </th>
                        <td>
                            <?php echo $object->getPostcode() ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            City:
                        </th>
                        <td>
                            <?php echo $object->getCity() ?>
                        </td>
                    </tr>
                </table>
            </td>
            <td valign="top">
                <table>
                    <tr>
                        <th valign="top">
                            Ausstattung:
                        </th>
                        <td>
                            <?php foreach ($object->getInfrastructures() as $inf): ?>
                                <p><?php echo $inf; ?></p>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<hr>
<p>
    <a href="%3C?php%20echo%20url_for('object/edit?id='.$object-%3EgetId())%20?%3E" class="button">Bearbeiten</a> &nbsp; <a href="%3C?php%20echo%20url_for('object/list')%20?%3E" class="button">Übersicht</a>
</p>
