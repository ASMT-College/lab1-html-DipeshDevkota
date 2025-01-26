<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="nav-links">
            <a href="#"><i class="fas fa-envelope"></i> Gmail</a>
            <a href="#"><i class="fas fa-images"></i> Images</a>
            <div class="menu-icon"><i class="fas fa-bars"></i></div>
        </nav>
    </header>

    <main class="main-content">
        <img 
            src="https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png" 
            alt="Google Logo" 
            class="google-logo">

        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input 
                type="text" 
                placeholder="Search Google or type a URL" 
                class="search-bar">
            <i class="fas fa-microphone microphone-icon"></i>
        </div>

        <div class="button-container">
            <button><i class="fas fa-search"></i> Google Search</button>
            <button><i class="fas fa-star"></i> I'm Feeling Lucky</button>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-links">
            <span><i class="fas fa-info-circle"></i> About</span>
            <span><i class="fas fa-ad"></i> Advertising</span>
            <span><i class="fas fa-briefcase"></i> Business</span>
            <span><i class="fas fa-cogs"></i> How Search Works</span>
        </div>
        <div class="footer-links">
            <span><i class="fas fa-lock"></i> Privacy</span>
            <span><i class="fas fa-file-alt"></i> Terms</span>
            <span><i class="fas fa-sliders-h"></i> Settings</span>
        </div>
    </footer>
</body>
</html>
