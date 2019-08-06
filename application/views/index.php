<?php
    $this->load->view('templates/header');
?>

<body>
    <div class="container text-center">
        <p class="text-white" id="head-caption"><b>Membangun</b> masa lalu <br> untuk <b>masa depan</b></p>
        <!-- btn-donate -->
        <button type="button" class="btn font-weight-bold" id="btn-donate" data-toggle="modal"
            data-target="#donate-modal">
            DONATE
        </button>
        <!-- eof btn-donate -->
        <!-- Donate Modal -->
        <div class="modal fade" id="donate-modal" tabindex="-1" role="dialog" aria-labelledby="donate-modal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div id="donate-head">
                        <h5 class="modal-title font-weight-bold">Donate</h5>
                    </div>

                    <div class="d-flex justify-content-center">
                        <div class="modal-body" id="login-body">
                            <img class="mt-5 mb-2" src="assets/images/LogoDE-2.png" alt="logo-dea" srcset="">
                            <form id="login-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="user-id" placeholder="User ID"
                                        required>
                                </div>

                                <button type="submit" class="btn" id="btn-login">
                                    <a href="<?php echo site_url('donation/payment'); ?>" class="text-decoration-none" id="btn-text">Login</a>
                                </button>

                            </form>
                        </div>

                        <div class="modal-body" id="register-body">
                            <div class="form-group d-flex justify-content-center">
                                <select class="form-control" id="kategori">
                                    <option value="alumni">Alumni</option>
                                    <option value="staff">Staff</option>
                                    <option value="dosen">Dosen</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                </select>
                            </div>
                            <!-- form alumni -->
                            <form id="form-alumni">
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Anda"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="noHp" placeholder="No HP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="prodi" placeholder="Program Studi"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="thnLulus" placeholder="Tahun Lulus"
                                        required>
                                </div>

                                <button type="submit" class="btn" id="btn-register">
                                    <a href="pembayaran.html" class="text-decoration-none" id="btn-text">Register</a>
                                </button>
                            </form>
                            <!-- eof form alumni -->

                            <!-- form staff -->
                            <form id="form-staff" hidden>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Anda"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="noHp" placeholder="No HP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nipStaff" placeholder="NIP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="lokKerja" placeholder="Lokasi Kerja"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="jabatanStaff" placeholder="Jabatan"
                                        required>
                                </div>

                                <button type="submit" class="btn" id="btn-register">
                                    <a href="pembayaran.html" class="text-decoration-none" id="btn-text">Register</a>
                                </button>
                            </form>
                            <!-- eof form staff -->

                            <!-- form dosen -->
                            <form id="form-dosen" hidden>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Anda"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="noHp" placeholder="No HP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nipDosen" placeholder="NIP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="prodiDosen"
                                        placeholder="Program Studi" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="jabatanDosen"
                                        placeholder="Jabatan Struktural" required>
                                </div>

                                <button type="submit" class="btn" id="btn-register">
                                    <a href="pembayaran.html" class="text-decoration-none" id="btn-text">Register</a>
                                </button>
                            </form>
                            <!-- eof form dosen -->

                            <!-- form mahasiswa -->
                            <form id="form-mahasiswa" hidden>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Anda"
                                        required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="noHp" placeholder="No HP" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="nim" placeholder="NIM" required>
                                </div>
                                <div class="form-group d-flex justify-content-center">
                                    <input type="text" class="form-control" name="prodi" placeholder="Program Studi"
                                        required>
                                </div>

                                <button type="submit" class="btn" id="btn-register">
                                    <a href="pembayaran.html" class="text-decoration-none" id="btn-text">Register</a>
                                </button>
                            </form>
                            <!-- eof form mahasiswa -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- eof Donate Modal -->

        <div class="d-flex justify-content-center mb-5">
            <div class="col-md-4 mt-5" id="donation-card">
                <p>Total Donasi Saat Ini</p>
                <p class="font-weight-bold" id="total-donation">Rp. 1.024.677.000</p>
            </div>
        </div>

        <h2 id="tittle" class="font-weight-bold">Telkom University Endowment Fund</h2>
        <p class="font-weight-bold mt-4 mb-4">
            adalah dana yang dihimpun, diinvestasikan dan dikelola terus menerus dengan penuh tanggung
            <br> jawab untuk mendukung dan menjamin keberanjutan kemajuan dan prestasi Universitas Telkom
        </p>
        <p>
            Setiap tahun, presentase dari 'annual income return' dari investasi dan pengelolaan endowment fund,
            <br> akan digunakan untuk mendukung kebutuhan pendanaan universitas meniliputi:
        </p>

        <div class="d-flex justify-content-center bd-highlight mb-5 mt-5">
            <div class="p-3 bd-highlight" id="needs-card">
                <img class="mb-3" src="assets/images/beasiswa.png" alt="beasiswa-icon" srcset="">
                <p>Beasiswa</p>
            </div>
            <div class="p-3 bd-highlight" id="needs-card">
                <img class="mb-3" src="assets/images/kerjasama.png" alt="kerjasama-icon" srcset="">
                <p>Kerjasama</p>
            </div>
            <div class="p-3 bd-highlight" id="needs-card">
                <img class="mb-2" src="assets/images/penelitian.png" alt="penelitian-icon" srcset="">
                <p>Penelitian</p>
            </div>
            <div class="p-3 bd-highlight" id="needs-card">
                <img class="mb-2" src="assets/images/infrastruktur.png" alt="infrastruktur-icon" srcset="">
                <p>Infrastruktur</p>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="card mr-3" style="width: 49%;">
                <img src="assets/images/orang2.png" class="card-img-top" alt="news-img">
                <div class="text-left card-body">
                    <p style="color: red" class="font-weight-bold">Event </p>
                    <h2>Tel-U Coffee habis dalam waktu 2 jam</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laudantium corporis mollitia
                        quas eius aliquid similique placeat iste, quisquam suscipit praesentium cum dicta error libero,
                        repellat enim saepe. Ex, accusantium.
                    </p>
                    <button id="btn-more" class="btn font-weight-bold">More</button>
                </div>
            </div>

            <div class="card" style="width: 49%;">
                <img src="assets/images/orang.png" class="card-img-top" alt="news-img">
                <div class="card-body text-left">
                    <p style="color: red" class="font-weight-bold">Event </p>
                    <h2>Tel-U Coffee membuka stand bersama YPT</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis laudantium corporis mollitia
                        quas eius aliquid similique placeat iste, quisquam suscipit praesentium cum dicta error libero,
                        repellat enim saepe. Ex, accusantium.
                    </p>
                    <button id="btn-more" class="btn font-weight-bold">More</button>
                </div>
            </div>

        </div>

    </div>
</body>

<?php
    $this->load->view('templates/footer');
?>