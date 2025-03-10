<?php defined( 'ABSPATH' ) || die( 'Cheatin\' uh?' ); ?>
<?php if ( ! isset( $view ) ) { return; } ?>
<div id="hmwp_ghost_mode_modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger"><?php echo esc_html__( 'Upgrade and activate new security features!', 'hide-my-wp' ) ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body m-0 p-0">
                <a href="https://hidemywpghost.com/hide-my-wp-pricing/" target="_blank"><img src="<?php echo _HMWP_ASSETS_URL_ . 'img/pro_offer.png' ?>" alt="" style="max-width: 100%; height: auto; margin: 5px auto;"/></a>
            </div>
        </div>
    </div>
</div>
