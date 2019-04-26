<?php
// $Id: page.tpl.php,v 1.48 2010/11/20 04:03:51 webchick Exp $
?> 
  <div id="page-outer" class="<?php print ($is_front ? 'frontpage' : 'subpage')?>">
    <div id="page-inner" class="<?php if( isset($node->nid) ){ print 'node-page node-page-'.$node->type.' node-page-id-'.$node->nid; } ?>">
      <div id="header">
       
        <?php if ($logo || $site_title): ?>
        <div id="logo">
            <div id="branding"><strong><a href="<?php print $front_page ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo ?>" alt="<?php print ( isset( $site_name_and_slogan) ? $site_name_and_slogan : '' ); ?>" title="<?php print ( isset( $site_name_and_slogan) ? $site_name_and_slogan : '' ); ?>" />
            <?php endif; ?>
            </a></strong></div>
          </div>
        <?php endif; ?>
        <?php print render($page['header']); ?> 

        <div class="clear"></div>
      </div> <!-- /#header -->

      <div id="page_container">

        <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar"> 
        <?php print render($page['sidebar_first']); ?>
        </div>
        <?php endif; ?>


        <div id="content">

        <?php if ($page['precontent']): ?>
        <div id="precontent" class="">
          <?php print render($page['precontent']); ?>
        </div>
        <?php endif; ?>


          <?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title and !$is_front ): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>

          <?php if ($page['postcontent']): ?>
          <div id="postcontent" class="">
            <?php print render($page['postcontent']); ?>
          </div>
          <?php endif; ?>

        </div> <!-- /#content-->


        
        <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>
        <?php endif; ?>
        <div class="clear"></div>
      </div><!-- /#page_container -->
      
      <div id="footer">
        <?php print render($page['footer']); ?>
        <div class="madeby">
          <a title="Internetová reklama a tvorba web stránok" href="http://www.brainsum.sk">web design &amp; development: brainsum</a>
        </div>
        <div class="clear"></div>
      </div>

    </div><!-- /page_inner -->
  </div><!-- /page_outer -->