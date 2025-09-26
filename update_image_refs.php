<?php

function updateImageReferences($directory) {
    $files = glob($directory . '/*.php');
    $files = array_merge($files, glob($directory . '/*/*.php'));
    
    foreach ($files as $file) {
        $content = file_get_contents($file);
        
        // Replace image extensions
        $patterns = array(
            '/\.jpg(["\'])/i',
            '/\.jpeg(["\'])/i',
            '/\.png(["\'])/i',
            '/\.JPG(["\'])/i'
        );
        
        $replacements = array(
            '.webp$1',
            '.webp$1',
            '.webp$1',
            '.webp$1'
        );
        
        $newContent = preg_replace($patterns, $replacements, $content);
        
        if ($content !== $newContent) {
            file_put_contents($file, $newContent);
            echo "Updated: $file\n";
        }
    }
}

// Update files in views directory
updateImageReferences('views');
?> 