<?php  include 'inc/headersec.php'; ?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<?php include 'inc/header.php'; ?>
<!--header sec end---->
<div class="section-wrapper">
            <div class="container">
                    <div class="container-wrapper">
                            <div class="row">
                                    <div class="col-md-8">
                                            <article class="module margin">
                                                    <header>
                                                            <h3><a href="#">फोटो ग्यालरी</a></h3>
                                                            <h4 class="all">सबै<span class="fa fa-ellipsis-v"></span></h4>
                                                    </header>
                                                    <section>
                                                            <div class="photo-gallery">
                                                                    <div class="row">
                                                                            <div class="col-lg-12">
                                                                                    <div class="row">

                                                                                        <?php 
                                                                                      $res_photo = $obj->select("photo_gallery","*","",array("photo_id"=>"desc"));
                                                                                       while($row_photo = $obj->fetch($res_photo)){

                                                                                   ?>	<div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                                                                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row_photo['title'];?>" data-caption="<?php echo $row_photo['description']; ?>" data-image="<?php echo SITE_URL;?>/uploads/photo_gallery/<?php echo $row_photo['image']; ?>" data-target="#image-gallery">
                                                                                                <img class="img-responsive" src="<?php echo SITE_URL;?>/uploads/photo_gallery/thumbs/<?php echo $row_photo['image']; ?>" alt="Another alt text">
                                                                                            </a>
                                                                                    </div>

                                                                                       <?php } ?> 

                                                                            </div>
                                                                    </div>
                                                                            <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                            <div class="modal-content">
                                                                                                    <div class="modal-header">
                                                                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                                                                                            <h4 class="modal-title" id="image-gallery-title"></h4>
                                                                                                    </div>
                                                                                                    <div class="modal-body">
                                                                                                            <img id="image-gallery-image" class="img-responsive" src="">
                                                                                                    </div>
                                                                                                    <div class="modal-footer">

                                                                                                            <div class="col-md-2">
                                                                                                                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                                                                                                            </div>

                                                                                                            <div class="col-md-8 text-justify" id="image-gallery-caption">
                                                                                                                    This text will be overwritten by jQuery
                                                                                                            </div>

                                                                                                            <div class="col-md-2">
                                                                                                                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </section>
                                            </article>
                                    </div>
                                    <!---slider-sec end--->
                                    <div class="col-md-4">
                                            <?php 
                                            include 'inc/tajakhabar.php';
                                            ?>
                                            <?php 
                                            include 'inc/fbpost.php';
                                            ?>
                                    </div>
                                    <!---news tab sec end--->
                            </div>
                    </div>
                    <?php include 'inc/footer.php'; ?>
            </div>
    </div>
    <?php include 'inc/footersec.php';?>
	<!---bootstrap popup gallery--->
	<script>
	$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>
  </body>
</html>