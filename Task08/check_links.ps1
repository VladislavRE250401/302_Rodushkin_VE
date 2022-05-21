$desktopPath = [Environment]::GetFolderPath("Desktop")

Get-Item "$desktopPath\*.lnk" | ForEach-Object {
    $shell = New-Object -COM WScript.Shell
    $shortcut = $shell.CreateShortcut($_.FullName)
    $badLinksDir = "$desktopPath\BadLinks\"
	
    If (!(Test-Path $shortcut.TargetPath)) { 
        If (!(Test-Path $destination)) {
			New-Item -Path $destination -ItemType Directory
        }
		Move-Item -Path $_.FullName -Destination ($badLinksDir + $_.Name) -Force
    }
}
pause