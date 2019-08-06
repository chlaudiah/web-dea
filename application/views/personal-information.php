<body>

<?php
// disini tampilkan flashdata dari controller
if ($this->session->flashdata('alert')=='success'){
    echo "<script>alert('Thank you, your data has been recorded.');</script>";
}
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg2"></div>
            <div class="crumb col-sm-8 col-md-8 col-lg-8">
                <section class="text-center">
                    <div class="crumb-item d-inline-flex active"><button type="button" data-toggle="tooltip"
                            data-placement="top" title="Personal Information">1</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="button" data-toggle="tooltip"
                            data-placement="top" title="Endowment Information">2</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="button" data-toggle="tooltip"
                            data-placement="top" title="Payment Method">3</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="button" data-toggle="tooltip"
                            data-placement="top" title="Invoice">4</button></div>
                </section>

                <h3 class="text-center"><b>PERSONAL INFORMATION</b></h3>
                <?php echo form_open("endowment/step2"); ?>
                    <div class="form-group form-check">
                        <input type="checkbox" name="anonim" class="form-check-input" id="anonim">
                        <label class="form-check-label" for="anonim">Anonim</label>
                    </div>
                    <div class="form-box">
                        <div class="form-group">
                            <label class="required" for="category">Category</label>
                            <select class="form-control" id="category" required>
                                <option id="masyarakat" value="masyarakat" selected>Masyarakat</option>
                                <option id="alumni" value="alumni">Alumni</option>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="required" for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" placeholder="Enter Your E-mail" required>
                        </div>
                        <div class="form-group">
                            <label class="required" for="affiliation">Affiliation</label>
                            <input type="text" class="form-control" name="affiliation" id="affiliation"
                                placeholder="Enter Your Affiliation" required>
                        </div>
                        <div class="form-group form-alumni">
                            <label class="alumni-only" for="faculty">Faculty</label>
                            <input type="text" class="form-control alumni-only" name="faculty" id="faculty"
                                placeholder="Enter Your Faculty">
                        </div>
                        <div class="form-group form-alumni">
                            <label class="alumni-only" for="major">Major</label>
                            <input type="text" class="form-control alumni-only" name="major" id="major"
                                placeholder="Enter Your Major">
                        </div>
                        <div class="form-group form-alumni">
                            <label class="alumni-only" for="year">Year</label>
                            <input type="text" class="form-control alumni-only" name="year" id="year" placeholder="Enter Your Year">
                        </div>
                    </div>
                    <center>
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary mt-4">
                    </center>
                <?php echo form_close(); ?>
            </div>
            <div class="col-sm-2 col-md-2 col-lg2"></div>
        </div>
    </div>
</body>

<script>
    $('#anonim').change(function () {
        if ($(this).is(":checked")) {
            $('label').removeClass('required');
            $('input').removeAttr('required');
        } else {
            $('label').addClass('required');
            $('input').prop('required', true);
        }
    });

    $('#category').change(function () {
        if (this.value == 'masyarakat') {
            $('.form-alumni').hide();
            $('label .alumni-only').removeClass('required');
            $('input .alumni-only').removeAttr('required');
        }
        else {
            $('.form-alumni').show();
            $('label .alumni-only').addClass('required');
            $('input .alumni-only').prop('required', true);
        }
    });
</script>
