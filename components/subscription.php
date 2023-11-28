<?php if (!empty($alertMessage)) : ?>
    <div id="form-submission" class="toast <?php echo $alertType; ?>" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="toast-header">
            <strong class="me-auto">Subscription Status</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $alertMessage; ?>
        </div>
    </div>
    <script>
        var toast = new bootstrap.Toast(document.getElementById('form-submission'));
        toast.show();
    </script>
<?php endif; ?>


<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-secondary p-5">
    <h4 class="text-white">Newsletter</h4>
    <h6 class="text-white">Subscribe Our Newsletter</h6>
    <p>Enter your E-mail right now to receive our latest news letters</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-group">
            <input type="email" name="email" class="form-control border-white p-3" placeholder="Your Email" required>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
    </form>
</div>