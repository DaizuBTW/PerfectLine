<?php
$table = "InfoCompany";
$info = getFromTable($db, $table);

foreach ($info as $item):
?>
    <div class="about-us__texts">
        <div class="about-us__text">
            <h3><?= $item['Title'] ?></h3>
            <p><?= $item['Content'] ?></p>
        </div>
        <div class="about-us__text">
            <h3><?= $item['SubTitle'] ?></h3>
            <p><?= $item['SubContent'] ?></p>
        </div>
    </div>
<?php endforeach;
