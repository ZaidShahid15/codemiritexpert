$projectsDir = "d:\abubaker_portfolio\codemiritexpert\public\images\projects"
if (-Not (Test-Path $projectsDir)) { New-Item -ItemType Directory -Force -Path $projectsDir }

1..6 | ForEach-Object {
    $outFile = Join-Path $projectsDir "project-$_.jpg"
    Invoke-WebRequest -Uri "https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80" -OutFile $outFile
}
