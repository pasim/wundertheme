<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<!--page.tpl.php-->
<div class="page">
  <header role="banner">
    <div class="container">
      <?php if ($logo): ?>
        <figure class="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        </figure>
      <?php endif; ?>

      <?php if($site_name OR $site_slogan ): ?>
      <hgroup>
        <?php if($site_name): ?>
        <h1><?php print $site_name; ?></h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
      <?php endif; ?>
    </div>

    <?php if ($page['header']): ?>
      <div class="header">
        <div class="container">
        <?php print render($page['header']); ?>
        </div>
      </div>
    <?php endif; ?>

  </header>

  <?php if ($page['sidebar_first']): ?>
  <aside role="complementary" class="sidebar sidebar_first">
    <?php print render($page['sidebar_first']); ?>
  </aside>
  <?php endif; ?>

  <div role="main" class="main">
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <?php print $breadcrumb; ?>

    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php if ($tabs): ?>
      <nav class="tabs"><?php print render($tabs); ?></nav>
    <?php endif; ?>

    <?php if($page['highlighted'] OR $messages){ ?>
      <div class="drupal-messages">
      <?php print render($page['highlighted']); ?>
      <?php print $messages; ?>
      </div>
    <?php } ?>

    <div id="content">
      <?php print render($page['content']); ?>
    </div>

  </div><!--/main-->

  <?php if ($page['sidebar_second']): ?>
  <aside role="complementary" class="sidebar sidebar_second">
    <?php print render($page['sidebar_second']); ?>
  </aside>
  <?php endif; ?>

  <footer role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>



