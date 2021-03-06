@extends 'layouts/private'

<section id="users-list">
    <?php foreach ($users as $user): ?>
        <article class='user'>
            <a href="?page=users&amp;action=show&amp;id=<?php echo $user->get_id() ?>">
                <img src="<?php echo $user->get_profile_image() ?>" alt="<?php $user->get_name() ?>" class="profile-image">
                <h2 class="name">
                    <?php echo $user->get_name() ?>
                </h2>
                <span class="username"><?php echo $user->get_username() ?></span>
            </a>
            <a href="#" class="btn follow" data-user-id="<?php echo $user->get_id() ?>"
                <?php if (Auth::user()->is_following_to($user)): ?>
                     data-following="1">
                    Dejar de seguir
                <?php else: ?>
                     data-following="0">
                    Seguir
                <?php endif; ?>
            </a>
        </article>
    <?php endforeach; ?>
</section>