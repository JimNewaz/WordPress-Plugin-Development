<form id="enquiry_form">
    <?php wp_nonce_field('wp_rest');?>

    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" value="Mike"><br><br>

    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" value="Walker"><br><br>

    <label for="phone">Phone</label><br>
    <input type="number" id="phone" name="phone" value="12346789"><br><br>

    <button type ="submit">Submit</button>
</form>

<script>
    jQuery(document).ready(function($){
        $('#enquiry_form').submit(function(event){

            event.preventDefault();
            var form = $(this);            
            
            $.ajax({
                type: 'POST',                
                url: "<?php echo get_rest_url(null, 'v1/ring-design/submit'); ?>",
                data: form.serialize()
            });
            
        });
    });
</script>

