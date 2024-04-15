<div class="row main__person">
    <div class="col">
        <p class="main__person-info"><?= $emploee['Name'] . " - " . $emploee['Position'] ?></p>
    </div>
    <div class="col-lg-1 col-md-2 main__person-btn">
        <a href="#edit"><img src="/resources/images/admin/edit.svg" alt="Edit"></a>
    </div>
    <div class="col-lg-1 col-md-2 main__person-btn">
        <a onclick="confirmDelete(event)" href="/controller/admin/delete-info-person.php?id=<?= $emploee['Id'] ?>"><img src="/resources/images/admin/delete.svg" alt="Delete"></a>
    </div>
</div>