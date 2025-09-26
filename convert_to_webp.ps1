# Download cwebp if not already installed
$cwebpUrl = "https://storage.googleapis.com/downloads.webmproject.org/releases/webp/libwebp-1.3.2-windows-x64.zip"
$cwebpZip = "libwebp.zip"
$cwebpDir = "libwebp"

if (-not (Test-Path "cwebp.exe")) {
    Write-Host "Downloading cwebp..."
    Invoke-WebRequest -Uri $cwebpUrl -OutFile $cwebpZip
    Expand-Archive -Path $cwebpZip -DestinationPath $cwebpDir
    Move-Item -Path "$cwebpDir\libwebp-*\bin\cwebp.exe" -Destination "cwebp.exe"
    Remove-Item -Path $cwebpZip -Force
    Remove-Item -Path $cwebpDir -Recurse -Force
}

# Convert images
$images = Get-ChildItem -Path "assets\img" -Recurse -Include "*.jpg","*.jpeg","*.png"
foreach ($image in $images) {
    $outputPath = [System.IO.Path]::ChangeExtension($image.FullName, "webp")
    Write-Host "Converting $($image.Name) to WebP..."
    
    # Use different quality settings based on image size
    $quality = 80
    if ($image.Length -gt 2MB) {
        $quality = 65  # More aggressive compression for very large files
    } elseif ($image.Length -gt 1MB) {
        $quality = 75  # Medium compression for large files
    }
    
    & .\cwebp.exe -q $quality "$($image.FullName)" -o "$outputPath"
} 