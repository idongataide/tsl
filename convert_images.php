<?php
// Function to convert image to WebP using ImageMagick
function convertToWebP($source, $destination, $quality = 80) {
    try {
        $imagick = new Imagick($source);
        $imagick->setImageFormat('webp');
        $imagick->setImageCompressionQuality($quality);
        $imagick->writeImage($destination);
        $imagick->clear();
        return true;
    } catch (Exception $e) {
        echo "Error converting $source: " . $e->getMessage() . "\n";
        return false;
    }
}

// Directory containing images
$imgDir = 'assets/img/';

// Get all image files
$files = glob($imgDir . '*.{jpg,jpeg,png}', GLOB_BRACE);

foreach ($files as $file) {
    $info = pathinfo($file);
    $webpFile = $info['dirname'] . '/' . $info['filename'] . '.webp';
    
    if (convertToWebP($file, $webpFile)) {
        echo "Converted: $file to $webpFile\n";
    } else {
        echo "Failed to convert: $file\n";
    }
}
?> 