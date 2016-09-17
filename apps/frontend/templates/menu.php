<ul class="h-menu block-shadow-impact">
    <li><a href="#">Home</a></li>
    <li><a href="#" class="dropdown-toggle">Verwaltung</a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="<?php echo url_for("object/index") ?>">Objekte</a></li>
            <li><a href="<?php echo url_for("owner/index") ?>">Eigentümer</a></li>
        </ul>
    </li>
    <li><a href="#"class="dropdown-toggle">Auswertungen</a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="#">Nebenkosten</a></li>
        </ul>
    </li>
    <li>
        <a href="#" class="dropdown-toggle">Einstellungen</a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="<?php echo url_for("objecttype/index") ?>">Objektarten</a></li>
            <li><a href="<?php echo url_for("infrastructure/index") ?>">Ausstattungen</a></li>
        </ul>
    </li>
    <li>
        <a href="#" class="dropdown-toggle">Über...</a>
        <ul  class="d-menu" data-role="dropdown">
            <li><a href="#">About</a></li>
            <li><a href="#">Partners</a></li>
        </ul>
    </li>
    <li class="place-right no-hovered">
        <form action="<?php echo url_for("search/index"); ?>" method="post">
            <div class="input-control text" style="width: 250px; margin-right: 10px">
                <input name="search" type="text" placeholder="Suchen...">
                <button class="button"><span class="mif-search"></span></button>
            </div>
        </form>
    </li>
</ul>


<script type="text/javascript">
    $("#objects").click(function () {
        $.ajax({
            url: '<?php echo url_for("object/list") ?>',
            dataType: "html",
            success: function (data) {
                $('div.main').html("").html(data);
            }
        });
    });
    $("#objecttypes").click(function () {
        $.ajax({
            url: '<?php echo url_for("objecttype/list") ?>',
            dataType: "html",
            success: function (data) {
                $('div.main').html("").html(data);
            }
        });
    });
    $("#infrastructure").click(function () {
        $.ajax({
            url: '<?php echo url_for("infrastructure/show") ?>',
            dataType: "html",
            success: function (data) {
                $('div.main').html("").html(data);
            }
        });
    });
</script>
