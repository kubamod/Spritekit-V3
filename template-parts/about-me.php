
<?php /* Template Name: About-me */ ?>
<?php get_header(); 
global $post;
?>

<style scoped>
body { 
  background: url('<?php echo get_template_directory_uri() . '/assets/img/tratat.jpg'; ?>') no-repeat center center fixed !important; 
  -webkit-background-size: cover !important;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  color:#fff !important;
}

.site-header {
    background-color:rgba(0,0,0,0.0);
    border-bottom: none;
    top:0px;
    color:#fff;
    -webkit-backdrop-filter: blur(0px);
}

.site-header a { 
    color:#fff;
}

.site-footer {
    background-color:rgba(0,0,0,0.0);
    padding-top:10px;
    padding-bottom:10px;
}

.breadcrumb {
    display:none;
}

.stuff {
    position: relative;
    bottom:-50%;
    width:500px;
}

.my-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
}

.site-footer {
    color:#fff;
    position: absolute;
    right: 0;
    left: 0;
    bottom: 0;
    padding: 1rem;
    text-align: center;
}



</style>
<div class="container-fluid">
    <div class="h-100">
        <div class="stuff" id="box">
            <h3>Hi, it's me.</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis velit sed tellus fringilla laoreet. Maecenas vitae porta nibh. Donec suscipit mattis arcu, eget tempor nulla laoreet molestie. Suspendisse in elit volutpat, pretium ipsum vestibulum, consequat eros. Donec in blandit velit. Nunc quam nibh, mattis sed tincidunt et, dignissim quis magna. Aenean in mauris malesuada erat scelerisque venenatis nec eu leo. Duis at lacus egestas, tincidunt risus nec, varius turpis. Vivamus tempus, libero id laoreet feugiat, nibh tortor volutpat nulla, vel congue augue erat vel ex. Morbi tempus augue vitae tellus euismod mattis. Aliquam erat volutpat. In et urna quis est suscipit ornare id sed tellus. Mauris euismod viverra odio non rhoncus. Aenean at vestibulum felis. Etiam at tellus ac urna feugiat bibendum.</p>
        </div>
    </div>
</div>

<script>
$(updateBoxDimension);
$(window).on('resize', updateBoxDimension);

function updateBoxDimension() {
    var $box = $('.box');

    // To center the box
    var boxLeft = ($(window).width()) / 2 - ($box.width() / 2),
        boxTop = ($(window).height()) / 2 - ($box.height() / 2);

    $box.css({
        left: boxLeft,
        top: boxTop
    });
}
</script>
<?php get_footer(); ?>