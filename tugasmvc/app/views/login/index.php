<!-- background -->
<div class="container-fluid background">
    <div class="card shadow mt-5 w-75 mx-auto p-3 mb-5 bg-body rounded">
        <!-- navtab -->
        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">

            <!-- pills Tab sign Up -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Sign Up</button>
            </li>

            <!-- pils Tab Log In -->
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                    type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Login</button>
            </li>
        </ul>

        <!-- tab sign up -->
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h4 class="my-4">Sign Up</h4>
                <form class="row g-3">
                    <!-- namaDepan -->
                    <div class="col-md-6">
                        <label class="form-label">Nama Depan</label>
                        <input type="text" class="form-control" id="namaDepan" placeholder="Jhon">
                    </div>
                    <!-- namaBelakang -->
                    <div class="col-md-6">
                        <label class="form-label">Nama Belakang</label>
                        <input type="text" class="form-control" id="namaBelakang" placeholder="Doe">
                    </div>
                    <!-- Username -->
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="wummpy3515">
                    </div>
                    <!-- Pass -->
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password">
                    </div>
                    <!-- Select Gender -->
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Jenis Kelamin</label>
                        <select id="inputState" class="form-select">
                            <!-- option gender -->
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <!-- checkbox agree -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                            aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            Saya telah membaca syarat dan ketentuan
                        </label>
                    </div>
                    <!-- tombol sign up -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>

            <!-- tab log in -->
            <div class="tab-pane fade justify-content-center" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h4 class="mt-4">Log In</h4>
                <h5 class="mb-4">masukan usename dan password anda!!!</h5>
                <form>
                    <!-- text username -->
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputUserName" aria-describedby="emailHelp">
                    </div>
                    <!-- text password -->
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <!-- link forgot password -->
                    <div class="col-md-6 d-flex justify-content-center">
                        <a href="#!">Forgot password?</a>
                    </div>
                    <!-- tombol log in -->
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </div>
    </div>
</div>