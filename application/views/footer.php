</div>

<footer class="bg-secondary text-white">
    <div class="container">
        <div class="row pt-3">
            <div class="col">
                <p>Develop By Mahasiswa STT-NF @2021</p>
            </div>
        </div>
    </div>
</footer>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-footer">
                <a class="btn btn-dark" href="<?= base_url('pelamar/logout') ?>">Logout</a>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/pover.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
<script src="https://kit.fontawesome.com/591c9f7b54.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/js/scripts.js"></script>
</body>

</html>
