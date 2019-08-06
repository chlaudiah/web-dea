<?php
    $this->load->view('templates/header');
?>

<body>
    <div class="container">
        <h1 class="text-white text-center mt-5 mb-5">Selamat datang <br> <b>{Nama User}</b></h1>

        <div class="d-flex justify-content-center">
            <div id="pembayaran-card">
                <div id="pembayaran-head">
                    <h5 class="text-white text-center font-weight-bold">Donate</h5>
                </div>

                <div id="pembayaran-body">
                    <form id="form-mahasiswa">
                        <div id="donate-detail">
                            <h5 class="text-center mb-4 font-weight-bold">Rincian Donasi</h5>
                            <div class="form-group d-flex justify-content-center">
                                <select class="form-control" id="bank">
                                    <option value="bni">BNI</option>
                                    <option value="mandiri">Mandiri</option>
                                    <option value="link-aja">Link Aja</option>
                                    <option value="go-pay">Go-Pay</option>
                                </select>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="text" class="form-control" name="nama" value="{Nama User}"
                                    placeholder="Nama Anda" disabled>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="text" class="form-control" name="noHp" value="{Nomor HP User"
                                    placeholder="No HP" disabled>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="email" class="form-control" name="email" value="{Email User}"
                                    placeholder="Email" disabled>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="text" class="form-control" name="prodi" placeholder="Pesan Anda untuk Kami"
                                    required>
                            </div>

                        </div>

                        <div class="form-group mt-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="text-muted form-check-label" for="gridCheck">
                                    Terms & Condition
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-block" id="btn-submit">
                            <a href="pembayaran.html" class="text-decoration-none" id="btn-text">Submit</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>


    </div>
</body>

<?php
    $this->load->view('templates/footer');
?>