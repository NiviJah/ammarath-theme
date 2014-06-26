<!-- Our Customers -->

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header"><?php echo vp_metabox('team_members.customers_gallery.0.our_customers_title');?></h2>
            </div>

    <?php 
    $customers_gallery = vp_metabox('team_members.customers_gallery');
    ?>
     <?php foreach ($customers_gallery as $customer_logo) : ?>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive img-customer" src="<?php echo $customer_logo['image_1'] ?>">
            </div>

            <?php endforeach; ?>

            </div>