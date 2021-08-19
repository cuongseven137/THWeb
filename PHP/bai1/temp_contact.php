<?php
    include "header.php";
    $loi_chao = new HelloClass();
?>

    <div class="container">
        <h2>
        <?php
            // Sử dụng - Tạo đối tượng - Object

            $loi_chao->set_content("Xin chào các bạn!");
            $loi_chao->say_hello();

            $chao2 = new HelloClass();
        ?>
        </h2>

        <div class="contact-page">
            <div class="contact-header">
                <h2> <?php $chao2->say_hello();?> </h2>
                <h1>
                    <span class="subtitle">vnskills academy</span>
                    Liên hệ
                </h1>
            </div>

            <div class="contact-wrapper">

                <?php
                    include "temp_contact_info.php";
                    include "temp_contact_form.php";
                ?>



                <div class="button-wrapper">
                    <a href="" class="link-button">Đăng ký học ngay</a>
                </div>

            </div>

        </div>

    </div>
<?php
    include "footer.php";
?>