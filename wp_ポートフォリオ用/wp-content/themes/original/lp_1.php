<?php
/*
Template Name: lp_1
*/
?>
<?php
    $args_1 = array(
    'numberposts'     => 3,
    //取得する投稿の数
    'orderby'         => 'post_date',
    //様々な値で並べ替える
    'order'           => 'DESC',
    //$orderby でのソート方式。'ASC' - 昇順(低から高)。'DESC' - 降順(高から低)。
    'post_type'       => 'information',
    //表示する投稿のタイプ。post、page、any（全て）等
    'post_status'     => 'private'
    //指定したステータスの投稿を表示
);
    $args_2 = array(
    'numberposts'     => 10,
    //取得する投稿の数
    'offset'          => 0,
    //先頭から何件の投稿を除外するか
    'orderby'         => 'post_date',
    //様々な値で並べ替える
    'order'           => 'DESC',
    //$orderby でのソート方式。'ASC' - 昇順(低から高)。'DESC' - 降順(高から低)。
    'post_type'       => 'post',
    //表示する投稿のタイプ。post、page、any（全て）等
    'post_status'     => 'publish'
    //指定したステータスの投稿を表示
); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta name="charset" content="utf-8">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/flexslider.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/lp_1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/load.js">
</script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/script.js">
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/back.js">
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/j_scroll.js">
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider.js">
  </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/flexslider_custom.js">
</script>
</head>
<body <?php body_class();?>>
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
  <a href="#flag_5" class="menu_1">
    <span class="menu_fix_1">CONTACT</span>
    <span class="menu_1_1">
      お問い合わせ
    </span>
  </a>
</div>
<div class="menu_2_wrap">
  <a href="#flag_4" class="menu_2">
    <span class="menu_fix_2">BLOG</span>
    <span class="menu_2_1">
      ブログ
    </span>
  </a>
</div>
<div class="menu_3_wrap">
   <a href="#flag_3" class="menu_3">
     <span class="menu_fix_3">ABOUT</span>
     <span class="menu_3_1">
       会社概要
     </span>
   </a>
 </div>
<div class="menu_4_wrap">
  <a href="#flag_2" class="menu_4">
     <span class="menu_fix_4">SERVICE</span>
     <span class="menu_4_1">
       事業内容
     </span>
  </a>
</div>
<div class="menu_5_wrap">
  <a href="#flag_1" class="menu_5">
     <span class="menu_fix_5">CONCEPT</span>
     <span class="menu_5_1">
       理念・目的
     </span>
  </a>
</div>
  </div>
</div>
<div id="fv_wrap" id="wrap">
<div class="fv_side_box_1">
  <div class="side_text_1">次世代のコンテンツ制作へ
  </div>
  <div class="side_text_2">
    <p>I wandered lonely as a cloud
      That floats on high o'er vales and hills,
      When all at once I saw a crowd,
      A host, of golden daffodils;
      Beside the lake, beneath the trees,
      Fluttering and dancing in the breeze.</p>
<p>
  Continuous as the stars that shine
  And twinkle on the milky way,
  They stretched in never-ending line
  Along the margin of a bay:
  Ten thousand saw I at a glance,
  Tossing their heads in sprightly dance.</p>
<p>
  The waves beside them danced; but they
  Out-did the sparkling waves in glee:
  A poet could not but be gay,
  In such a jocund company:
  I gazed - and gazed - but little thought
  What wealth the show to me had brought:</p>
  </div>
</div>
  <img class="image_1" src="<?php echo get_template_directory_uri();?>/images/image_group_1.jpg" width="75%">
</div>
<div id="info_wrap" id="wrap">
<div class="title_1">
  お知らせ
</div>
<div class="slider_wrap">
  <div class="flexslider">
    <ul class="slides">
<?php
$postslist = get_posts($args_1);
foreach ($postslist as $post) : setup_postdata($post);
?>
  <li>
    <span class="info_date_1"><?php the_time('Y.n.j'); ?></span><span class="info_cont_1"><?php the_content(); ?></span></li>
