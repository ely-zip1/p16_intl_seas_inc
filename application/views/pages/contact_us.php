<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  $this->load->view('templates/header');
?>

<div class="main-content">

    <section class="section">

        <div class="section-body">

            <div class="section-header section-header-custom">
                <h1>MESSAGE SUPPORT</h1>
            </div>

            <div class="row">
                <!-- <div class="col-sm-3"></div> -->

                <div class="col-sm-12">
                    <div class="card card_message">
                        <div class="card-body">
                            <p>
                                Concerns, suggestions, complaints? - You can tell us about it. We'll be sure to get back
                                to
                                you.
                            </p>

                            <?php
                                 if($this->session->flashdata('message_status') == 'sent'){
                                    echo '
                                    <div class="alert alert-success alert-dismissible">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                <span>×</span>
                                            </button>
                                            Your message has been sent.
                                        </div>
                                    </div>';
                                }
                            ?>

                            <?php echo form_open('contact_us/new_message');?>

                            <div class="form-group">
                                <label for="message_text" class="text-white">Message: </label>
                                <textarea class="form-control message-text" id="message_text" name="message_text"
                                    rows="1" cols="20" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-message-submit float-right"
                                onclick="this.disabled=true;this.value='Submitting...'; this.form.submit();">
                                Submit
                            </button>
                            <?php echo form_close();?>
                        </div>

                    </div>
                </div>

                <div class="col-sm-3"></div>
            </div>


        </div>
    </section>
</div>



<?php $this->load->view('templates/footer'); ?>