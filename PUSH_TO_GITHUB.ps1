# ============================================================================
# Apna Fantasy - GitHub Push Script (PowerShell)
# This script pushes your project to GitHub automatically
# ============================================================================

Write-Host ""
Write-Host "╔════════════════════════════════════════════════════════════════╗" -ForegroundColor Cyan
Write-Host "║                                                                ║" -ForegroundColor Cyan
Write-Host "║        APNA FANTASY - GITHUB PUSH AUTOMATION SCRIPT            ║" -ForegroundColor Cyan
Write-Host "║                                                                ║" -ForegroundColor Cyan
Write-Host "╚════════════════════════════════════════════════════════════════╝" -ForegroundColor Cyan
Write-Host ""

# Check if Git is installed
try {
    $gitVersion = git --version
    Write-Host "✅ Git found: $gitVersion" -ForegroundColor Green
} catch {
    Write-Host "❌ Git is not installed or not in PATH" -ForegroundColor Red
    Write-Host "Please install Git from: https://git-scm.com/download/win" -ForegroundColor Yellow
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host ""

# Get GitHub username
$githubUser = Read-Host "Enter your GitHub username"
if ([string]::IsNullOrWhiteSpace($githubUser)) {
    Write-Host "❌ GitHub username cannot be empty" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

# Get repository name
$repoName = Read-Host "Enter repository name (default: apna-fantasy)"
if ([string]::IsNullOrWhiteSpace($repoName)) {
    $repoName = "apna-fantasy"
}

# Get current directory
$currentDir = Get-Location
Write-Host ""
Write-Host "Working directory: $currentDir" -ForegroundColor Cyan
Write-Host ""

# Initialize git if not already done
if (-not (Test-Path ".git")) {
    Write-Host "📦 Initializing Git repository..." -ForegroundColor Cyan
    git init
    
    if ($LASTEXITCODE -ne 0) {
        Write-Host "❌ Failed to initialize git" -ForegroundColor Red
        Read-Host "Press Enter to exit"
        exit 1
    }
    
    Write-Host "✅ Git repository initialized" -ForegroundColor Green
    Write-Host ""
    
    # Configure git
    Write-Host "👤 Configuring Git user..." -ForegroundColor Cyan
    $gitName = Read-Host "Enter your full name"
    $gitEmail = Read-Host "Enter your email"
    
    git config user.name "$gitName"
    git config user.email "$gitEmail"
    
    Write-Host "✅ Git configured" -ForegroundColor Green
    Write-Host ""
}

# Create .gitignore if it doesn't exist
if (-not (Test-Path ".gitignore")) {
    Write-Host "🔍 Creating .gitignore file..." -ForegroundColor Cyan
    
    $gitignoreContent = @"
# IDE and Editor
.vscode/
.idea/
*.swp
*.swo
*~

# OS
.DS_Store
Thumbs.db

# Cache
.cache/
*.tmp
*.log
"@
    
    $gitignoreContent | Out-File -Encoding UTF8 ".gitignore"
    Write-Host "✅ .gitignore created" -ForegroundColor Green
    Write-Host ""
}

# Add all files
Write-Host "📝 Adding files to Git..." -ForegroundColor Cyan
git add .

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Failed to add files" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "✅ Files added" -ForegroundColor Green
Write-Host ""

# Check for existing commits
$hasCommits = git rev-parse --short HEAD 2>$null
if ($LASTEXITCODE -ne 0) {
    Write-Host "💾 Creating initial commit..." -ForegroundColor Cyan
    git commit -m "Initial commit: Apna Fantasy - Complete gaming platform with 4 games"
    
    if ($LASTEXITCODE -ne 0) {
        Write-Host "❌ Failed to create commit" -ForegroundColor Red
        Read-Host "Press Enter to exit"
        exit 1
    }
    
    Write-Host "✅ Commit created" -ForegroundColor Green
    Write-Host ""
}

# Check if remote exists
$remoteExists = git remote get-url origin 2>$null
if ($LASTEXITCODE -eq 0) {
    Write-Host "⚠️  Remote already exists, updating..." -ForegroundColor Yellow
    git remote remove origin
}

# Add GitHub remote
Write-Host "🔗 Connecting to GitHub..." -ForegroundColor Cyan
$repoUrl = "https://github.com/$githubUser/$repoName.git"
git remote add origin $repoUrl

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Failed to add remote" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "✅ Connected to: $repoUrl" -ForegroundColor Green
Write-Host ""

# Rename branch to main
Write-Host "📌 Setting branch to main..." -ForegroundColor Cyan
git branch -M main

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Failed to rename branch" -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "✅ Branch set to main" -ForegroundColor Green
Write-Host ""

# Push to GitHub
Write-Host "🚀 Pushing code to GitHub..." -ForegroundColor Cyan
Write-Host ""
Write-Host "NOTE: You may be prompted to authenticate with GitHub" -ForegroundColor Yellow
Write-Host "You can use:" -ForegroundColor Yellow
Write-Host "  - GitHub personal access token" -ForegroundColor Yellow
Write-Host "  - GitHub username and password" -ForegroundColor Yellow
Write-Host ""

git push -u origin main

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Failed to push to GitHub" -ForegroundColor Red
    Write-Host ""
    Write-Host "Possible solutions:" -ForegroundColor Yellow
    Write-Host "1. Check your internet connection" -ForegroundColor Yellow
    Write-Host "2. Verify GitHub username and repository name" -ForegroundColor Yellow
    Write-Host "3. Make sure repository exists on GitHub" -ForegroundColor Yellow
    Write-Host "4. Check if you have the correct permissions" -ForegroundColor Yellow
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host ""
Write-Host "╔════════════════════════════════════════════════════════════════╗" -ForegroundColor Green
Write-Host "║                                                                ║" -ForegroundColor Green
Write-Host "║            ✅ SUCCESS! Code pushed to GitHub!                 ║" -ForegroundColor Green
Write-Host "║                                                                ║" -ForegroundColor Green
Write-Host "║  Repository: $repoUrl" -ForegroundColor Green
Write-Host "║                                                                ║" -ForegroundColor Green
Write-Host "║  Next steps:                                                   ║" -ForegroundColor Green
Write-Host "║  1. Open your browser and go to the URL above                ║" -ForegroundColor Green
Write-Host "║  2. Add a project description and topics                      ║" -ForegroundColor Green
Write-Host "║  3. Share your repository with others                         ║" -ForegroundColor Green
Write-Host "║                                                                ║" -ForegroundColor Green
Write-Host "╚════════════════════════════════════════════════════════════════╝" -ForegroundColor Green
Write-Host ""

Read-Host "Press Enter to exit"
