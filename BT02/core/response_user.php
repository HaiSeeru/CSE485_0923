<?php
if (isset($_GET['response'])) {
    $response = $_GET['response'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
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
if (isset($_GET['response_add'])) {
    $response2 = $_GET['response_add'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response2 ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['response_del'])) {
    $response3 = $_GET['response_del'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response3 ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>

<?php
if (isset($_GET['response_edit'])) {
    $response4 = $_GET['response_edit'];
?>

    <div class="toast align-items-center text-white bg-info border-0 position-absolute top-0 start-50 mt-3 me-3" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                <?php echo $response4 ?>
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php
}
?>