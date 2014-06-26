<!-- Team Member Profiles -->

<div class="row">

    <div class="col-lg-12">
        <h2 class="page-header"><?php echo vp_metabox('team_members.team_section_title'); ?></h2>
    </div>

    <?php 
    $team_values = vp_metabox('team_members.member_details');
    ?>



    <?php foreach ($team_values as $member) : ?>

    <div class="col-sm-4">
        <img class="img-responsive" src="<?php echo $member['member_image']; ?> ">
        <h3><?php echo $member['member_name']; ?>
            <small><?php echo $member['member_title']; ?></small>
        </h3>
        <p><?php echo $member['member_description']; ?></p>
        <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="<?php echo $member['facebook_link']; ?> " data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a>
            </li>
            <li class="tooltip-social linkedin-link"><a href="<?php echo $member['linkedin_link']; ?> " data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a>
            </li>
            <li class="tooltip-social twitter-link"><a href="<?php echo $member['twitter_link']; ?> " data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a>
            </li>
            <li class="tooltip-social google-plus-link"><a href="<?php echo $member['google_plus_link']; ?> " data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a>
            </li>
        </ul>
    </div>

<?php endforeach; ?>
</div>
