<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg2"></div>
            <div class="crumb col-sm-8 col-md-8 col-lg-8">
                <section class="text-center">
                    <div class="crumb-item d-inline-flex"><button type="submit">1</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex active"><button type="submit">2</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="submit">3</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="submit">4</button></div>
                </section>

                <h3 class="text-center"><b>ENDOWMENT INFORMATION</b></h3>
                <?php echo form_open("endowment/step3"); ?>
                    <div class="form-box">
                        <div class="form-group">
                            <label for="amount" class="required">Amount</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="number" id="amount" name="amount" class="form-control"
                                    aria-label="Amount (to the nearest rupiah)" placeholder="Enter Your Amount Number"
                                    required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="PurposeReason">Purpose and Reason:</label> <br>
                            <textarea name="purposereason" id="purposereason" cols="100" rows="10"
                                placeholder="Enter Your Purpose and Reason" style="width: 100%;"></textarea>
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

</html>