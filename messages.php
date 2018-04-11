<?php if (!empty($loginMessage) OR !empty($registerMessage) OR !empty($logoutMessage)) : ?>
    <div class="row w-100 m-auto login-message">
        <div class="col-12">
            <p class="my-3 text-center text-white">
                <?php if (!empty($loginMessage)) {
                    echo $loginMessage ;
                }
                if (!empty($registerMessage)) {
                    echo $registerMessage ;
                }
                if (!empty($logoutMessage)) {
                    echo $logoutMessage ;
                } ?>

            </p>
        </div>
    </div>

<?php elseif (!empty($vLoginMessage) OR !empty($vRegisterMessage) OR !empty($msgPanier) ): ?>
    <div class="row w-100 m-auto v-login-message">
        <div class="col-12">
            <p class="my-3 text-center text-white">
                <?php if (!empty($vLoginMessage)) {
                    echo $vLoginMessage ;
                }
                if (!empty($vRegisterMessage)) {
                    echo $vRegisterMessage ;
                }
                if (!empty($msgPanier)) {
                echo $msgPanier ;
                } ?>
            </p>
        </div>
    </div>
<?php endif; ?>

