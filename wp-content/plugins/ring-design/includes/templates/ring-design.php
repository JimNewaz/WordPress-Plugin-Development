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
</head>


<body>
    <!-- CONTAINER -->
    <div class="container d-flex align-items-center min-vh-100">
        <div class="row g-0 justify-content-center">
            <!-- TITLE -->
            <div class="col-lg-4 offset-lg-1 mx-0 px-0">
                <!-- TITLE -->

                <div id="title-container">
                    <img class="covid-image" src="./img/covid-check.png">
                    <h2>DESIGN YOUR RING</h2>

                    <p>Design the most beautiful engagement or cocktail ring! We use only the finest quality diamonds
                        and
                        gemstones to make the perfect ring just for you!</p>
                </div>

            </div>
            <!-- FORMS -->
            <div class="col-lg-7 mx-0 px-0">
                <div class="progress">
                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50"
                        class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"
                        style="width: 0%"></div>
                </div>
                <div id="qbox-container">
                    <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                        <div id="steps-container">

                            <!-- Personal Information -->

                            <div class="step">
                                <h4>Provide us with your personal information:</h4>
                                <div class="mt-1">
                                    <label class="form-label">First Name:</label>
                                    <input class="form-control" id="full_name" name="full_name" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Last Name:</label>
                                    <input class="form-control" id="address" name="address" type="text">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Email:</label>
                                    <input class="form-control" id="email" name="email" type="email">
                                </div>
                                <div class="mt-2">
                                    <label class="form-label">Phone / Mobile Number:</label>
                                    <input class="form-control" id="phone" name="phone" type="text">
                                </div>
                            </div>

                            <div class="step">
                                <h4>Select CENTRE STONE</h4>
                                <div class="cc-selector">
                                    <input id="diamond" type="radio" name="ring_stone" value="diamond" />
                                    <label class="drinkcard-cc diamond" for="diamond"></label>

                                    <input id="labground-diamond" type="radio" name="ring_stone"
                                        value="labground-diamond" />
                                    <label class="drinkcard-cc labground-diamond" for="labground-diamond"></label>

                                    <input id="moissanite" type="radio" name="ring_stone" value="moissanite" />
                                    <label class="drinkcard-cc moissanite" for="moissanite"></label>

                                    <input id="salt_diamond" type="radio" name="ring_stone" value="salt_diamond" />
                                    <label class="drinkcard-cc salt_diamond" for="salt_diamond"></label>

                                    <input id="sapphire" type="radio" name="ring_stone" value="sapphire" />
                                    <label class="drinkcard-cc sapphire" for="sapphire"></label>

                                    <input id="morganite" type="radio" name="ring_stone" value="morganite" />
                                    <label class="drinkcard-cc morganite" for="morganite"></label>

                                    <input id="tanzanite" type="radio" name="ring_stone" value="tanzanite" />
                                    <label class="drinkcard-cc tanzanite" for="tanzanite"></label>

                                    <input id="emerald" type="radio" name="ring_stone" value="emerald" />
                                    <label class="drinkcard-cc emerald" for="emerald"></label>

                                    <input id="ruby" type="radio" name="ring_stone" value="ruby" />
                                    <label class="drinkcard-cc ruby" for="ruby"></label>

                                    <input id="tourmaline" type="radio" name="ring_stone" value="tourmaline" />
                                    <label class="drinkcard-cc tourmaline" for="tourmaline"></label>
                                </div>

                            </div>
                            <div class="step">
                                <h4>Select Ring Shape</h4>
                                <div class="cc-selector">
                                    <input id="round" type="radio" name="ring_shape" value="round" />
                                    <label class="drinkcard-cc round_ring_shape" for="round">Round</label>

                                    <input id="emerald" type="radio" name="ring_shape" value="emerald" />
                                    <label class="drinkcard-cc emerald_ring_shape" for="emerald">Emerald</label>

                                    <input id="oval" type="radio" name="ring_shape" value="oval" />
                                    <label class="drinkcard-cc oval_ring_shape" for="oval">Oval</label>

                                    <input id="square" type="radio" name="ring_shape" value="square" />
                                    <label class="drinkcard-cc square_ring_shape" for="square">Square</label>

                                    <input id="cushion" type="radio" name="ring_shape" value="cushion" />
                                    <label class="drinkcard-cc cushion_ring_shape" for="cushion">Cushion</label>

                                    <input id="baguette" type="radio" name="ring_shape" value="baguette" />
                                    <label class="drinkcard-cc baguette_ring_shape" for="baguette">Baguette</label>

                                    <input id="pear" type="radio" name="ring_shape" value="pear" />
                                    <label class="drinkcard-cc pear_ring_shape" for="pear">Pear</label>

                                    <input id="radiant" type="radio" name="ring_shape" value="radiant" />
                                    <label class="drinkcard-cc radiant_ring_shape" for="radiant">Radiant</label>

                                    <input id="brilliant" type="radio" name="ring_shape" value="brilliant" />
                                    <label class="drinkcard-cc brilliant_ring_shape" for="brilliant">Brilliant</label>

                                    <input id="marquise" type="radio" name="ring_shape" value="marquise" />
                                    <label class="drinkcard-cc marquise_ring_shape" for="marquise">Marquise</label>

                                    <input id="heart" type="radio" name="ring_shape" value="heart" />
                                    <label class="drinkcard-cc heart_ring_shape" for="heart">Heart</label>
                                </div>
                            </div>
                            <div class="step">
                                <h4>THE PERFECT SETTING STYLE</h4>
                                <hr>
                                <div class="cc-selector">
                                    <input id="solitaire" type="radio" name="ring_style" value="solitaire" />
                                    <label class="drinkcard-cc solitaire" for="solitaire">solitaire</label>

                                    <input id="diamond-head" type="radio" name="ring_style" value="diamond-head" />
                                    <label class="drinkcard-cc diamond-head" for="diamond-head">Diamond Head</label>

                                    <input id="side-stone" type="radio" name="ring_style" value="side-stone" />
                                    <label class="drinkcard-cc side-stone" for="side-stone">Side stone</label>

                                    <input id="advice" type="radio" name="ring_style" value="advice" />
                                    <label class="drinkcard-cc advice" for="advice">Need Advice</label>
                                </div>
                            </div>
                            <div class="step">
                                <h4>DO YOU PREFER ROSE GOLD, YELLOW GOLD, WHITE GOLD OR PLATINUM?</h4>
                                <div class="cc-selector">
                                    <input id="rose-gold" type="radio" name="ring_color" value="solitaire" />
                                    <label class="drinkcard-cc rose-gold" for="rose-gold">solitaire</label>

                                    <input id="yellow-gold" type="radio" name="ring_color" value="yellow-gold" />
                                    <label class="drinkcard-cc yellow-gold" for="yellow-gold">Diamond Head</label>

                                    <input id="white-gold" type="radio" name="ring_color" value="white-gold" />
                                    <label class="drinkcard-cc white-gold" for="white-gold">Side stone</label>

                                    <input id="platinum" type="radio" name="ring_color" value="platinum" />
                                    <label class="drinkcard-cc platinum" for="platinum">platinum</label>

                                    <input id="advice" type="radio" name="ring_color" value="advice" />
                                    <label class="drinkcard-cc advice" for="advice">Need Advice</label>
                                </div>
                            </div>
                            <div class="step">
                                <h4>WHAT IS YOUR DESIRED BUDGET FOR EUM ERROR MODI CORRU'S RING?</h4>
                                <div class="row">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select" required="true" aria-required="true" name="currency">
                                        <option value="zar">ZAR</option>
                                        <option value="usd">USD</option>
                                        <option value="gbp">USD</option>
                                        <option value="eur">EUR</option>
                                        <option value="aud">AUD</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <label class="form-label">Budget</label>
                                    <select class="form-select" required="true" aria-required="true" name="budget">
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
                            </div>

                            <div class="step">
                                <div class="mt-1">
                                    <div class="closing-text">
                                        <h4>DESIGNING THE PERFECT RING </h4>
                                        <p>Thank you! <br>
                                            Before we get designing. Would like our designers to Video call, WhatsApp,
                                            email of call you for a consultation?</p>


                                        <select class="form-select" required="true" aria-required="true">
                                            <option value="active">Email</option>
                                            <option value="no access">Whatsapp Call</option>
                                            <option value="">Whatsapp Chat</option>
                                            <option value="">Phone Call</option>
                                            <option value="">Video Call</option>

                                        </select>
                                        <br>
                                        <a class="back-link" href="">Go back from the beginning ➜</a>
                                    </div>
                                </div>
                            </div>
                            <div id="success">
                                <div class="mt-5">


                                </div>
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

</html>

{% comment %} <form id="enquiry_form">
    <?php wp_nonce_field('wp_rest');?>

    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="Mike"><br><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Walker"><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value=""><br><br>

    <label for="phone">Phone</label><br>
    <input type="number" id="phone" name="phone" value="12346789"><br><br>

    <button type="submit">Submit</button>
</form>

<div id="form-success"></div>
<div id="form-error"></div> {% endcomment %}

<script>
    jQuery(document).ready(function ($) {
        $('#enquiry_form').submit(function (event) {

            event.preventDefault();
            var form = $(this);

            $.ajax({
                type: 'POST',
                url: "<?php echo get_rest_url(null, 'v1/ring-design/submit'); ?>",
                data: form.serialize(),
                success: function (response) {
                    form.hide();
                    $('#form-success').html(response).fadeIn();
                },
                error: function () {
                    $('#form-error').html('Sorry something is wr').fadeIn();
                }
            });

        });
    });
</script>

<?php else: ?>
This form is not active
<?php endif; ?>