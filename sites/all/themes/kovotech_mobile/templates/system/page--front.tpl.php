<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


<header class="header" role="banner">
    <div id="header" class="container">
        <div class="columns">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image"/>
                </a>
            <?php endif; ?>

            <?php if ($site_name || $site_slogan): ?>
                <div class="header__name-and-slogan">
                    <?php if ($site_name): ?>
                        <h1 class="header__site-name">
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home">
                                <span><?php print $site_name; ?></span>
                            </a>
                        </h1>
                    <?php endif; ?>

                    <?php if ($site_slogan): ?>
                        <div class="header__site-slogan"><?php print $site_slogan; ?></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <?php if ($page['header_mobile']): ?>
        <?php print render($page['header_mobile']); ?>
    <?php endif; ?>
</header>

<div id="mobile-menu">
    <?php if ($page['mobile_menu']): ?>
        <?php print render($page['mobile_menu']); ?>
    <?php endif; ?>
    <a class="cta-button" href="tel:00421315523447">
        <div class="container">
            <i></i>
            <div class="columns col-gapless">
                <span class="cta-button-label"><?php print t('Have a question?'); ?></span>
                <span class="cta-button-phone">+421 31/552 3447</span>
            </div>
        </div>
    </a>
</div>

<main id="main" class="main" role="main">
    <div class="container">
        <div class="columns">
            <?php
            // Render the sidebars to see if there's anything in them.
            $sidebar_first = render($page['sidebar_first']);
            $sidebar_second = render($page['sidebar_second']);
            // Decide on layout classes by checking if sidebars have content.
            $content_class = 'main-content column col-12';
            $sidebar_first_class = $sidebar_second_class = 'sidebar column';
            if ($sidebar_first && $sidebar_second):
                $content_class = 'main-content column col-12 col-md-6';
                $sidebar_first_class = 'sidebar--left column col-12 col-md-3';
                $sidebar_second_class = 'sidebar--right column col-12 col-md-3';
            elseif ($sidebar_second):
                $content_class = 'main-content column col-12 col-md-7';
                $sidebar_second_class = 'sidebar--right column col-12 col-md-5';
            elseif ($sidebar_first):
                $content_class = 'main-content column col-12 col-md-7';
                $sidebar_first_class = 'sidebar--left column col-12 col-md-5';
            endif;
            ?>

            <?php if ($sidebar_first): ?>
                <aside class="<?php print $sidebar_first_class; ?>" role="complementary">
                    <?php print $sidebar_first; ?>
                </aside>
            <?php endif; ?>

            <section class="<?php print $content_class; ?>">
                <a href="#skip-link" class="visually-hidden visually-hidden--focusable" id="main-content"><?php print t('Back to top'); ?></a>
                <?php print render($title_prefix); ?>
                <?php print render($title_suffix); ?>
                <?php print $messages; ?>
                <?php print render($tabs); ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </section>

            <?php if ($sidebar_second): ?>
                <aside class="<?php print $sidebar_second_class; ?>" role="complementary">
                    <?php print $sidebar_second; ?>
                </aside>
            <?php endif; ?>

        </div>
    </div>
    <div class="stripes"></div>
</main>

<?php if ($page['sidebar']): ?>
    <?php print render($page['sidebar']); ?>
<?php endif; ?>

<?php if ($page['footer']): ?>
    <?php print render($page['footer']); ?>
<?php endif; ?>

