<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/post.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/load.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/back.js"></script>
<div id="loader-bg">
<div id="loader">
  <img src="<?php echo get_template_directory_uri();?>/images/gif-load.gif" width="20px" height="20px" alt="Now Loading..." />
</div>
</div>
<div id="header" id="wrap">
  <div class="header_cont">
  <div class="logo_wrap">
  <a class="logo_a" href="<?php echo get_home_url();?>/lp_1/">
  <img class="logo_1" src="<?php echo get_template_directory_uri();?>/images/logo_1.png" width="130px">
</a>
</div>
<div class="menu_1_wrap">
<a href="<?php echo get_home_url();?>/lp_1/?id=flag_5" class="menu_1">
  <span class="menu_fix_1">CONTACT</span>
  <span class="menu_1_1">
    お問い合わせ
  </span>
</a>
</div>
<div class="menu_2_wrap">
<a href="<?php echo get_home_url();?>/lp_1/?id=flag_4" class="menu_2">
  <span class="menu_fix_2">BLOG</span>
  <span class="menu_2_1">
    ブログ
  </span>
</a>
</div>
<div class="menu_3_wrap">
 <a href="<?php echo get_home_url();?>/lp_1/?id=flag_3" class="menu_3">
   <span class="menu_fix_3">ABOUT</span>
   <span class="menu_3_1">
     会社概要
   </span>
 </a>
</div>
<div class="menu_4_wrap">
<a href="<?php echo get_home_url();?>/lp_1/?id=flag_2" class="menu_4">
   <span class="menu_fix_4">SERVICE</span>
   <span class="menu_4_1">
     事業内容
   </span>
</a>
</div>
<div class="menu_5_wrap">
<a href="<?php echo get_home_url();?>/lp_1/?id=flag_1" class="menu_5">
   <span class="menu_fix_5">CONCEPT</span>
   <span class="menu_5_1">
     理念・目的
   </span>
</a>
</div>
</div>
</div>
<div class="post_wrap_1">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <div class="post_title_1">
   <?php the_title(); ?>
 </div>
   <div class="time_1"><?php the_time('Y.m.d H:i'); ?></div>
   <div class="post_sent">
  <?php the_content(); ?>
</div>
  <?php endwhile; endif;?>
</div>
  <div class="contact_block_wrap" id="flag_5" id="wrap">
    <div class="contact_title_1">
      <i class="fa fa-envelope-o fa-fw"></i>CONTACT
    </div>
    <div class="radio_wrap">
      <div class="radio_cont">
      <label class="labe_1"><span class="radio_text_1">法人</span><input type="radio" name="person" checked></label>
      <label class="labe_2"><span class="radio_text_2">個人</span><input type="radio" name="person"></label>
    </div>
    <div class="group_1_wrap">
      <label>団体名：
      <input class="group_1" type="text" name="group" placeholder="corporate name"></label></div>
      <div class="name_1_wrap">
        <label>お名前：
      <input class="name_1" type="text" name="name" placeholder="personal name"></label></div>
      <div class="textarea_1_wrap">
      <label class="label_sent" for="textarea_1">本文：</label>
      <textarea placeholder="sentences" id="textarea_1" class="textarea_1" type="textarea" cols="102" rows="14"></textarea></div>
      <input class="submit_1" type="submit" value="> SUBMIT">
  </div>
  </div>
  <div class="back_wrap" id="wrap">
  <div id="pageTop"><a href="#" class="back"></a></div>
  </div>
  <div id="footer" id="wrap">
    <div class="footer_cont_wrap">
      <div class="footer_sent_1">
        ©️kh_portfolio_2017
      </div>
    </div>
  </div>
  </body>
  </html>
