<?php
global $language;
$lang = $language->language;
?>
<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
  <?php endif;?>
  <?php print render($title_suffix); ?>


  <?php
  if($lang == 'fa'){
    $node1 = node_load(29);
    $node2 = node_load(110);
  }
  else {
    $node1 = node_load(172);
    $node2 = node_load(173);
  }
  ?>
  <footer id="footer">
    <section id="cards_footer">
      <div class="container">
<!--        <div class="card-header">-->
<!--          <a href="/" class="logo_footer" style="text-align: center">-->
<!--            --><?php
//            if($lang == 'fa'){
//              echo '<img src="/sites/default/files/logo-header.png" alt="گروه سرمایه شمس ماندگار" title="گروه سرمایه شمس ماندگار" style="height: auto; max-width: 100px">';
//            }
//            else {
//              echo '<img src="/sites/default/files/logo-header.png" alt="MANDEGAR SHAMS FUND GROUP" title="MANDEGAR SHAMS FUND GROUP">';
//            }
//            ?>
<!--          </a>-->
<!--        </div>-->
        <div class="row mx-n4">

          <div class="col-md-4 px-4 col-sm-12 col-xs-12 texti">
            <div class="cards cardi card-none contextual-links-region">
              <?php render_contextual_link_by_nid($node1->nid);?>
              <div class="card-body" style="text-align: center;">
                <a href="/" class="logo_footer" style="text-align: center">
                  <?php
                  if($lang == 'fa'){
                    echo '<img src="/sites/default/files/logo-header.png" alt="گروه سرمایه شمس ماندگار" title="گروه سرمایه شمس ماندگار" style="height: auto; max-width: 150px">';
                  }
                  else {
                    echo '<img src="/sites/default/files/logo-header.png" alt="MANDEGAR SHAMS FUND GROUP" title="MANDEGAR SHAMS FUND GROUP">';
                  }
                  ?>
                </a>
<!--                <p class="text-justify">-->
<!--                  --><?php //print $node1->body[$lang][0]['value']; ?>
<!--                </p>-->
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-md-0 mt-3 px-4 col-sm-12 col-xs-12 linki contextual-links-region" >
            <article class="cards card-none">
              <?php render_contextual_link_by_menu('menu-footer');?>
              <div class="">
                <h4 class="card-title"><?php echo $lang == 'fa' ? 'دسترسی سریع' : 'LINKS';?></h4>
              </div>
              <div class="card-bod">
                <?php
                $menu = menu_tree('menu-footer');
                print drupal_render($menu);
                ?>
              </div>
            </article>
          </div>
          <div class="col-md-4  col-sm-12 col-xs-12">
            <article class="cards card-none contextual-links-region">
              <?php render_contextual_link_by_nid($node2->nid);?>
              <div class="">
                <h4 class="card-title"><?php echo $lang == 'fa' ? 'اطلاعات تماس' : 'CONTACT';?></h4>
              </div>
              <address class="card-body card-address"><?php echo $node2->body[$lang][0]['value'];?></address>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section id="copyright">
      <div class="container">
        <p class="text-center">
          <a class="name-co" href="/" target="_blank" style="width: 430px;margin: auto;max-width: 100%;">
            <?php echo $lang == 'fa' ? 'تمامی حقوق متعلق به گروه سرمایه شمس ماندگار می باشد' : 'All Rights Reserved For MANDEGAR SHAMS FUND GROUP';?>
          </a>
<!--          <a class="name-co" href="https://www.tusi.co/" target="_blank" style="direction: ltr; margin-top: 5px;">-->
<!--            <span style="padding: 10px 10px 0 0;"> Design and Development by</span> <img src="/sites/all/themes/nutland/images/tusi.svg" style="width: 40px;filter: brightness(1);vertical-align: top;display: inline-block;">-->
<!--          </a>-->
        </p>
      </div>
    </section>
  </footer>

</section>
<style>
  #cards_footer {
    padding: 60px 0;
  }
  section#cards_footer:before {
    content: "";
    position: absolute;
    top: 60px;
    width: 100%;
    height: 100px;
    /*background: url(/sites/all/themes/nutland/images/pattern-tadbir.png);*/
    background-size: auto 100%;
    opacity: 0.2;
    z-index: -1;
  }
  address.card-body.card-address {
    white-space: pre-line;
    line-height: 25px;
  }
  .texti article {
    border-top: 1px solid #fff;
    padding-top: 20px;
    margin-top: 20px;
  }
  @media (min-width: 993px) {
    .linki {
      margin-right: 5%;
    }
    .i18n-en .linki{
      margin-right: 0;
      margin-left: 5%;
    }
  }
</style>