<?php endforeach; ?>
</ul>
</div>
</div>
</div>
<div class="concept_wrap" id="flag_1" id="wrap">
  <div class="concept_title">
    CONCEPT
  </div>
  <div class="concept_text_jp">
    「SolGarden」は次世代のコンテンツ制作を展開しています。<br>
    ユーザーファーストの思想を掲げ、<br>
    シンプルで洗練されたデザインの中に先進的なエッセンスを取り込むことで<br>
    これまで数多くの実績を残してきました。<br>
    全てのユーザーに快適なUX(ユーザーエクスペリエンス)を届けます。
    <div class="concept_text_en">
      We are providing contents of the next generation.<br>
      And we've been many achievements through advancend designs and functions<br>
      with user first thought.<br>
      We send comfortable UX to all users.
    </div>
  </div>
  </div>
  <div id="service_wrap" id="wrap">
  <img class="image_3" src="<?php echo get_template_directory_uri();?>/images/sp_hand_image1.jpg" width="30%">
  <img class="image_4" src="<?php echo get_template_directory_uri();?>/images/forest_image1.jpg" width="30%">
  <div class="service_box_1">
    <div class="s_cont_wrap" id="flag_2">
    <div id="service_title">
      SERVICE
    </div>
    <div class="service_text_jp">
      弊社ではランディングページ・ホームページ制作をはじめ、サーバー構築からスマートフォンアプリ制作まで幅広く行なっています。
      コンテンツ制作はいずれもレイアウトや見栄えだけでなく、クライアント様のコンバージョンに繋がるコーディング・エンジニアリングを心がけております。
    </div>
    <div class="service_text_en">
      We are creating landing pages, home pages, server build, and also mobile applications.
      These are not only build appearances. We stick to your principals.
    </div>
    <div class="contact_button_wrap_wrap_1">
    <div class="contact_button_wrap_1">
      <a class="contact_button_1" href="#flag_5">> CONTACT US</a>
    </div>
  </div>
</div>
</div>
</div>
<div id="about_wrap" id="wrap">
  <div class="about_box_1">
    <div class="about_cont_wrap" id="flag_3">
    <div id="about_title">
      ABOUT
  </div>
  <div class="about_text_jp">
    法人名 Corporate name：SolGarden .Inc<br>
    設立 Established month：2014年10月<br>
    従業員数 Employee number：30名<br>
    資本金 Capital stock：500万円<br>
    本社所在地 Headquearters：<br>
    神戸市東灘区向洋町中6-9 神戸ファッションマート4W-01-032S
  </div>
  <div class="contact_button_wrap_wrap_2">
    <div class="contact_button_wrap_2">
      <a class="contact_button_2" href="#flag_5">
        > CONTACT US
      </a>
    </div>
  </div>
</div>
</div>
<img class="image_5" src="<?php echo get_template_directory_uri();?>/images/walking_image1.jpg" width="70%">
</div>
<div id="blog_wrap" id="wrap">
  <img class="image_6" src="<?php echo get_template_directory_uri();?>/images/blog_image1.jpg" width="70%">
  <div class="blog_box_1">
    <div class="blog_title_1" id="flag_4">
      BLOG
    </div>
    <div class="blog_scroll_box_1">
      <?php
      $postslist = get_posts($args_2);
      foreach ($postslist as $post) : setup_postdata($post);
      ?>
        <div class="blog_image_wrap_1"><a href="<?php the_permalink();?>"><?php the_post_thumbnail([42,42]); ?></a></div>
        <div class="post_wrap_1">
        <a class="blog_link" href="<?php the_permalink();?>">
        <div class="post_title_1">
          <?php the_title(); ?>
        </div>
      <span class="post_date_1"><?php the_time('Y.n.j'); ?></span></a></div><br>
    <?php endforeach;?>
    </div>
    <div class="contact_button_wrap_wrap_3">
      <div class="contact_button_wrap_3">
        <a class="contact_button_3" href="#flag_5">
          > CONTACT US
        </a>
      </div>
    </div>
  </div>
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
