<?php
if (isset($_GET['response_error'])) {
    $response = $_GET['response_error'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute end-0 me-5 mb-5" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['response_done'])) {
    $response = $_GET['response_done'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute end-0 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['response_done1'])) {
    $response = $_GET['response_done1'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute end-0 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>