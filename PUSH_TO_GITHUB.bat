@echo off
REM ============================================================================
REM Apna Fantasy - GitHub Push Script
REM This script pushes your project to GitHub automatically
REM ============================================================================

echo.
echo ╔════════════════════════════════════════════════════════════════╗
echo ║                                                                ║
echo ║        APNA FANTASY - GITHUB PUSH AUTOMATION SCRIPT            ║
echo ║                                                                ║
echo ╚════════════════════════════════════════════════════════════════╝
echo.

REM Check if Git is installed
where git >nul 2>nul
if %errorlevel% neq 0 (
    echo ❌ Git is not installed or not in PATH
    echo Please install Git from: https://git-scm.com/download/win
    pause
    exit /b 1
)

echo ✅ Git found
echo.

REM Get GitHub username
set /p GITHUB_USER="Enter your GitHub username: "
if "%GITHUB_USER%"=="" (
    echo ❌ GitHub username cannot be empty
    pause
    exit /b 1
)

REM Get repository name
set /p REPO_NAME="Enter repository name (default: apna-fantasy): "
if "%REPO_NAME%"=="" set REPO_NAME=apna-fantasy

REM Get current directory
cd /d "%~dp0"
echo.
echo Working directory: %cd%
echo.

REM Initialize git if not already done
if not exist .git (
    echo 📦 Initializing Git repository...
    git init
    if %errorlevel% neq 0 (
        echo ❌ Failed to initialize git
        pause
        exit /b 1
    )
    echo ✅ Git repository initialized
    echo.
    
    REM Configure git
    echo 👤 Configuring Git user...
    set /p GIT_NAME="Enter your full name: "
    set /p GIT_EMAIL="Enter your email: "
    
    git config user.name "%GIT_NAME%"
    git config user.email "%GIT_EMAIL%"
    echo ✅ Git configured
    echo.
)

REM Create .gitignore if it doesn't exist
if not exist .gitignore (
    echo 🔍 Creating .gitignore file...
    (
        echo # IDE and Editor
        echo .vscode/
        echo .idea/
        echo *.swp
        echo *.swo
        echo *~
        echo.
        echo # OS
        echo .DS_Store
        echo Thumbs.db
        echo.
        echo # Cache
        echo .cache/
        echo *.tmp
        echo *.log
    ) > .gitignore
    echo ✅ .gitignore created
    echo.
)

REM Add all files
echo 📝 Adding files to Git...
git add .
if %errorlevel% neq 0 (
    echo ❌ Failed to add files
    pause
    exit /b 1
)
echo ✅ Files added
echo.

REM Check for existing commits
git rev-parse --is-inside-work-tree >nul 2>nul
git rev-parse --short HEAD >nul 2>nul
if %errorlevel% neq 0 (
    echo 💾 Creating initial commit...
    git commit -m "Initial commit: Apna Fantasy - Complete gaming platform with 4 games"
    if %errorlevel% neq 0 (
        echo ❌ Failed to create commit
        pause
        exit /b 1
    )
    echo ✅ Commit created
    echo.
)

REM Check if remote exists
git remote get-url origin >nul 2>nul
if %errorlevel% equ 0 (
    echo ⚠️  Remote already exists, updating...
    git remote remove origin
)

REM Add GitHub remote
echo 🔗 Connecting to GitHub...
set REPO_URL=https://github.com/%GITHUB_USER%/%REPO_NAME%.git
git remote add origin %REPO_URL%
if %errorlevel% neq 0 (
    echo ❌ Failed to add remote
    pause
    exit /b 1
)
echo ✅ Connected to: %REPO_URL%
echo.

REM Rename branch to main
echo 📌 Setting branch to main...
git branch -M main
if %errorlevel% neq 0 (
    echo ❌ Failed to rename branch
    pause
    exit /b 1
)
echo ✅ Branch set to main
echo.

REM Push to GitHub
echo 🚀 Pushing code to GitHub...
echo.
echo NOTE: You may be prompted to authenticate with GitHub
echo You can use:
echo   - GitHub personal access token
echo   - GitHub username and password
echo.
git push -u origin main
if %errorlevel% neq 0 (
    echo ❌ Failed to push to GitHub
    echo.
    echo Possible solutions:
    echo 1. Check your internet connection
    echo 2. Verify GitHub username and repository name
    echo 3. Make sure repository exists on GitHub
    echo 4. Check if you have the correct permissions
    pause
    exit /b 1
)

echo.
echo ╔════════════════════════════════════════════════════════════════╗
echo ║                                                                ║
echo ║            ✅ SUCCESS! Code pushed to GitHub!                 ║
echo ║                                                                ║
echo ║  Repository: %REPO_URL%
echo ║                                                                ║
echo ║  Next steps:                                                   ║
echo ║  1. Open your browser and go to the URL above                │
echo ║  2. Add a project description and topics                      ║
echo ║  3. Share your repository with others                         ║
echo ║                                                                ║
echo ╚════════════════════════════════════════════════════════════════╝
echo.

pause
