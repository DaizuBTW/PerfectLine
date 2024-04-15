<div class="team__card">
    <img class="team__photo" src="resources/images/main/small-team/<?= $emploee['Image'] ?>" alt="<?= $emploee['Name'] ?>">
    <img class="team__triangle" src="resources/images/main/small-team/pop-up-triangle.svg">
    <div class="team__pop-up-card">
        <p class="team__name"><?= $emploee['Name'] ?> <span class="team__position">/ <?= $emploee['Position'] ?></span></p>
        <p class="team__info"><?= $emploee['Info'] ?></p>
        <ul class="team__links">
            <li>
                <a href="<?= $emploee['LinkInstagram'] ?>" target="_blank"><img src="resources/images/main/small-team/instagram-icon.svg" alt="instagram"></a>
            </li>
            <li>
                <a href="<?= $emploee['LinkFacebook'] ?>" target="_blank"><img src="resources/images/main/small-team/facebook-icon.svg" alt="Facebook"></a>
            </li>
            <li>
                <a href="mailto:<?= $emploee['LinkEmail'] ?>" target="_blank"><img src="resources/images/main/small-team/mail-icon.svg" alt="Mail"></a>
            </li>
        </ul>
    </div>
</div>