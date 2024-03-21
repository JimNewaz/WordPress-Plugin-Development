<?php 
    if(get_plugin_options('ring_design_plugin_active')):
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
</head>


<body>
    <!-- CONTAINER -->
    <div class="container d-flex align-items-center min-vh-100">
        <div class="row g-0 justify-content-center">
            <!-- TITLE -->
            <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <!-- TITLE -->
                <div id="title-container">
                    <img class="covid-image" src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/ring.png">

                    <h3>DESIGN YOUR RING</h3>

                    <p class="text-center">Design the most beautiful engagement or cocktail ring! We use only the finest
                        quality diamonds
                        and
                        gemstones to make the perfect ring just for you!</p>
                </div>

            </div>
            <!-- FORMS -->
            <div class="col-lg-7 mx-0 px-0">
                <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                        class="progress-bar progress-bar-striped progress-bar-animated bg-form" role="progressbar"
                        style="width: 0%">
                    </div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <?php wp_nonce_field('wp_rest');?>

                        <div id="steps-container">
                            <!-- Personal Information -->
                            <div class="step">
                                <h4>Provide us with your personal information:</h4>
                                <div class="mt-1">
                                    <label class="form-label">First Name:</label>
                                    <input class="form-control" id="full_name" name="first_name" type="text" required>
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Last Name:</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text" required>
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Email:</label>
                                    <input class="form-control" id="email" name="email" type="email" required>
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Phone / Mobile Number:</label>
                                    <input class="form-control" id="phone" name="phone" type="text" required>
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Address:</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="5"
                                        required></textarea>
                                </div>
                            </div>

                            <!-- Rign Stone -->
                            <div class="step">
                                <div class="main-container">
                                    <h4>SELECT CENTRE STONE</h4>
                                    <div class="radio-buttons">
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="DIAMOND" required>
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_1.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Diamond</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="LAB GROWN DIAMOND">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_2.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">LAB GROWN DIAMOND</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="MOISSANITE">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Moissanite_icon.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">MOISSANITE</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="SALT PEPPER DIAMOND">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Salt_Pepper_icon.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">SALT PEPPER Diamond</p>
                                        </label>

                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="SAPPHIRE">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_3.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">SAPPHIRE</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="MORGANITE">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_4.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">MORGANITE</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="TANZANITE">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_5.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">TANZANITE</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="EMERALD">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_6.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">EMERALD</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="RUBY">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/stone_7.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">RUBY</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="TOURMALINE">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Tourmaline_icon.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">TOURMALINE</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_stone" value="Other">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/others-removebg-preview.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Other</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Ring Shape -->
                            <div class="step">
                                <div class="main-container">
                                    <h4>SELECT RING SHAPE</h4>
                                    <div class="radio-buttons">
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Round" required>
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/round_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Round</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Emerald">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/emerald_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Emerald</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Oval">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/oval_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Oval</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Square">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/square_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Square</p>
                                        </label>

                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Cushion">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/cushion_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Cushion</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Baguette">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/bag_1.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Baguette</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Pear">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/pear_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Pear</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Radiant">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/radiant_n.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Radiant</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Birlliant">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Trilliant_Cut_icon_N.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Brilliant</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Marquise">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Marquise_Cut_icon_N.png">

                                                </div>

                                            </span>
                                            <p class="f-12label">Marquise</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Heart">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://shinyrockpolished.com/wp-content/themes/Avada-Child-Theme/img/Heart_Cut_icon_N.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Heart</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_shape" value="Other">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/others-removebg-preview.png">

                                                </div>
                                            </span>
                                            <p class="f-12label">Other</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Ring Style -->
                            <div class="step">
                                <div class="main-container">
                                    <h4>THE PERFECT SETTING STYLE</h4>
                                    <hr>
                                    <div class="radio-buttons">
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_style" value="solitaire" required>
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/sq-removebg-preview.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">solitaire</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_style" value="Diamond Head">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/diamond-head-removebg-preview.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Diamond Head</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_style" value="Side stone">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/diamond_head-removebg-preview.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Side stone</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_style" value="Need Advice">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/others-removebg-preview.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Need Advice</p>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- Colors -->
                            <div class="step">
                                <div class="main-container">
                                    <h4>DO YOU PREFER ROSE GOLD, YELLOW GOLD, WHITE GOLD OR PLATINUM?</h4>
                                    <hr>
                                    <div class="radio-buttons">
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_color" value="Gold" required>
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/gold.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Gold</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_color" value="Yellow Gold">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/yellow.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Yellow Gold</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_color" value="White Gold">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/platinum.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">White Gold</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_color" value="Platinum">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/platinum.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Platinum</p>
                                        </label>
                                        <label class="custom-radio">
                                            <input type="radio" name="ring_color" value="Need Advice">
                                            <span class="radio-btn"><i class="las la-check"></i>
                                                <div class="hobbies-icon">
                                                    <img
                                                        src="https://a0d.ae1.myftpupload.com/wp-content/uploads/2024/03/others-removebg-preview.png">
                                                </div>
                                            </span>
                                            <p class="f-12label">Need Advice</p>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Currency and Budget -->
                            <div class="step">
                                <h4>WHAT IS YOUR DESIRED BUDGET FOR EUM ERROR MODI CORRU'S RING?</h4>

                                <label class="form-label">Currency</label>
                                <select class="form-select" required="true" aria-required="true" name="currency"
                                    required>
                                    <option value="zar">ZAR</option>
                                    <option value="usd">USD</option>
                                    <option value="gbp">USD</option>
                                    <option value="eur">EUR</option>
                                    <option value="aud">AUD</option>
                                </select>
                                <br>
                                <label class="form-label">Budget</label>
                                <select class="form-select" required="true" aria-required="true" name="budget" required>
                                    <option value="500 - 1000">500 - 1000</option>
                                    <option value="1000 - 2000">1000 - 2000</option>
                                    <option value="2000 - 5000">2000 - 5000</option>
                                    <option value="5000+">5000+</option>
                                    <option value="5000 - 10,000">5000 - 10,000</option>
                                    <option value="10,000 - 20,000">10,000 - 20,000</option>
                                    <option value="30,000 - 50,000">30,000 - 50,000</option>
                                    <option value="50,000 - 100,000">50,000 - 100,000</option>
                                    <option value="100,000 - 200,000">100,000 - 200,000</option>
                                    <option value="200,000+">200,000+</option>
                                    <option value="advice">Need Advice</option>
                                </select>
                            </div>

                            <!-- Consultant -->
                            <div class="step">
                                <div class="mt-1">
                                    <div class="closing-text">
                                        <h4>DESIGNING THE PERFECT RING </h4>
                                        <p>Thank you! <br>
                                            How would like our designers to Video call, WhatsApp,
                                            email of call you for a consultation?
                                        </p>

                                        <select class="form-select" required="true" aria-required="true"
                                            name="consultant" required>
                                            <option value="Email">Email</option>
                                            <option value="Whatsapp Call">Whatsapp Call</option>
                                            <option value="Whatsapp Chat">Whatsapp Chat</option>
                                            <option value="Phone Call">Phone Call</option>
                                            <option value="Video Call">Video Call</option>

                                        </select>
                                        <br>
                                        <a class="back-link" href="">Go back from the beginning ➜</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Success -->
                            <div id="success" class="w-100">
                            </div>
                            <div id="error" class="w-100">
                            </div>
                        </div>
                        <div id="q-box__buttons">
                            <button id="prev-btn" type="button">Previous</button>
                            <button id="next-btn" type="button">Next</button>
                            <button id="submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

<script>
    // Rest API 
    jQuery(document).ready(function ($) {
        $('#form-wrapper').submit(function (event) {

            event.preventDefault();
            var form = $(this);

            $.ajax({
                type: 'POST',
                url: "<?php echo get_rest_url(null, 'v1/ring-design/submit'); ?>",
                data: form.serialize(),
                success: function (response) {
                    $('#success').html(response).fadeIn();
                },
                error: function () {
                    $('#error').html('Sorry something is wrong!').fadeIn();
                }
            });

        });
    });
</script>

</html>


<?php else: ?>
This form is not active
<?php endif; ?>