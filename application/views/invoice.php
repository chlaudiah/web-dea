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
                    <div class="crumb-item d-inline-flex"><button type="submit">3</button></div>
                    <hr class="d-inline-flex line">
                    <div class="crumb-item d-inline-flex active"><button type="submit">4</button></div>
                </section>

                <h3 class="text-center"><b>INVOICE</b></h3>
                <?php echo form_open("endowment/addData"); ?>
                    <div class="form-box">
                        <h5 class="text-center"><b>Thank You So Much for Your Kind Donation!</b></h5>
                        <p>Dear <?php echo $_SESSION['personal']['name']; ?>,</p>
                        <p>
                            Thank you for your donation. Your generosity is appreciated! Here are the details
                            of your donation.
                        </p>
                        <div class="form-box mb-3">
                            <table>
                                <tr>
                                    <td><b>Endowment ID</b></td>
                                    <td><b>: </b></td>
                                    <td>12345</td>
                                </tr>
                                <tr>
                                    <td><b>Name</b></td>
                                    <td><b>: </b></td>
                                    <td>
                                        <?php echo $_SESSION['personal']['name']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Date</b></td>
                                    <td><b>: </b></td>
                                    <td>
                                        <?php echo date("d/m/Y");; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Purpose</b></td>
                                    <td><b>: </b></td>
                                    <td>
                                        <?php echo $_SESSION['endowment']['purposereason']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Amount</b></td>
                                    <td><b>: </b></td>
                                    <td>
                                        <?php echo $_SESSION['endowment']['amount']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Payment Method</b></td>
                                    <td><b>: </b></td>
                                    <td>
                                        <?php echo ucwords($_SESSION['payment']['payment-method']); ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <p>Sincerely,</p>
                        <p>Direktorat Endowment and Alumni</p>
                    </div>
                    <center>
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary mt-4">
                    </center>
                <?php echo form_close(); ?>
            </div>
            <div class="col-sm-2 col-md-2 col-lg2"></div>
        </div>
    </div>

<?php
    // foreach($_SESSION['personal'] as $i => $j){
    //     echo $i.$j."</br>";
    // }
    // foreach($_SESSION['endowment'] as $i => $j){
    //     echo $i.$j."</br>";
    // }
    // foreach($_SESSION['payment'] as $i => $j){
    //     echo $i.$j."</br>";
    // }
    // echo $_SESSION['payment']['payment-method'];
?>

</body>