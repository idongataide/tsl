<?php
$pageTitle = "404 - Page Not Found";
?>

<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="error-code">404</h1>
                <h2 class="error-title">Page Not Found</h2>
                <p class="error-message">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                <a href="<?php echo base_url(); ?>" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<style>
.error-page {
    padding: 100px 0;
    text-align: center;
    min-height: 60vh;
    display: flex;
    align-items: center;
}

.error-code {
    font-size: 120px;
    font-weight: 700;
    color: #e74c3c;
    margin-bottom: 20px;
}

.error-title {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
}

.error-message {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
}

.btn-primary {
    padding: 12px 30px;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1px;
}
</style> 