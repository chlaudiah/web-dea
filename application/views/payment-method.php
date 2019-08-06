<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-md-2 col-lg2"></div>
            <div class="crumb col-sm-8 col-md-8 col-lg-8">
                <section class="text-center">
                    <div class="crumb-item d-inline-flex"><button type="submit">1</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="submit">2</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex active"><button type="submit">3</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex"><button type="submit">4</button></div>
                </section>

                <h3 class="text-center">PAYMENT METHOD</h3>
                <?php echo form_open("endowment/step4"); ?>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input type="number" id="amount" name="amount" class="form-control"
                                aria-label="Amount (to the nearest rupiah)" value="<?php echo $_SESSION['endowment']['amount'] ?>" readonly>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <label for="method" class="required">Choose Payment Method Below</label><br>
                        <input type="radio" id="card" name="payment-method" value="credit-card" checked required> Credit
                        Card/Debit Card
                        <input type="radio" class="ml-4" id="transfer" name="payment-method" value="transfer" required>
                        Transfer Bank (BNI/Mandiri)
                    </div>
                    
                    <div class="form-box">
                        <h5 class="text-center credit-debit"><b>Card Info</b></h5>
                        <div class="form-group credit-debit">
                            <label for="category" class="required">Card Type</label> <br>
                            <input type="radio" id="card" name="card-type" value="visa" checked> VISA
                            <input type="radio" class="ml-4" id="transfer" name="card-type" value="master"> MASTER
                        </div>
                        <div class="form-group credit-debit">
                            <label for="card-name" class="required">Cardholder Name</label>
                            <input type="text" class="form-control" name="card-name" id="card-name"
                                placeholder="Enter Your Cardholder Name" required>
                        </div>
                        <div class="form-group credit-debit">
                            <label for="card-number" class="required">Card Number</label>
                            <input type="text" class="form-control" name="card-number" id="card-number"
                                placeholder="Enter Your Card Number" maxlength="16" required>
                        </div>
                        <div class="form-group row credit-debit">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <label for="exp-month" class="required">Exp. Month</label>
                                <input type="text" class="form-control" name="exp-month" id="exp-month"
                                    placeholder="Enter Your Card Exp. Month" maxlength="2" required>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <label for="exp-year" class="required">Exp. Year</label>
                                <input type="text" class="form-control" name="exp-year" id="exp-year"
                                    placeholder="Enter Your Card Exp. Year" maxlength="4" required>
                            </div>
                        </div>
                        <div class="form-group credit-debit">
                            <label for="cvc-number" class="required">CVC Number</label>
                            <input type="text" class="form-control" name="cvc-number" id="cvc-number"
                                placeholder="Enter Your CVC Number" maxlength="3" required>
                        </div>

                        <div id="tf-bank">
                            <a class="accordion" style="display: block;">Bank BNI (Virtual Accout)</a>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <a class="accordion" style="display: block;">Bank Mandiri (Virtual Accout)</a>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <a class="accordion" style="display: block;">Bank BNI</a>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>

                            <a class="accordion" style="display: block;">Bank Mandiri</a>
                            <div class="panel">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
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
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("on");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    $('#card').change(function () {
        if ($(this).is(":checked")) {
            $('.credit-debit').show()
            $('input').prop('required', true);
            $('#tf-bank').hide()
        } else {
            $('.credit-debit').hide()
            $('input').removeAttr('required');
            $('#tf-bank').show()
        }
    });

    $('#transfer').change(function () {
        if ($(this).is(":checked")) {
            $('#tf-bank').show()
            $('input').removeAttr('required');
            $('.credit-debit').hide()
        } else {
            $('#tf-bank').hide()
            $('input').prop('required', true);
            $('.credit-debit').show()
        }
    });
</script>