<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shapely
 */

get_header(); ?>

    <div id="primary" class="col-md-12 mb-xs-36 <?php echo $layout_class; ?>">
		<main id="main" class="site-main" role="main">
      <form method="POST" id="counseling_target" action="<?php echo get_page_link(2218);?>">
        <div class="row">
          <div class="col-md-8 mb-xs-24">
            <textarea name="counseling_content" class="form-control" rows="3" style="height:300px" placeholder="고민을 작성해 주세요"></textarea>
          </div>
          <div class="col-md-4 mb-xs-12">
            아래를 선택후 포스트해주세요
            <hr>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                익명으로 대화하기
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                실명으로 대화하기
              </label>
            </div>
            <hr>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios2" id="optionsRadios3" value="option3" checked>
                고민내용 공개하기
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios2" id="optionsRadios3" value="option4">
                고민내용 비공개하기
              </label>
            </div>
            <hr>
            <input type="text" class="form-control" placeholder="초대인원 수 (3명에서 10명 초대가능합니다)">
          </div>
        </div>
        <button type="submit" id="submit_counselings" class="btn btn-default">포스트</button>
      </form>
      <div id="test111"><?php echo get_page_link(1978);?></div>
		</main><!-- #main -->asdasdasdf
	</div><!-- #primary -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
  $('#submit_counseling').click(function(){
    $.ajax({
      url:'../wp-content/themes/shapely/counseling_process.php',
      data: $('#counseling_target').serialize(),
      type:'post',
      dataType:'json',
      success:function(data){
        $('test111').innerHTML(data);
      }
    })
  })
  </script>

<?php
get_footer();
