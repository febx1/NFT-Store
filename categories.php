<?php require('top.php');
$cat_id=mysqli_real_escape_string($con,$_GET['id']);
//$cat_id=$_GET['id'];
if($cat_id>0){
    $get_product=get_product($con,'',$cat_id);
}else{
    ?>
    <script>
    window.location.href='index.php';
    </script>
    <?php
}
?>


<div class="body__overlay"></div>
      
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                       
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Products</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                <?php if(count($get_product)>0){

                 ?>
                    <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                </div>
                                
                               
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
                                        <?php 
                            foreach($get_product as $list){
                            ?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                    <li><a href="product.php?id=<?php echo $list['nid']?>">
                                            <img src="<?php echo $list['link'] ?>" alt="product images">
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['name'] ?> </a></h4>
                                       
                                        <ul class="fr__pro__prize">
                                            <!-- <li class="old__prize"><?php 
                                            echo $list['descrip'] ?></li> -->
                                            <!-- <li><?php echo $list['link'] ?></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Category -->
                            <?php } ?>
                                        <!-- End Single Product -->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product View -->
                        </div>
                        
                    </div>
                   </div>
                   <?php }
                   else {
                       echo"<h2>Ooopss...<br><br>No NFTs avalable for this category......</h2>";
                   } ?>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
       
       

<?php require('footer.php') ?>