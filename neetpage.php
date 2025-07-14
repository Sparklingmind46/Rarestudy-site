<?php /* Template Name: NEET Landing Page */ ?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEET Super Combo - Limited Time Offer | ₹99 Only</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #4a6bff;
            --secondary: #ff6b6b;
            --dark: #2c3e50;
            --light: #f8f9fa;
            --success: #28a745;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7ff;
            color: var(--dark);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(135deg, var(--primary), #6a5acd);
            color: white;
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 10px 10px;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
            color: #ffd700;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .tagline {
            font-size: 14px;
            opacity: 0.9;
        }
        
        .hero {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin: 30px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .hero:after {
            content: "HOT DEAL";
            position: absolute;
            top: 20px;
            right: -40px;
            background: var(--secondary);
            color: white;
            padding: 5px 40px;
            transform: rotate(45deg);
            font-size: 14px;
            font-weight: bold;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .hero-content {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .hero-text {
            flex: 1;
            min-width: 300px;
            padding-right: 20px;
        }
        
        .hero-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
        }
        
        .hero-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--dark);
            line-height: 1.2;
        }
        
        h1 span {
            color: var(--primary);
        }
        
        h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--primary);
        }
        
        .price {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }
        
        .current-price {
            font-size: 3rem;
            font-weight: 700;
            color: var(--secondary);
        }
        
        .original-price {
            font-size: 1.5rem;
            text-decoration: line-through;
            color: #999;
            margin-left: 15px;
        }
        
        .discount-badge {
            background: var(--secondary);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
            margin-left: 15px;
            font-size: 1.2rem;
        }
        
        .countdown {
            background: rgba(74, 107, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: center;
        }
        
        .countdown-title {
            font-size: 1rem;
            margin-bottom: 10px;
            color: var(--dark);
            font-weight: 600;
        }
        
        .countdown-timer {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .countdown-item {
            background: white;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            min-width: 60px;
        }
        
        .countdown-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        .countdown-label {
            font-size: 0.7rem;
            color: #666;
            text-transform: uppercase;
        }
        
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(135deg, var(--primary), #6a5acd);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.2rem;
            border: none;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(74, 107, 255, 0.4);
            transition: all 0.3s ease;
            text-align: center;
            margin: 10px 0;
            width: 100%;
            max-width: 400px;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(74, 107, 255, 0.6);
        }
        
        .btn i {
            margin-right: 10px;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }
        
        .feature {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .feature:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .feature-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .testimonials {
            margin: 50px 0;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .testimonial {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 15px;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .author-info h4 {
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #666;
            font-size: 0.9rem;
        }
        
        .faq {
            margin: 50px 0;
        }
        
        .faq-item {
            background: white;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        
        .faq-question {
            padding: 20px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, padding 0.3s ease;
        }
        
        .faq-item.active .faq-answer {
            padding: 0 20px 20px;
            max-height: 500px;
        }
        
        .guarantee {
            background: linear-gradient(135deg, #4a6bff, #6a5acd);
            color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin: 40px 0;
        }
        
        .guarantee i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ffd700;
        }
        
        footer {
            background: var(--dark);
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 50px;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
        }
        
        .purchase-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            padding: 15px;
            display: flex;
            align-items: center;
            transform: translateX(150%);
            transition: transform 0.5s ease;
            z-index: 1000;
            max-width: 350px;
        }
        
        .purchase-notification.show {
            transform: translateX(0);
        }
        
        .purchase-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .purchase-info h4 {
            margin-bottom: 5px;
            font-size: 0.9rem;
        }
        
        .purchase-info p {
            font-size: 0.8rem;
            color: #666;
        }
        
        .purchase-time {
            font-size: 0.7rem;
            color: #999;
            margin-top: 3px;
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }
            
            .hero-content {
                flex-direction: column;
            }
            
            .hero-text {
                padding-right: 0;
                margin-bottom: 30px;
            }
            
            .price {
                justify-content: center;
            }
            
            .btn {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <div class="logo">
                <i class="fas fa-book-medical"></i>
                <span>NEETPrepPro</span>
            </div>
            <div class="tagline">
                Trusted by 10,000+ NEET Aspirants
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>NEET <span>Super Combo</span> - Your Ultimate Preparation Package</h1>
                    <h2>Everything you need to crack NEET in one package!</h2>
                    
                    <div class="price">
                        <div class="current-price">₹99</div>
                        <div class="original-price">₹449</div>
                        <div class="discount-badge">78% OFF</div>
                    </div>
                    
                    <div class="countdown">
                        <div class="countdown-title">Hurry! Offer ends in:</div>
                        <div class="countdown-timer">
                            <div class="countdown-item">
                                <div class="countdown-number" id="hours">02</div>
                                <div class="countdown-label">Hours</div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-number" id="minutes">37</div>
                                <div class="countdown-label">Minutes</div>
                            </div>
                            <div class="countdown-item">
                                <div class="countdown-number" id="seconds">45</div>
                                <div class="countdown-label">Seconds</div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#buy-now" class="btn">
                        <i class="fas fa-bolt"></i> BUY NOW - LIMITED OFFER
                    </a>
                    
                    <p style="text-align: center; margin-top: 10px; font-size: 0.9rem;">
                        <i class="fas fa-lock"></i> Secure Payment · Instant Delivery
                    </p>
                </div>
                
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="NEET Super Combo Package">
                </div>
            </div>
        </div>
        
        <div class="features">
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h3 class="feature-title">Complete Syllabus Coverage</h3>
                <p>Physics, Chemistry & Biology - all subjects covered as per latest NEET syllabus</p>
            </div>
            
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">High-Yield Topics</h3>
                <p>Focus on most important concepts that carry maximum weightage in NEET</p>
            </div>
            
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <h3 class="feature-title">Time-Saving Format</h3>
                <p>Concise notes, diagrams & mnemonics to help you learn faster</p>
            </div>
            
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="feature-title">Digital Access</h3>
                <p>Access on any device - study on your phone, tablet or computer</p>
            </div>
        </div>
        
        <div class="testimonials">
            <h2 style="text-align: center; margin-bottom: 30px;">What Students Say About Our Materials</h2>
            
            <div class="testimonial-grid">
                <div class="testimonial">
                    <div class="testimonial-text">
                        "These notes helped me improve my score by 120 marks! The diagrams and mnemonics made memorizing so much easier."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Priya K.">
                        <div class="author-info">
                            <h4>Priya K.</h4>
                            <p>NEET 2023, AIR 1245</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-text">
                        "The combo package is worth every rupee. Saved me so much time I would have wasted making my own notes."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rahul S.">
                        <div class="author-info">
                            <h4>Rahul S.</h4>
                            <p>NEET 2023, AIR 876</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial">
                    <div class="testimonial-text">
                        "I was struggling with Organic Chemistry until I got these notes. The reaction mechanisms are explained perfectly!"
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ananya P.">
                        <div class="author-info">
                            <h4>Ananya P.</h4>
                            <p>NEET 2023, AIR 543</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="guarantee">
            <i class="fas fa-shield-alt"></i>
            <h2>100% Satisfaction Guarantee</h2>
            <p>If you're not completely satisfied with your purchase within 7 days, we'll give you a full refund - no questions asked!</p>
        </div>
        
        <div class="faq">
            <h2 style="text-align: center; margin-bottom: 30px;">Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>What's included in the NEET Super Combo?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>The NEET Super Combo includes complete study materials for Physics, Chemistry (Physical, Organic & Inorganic), and Biology (Botany & Zoology). You'll get concise theory notes, important diagrams, high-yield topic summaries, and practice questions with solutions - all formatted for easy learning and revision.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>How will I receive the materials after purchase?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Immediately after your payment is processed, you'll receive an email with download links to access all the materials in PDF format. You can download them to your device or print them out - whatever works best for your study routine.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Is this suitable for the latest NEET syllabus?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Absolutely! Our team of NEET experts regularly updates all materials to match the latest NCERT syllabus and exam pattern. The current version is fully updated for NEET 2024 preparation.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <span>Can I get a refund if I'm not satisfied?</span>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Yes, we offer a 7-day no-questions-asked money-back guarantee. If for any reason you're not satisfied with your purchase, simply email us within 7 days and we'll process your refund immediately.</p>
                    
                    </div>
            </div>
        </div>
        
        <div class="hero" id="buy-now" style="text-align: center;">
            <h2 style="margin-bottom: 20px;">Ready to Boost Your NEET Preparation?</h2>
            <p style="font-size: 1.2rem; margin-bottom: 30px;">Get instant access to all materials for just ₹99 (78% off the regular price of ₹449)</p>
            
            <div class="countdown">
                <div class="countdown-title">Last chance! Offer ends in:</div>
                <div class="countdown-timer">
                    <div class="countdown-item">
                        <div class="countdown-number" id="hours2">02</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="minutes2">37</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-number" id="seconds2">45</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div>
            </div>
            
            <a href="#" class="btn" onclick="fakePurchase()">
                <i class="fas fa-shopping-cart"></i> BUY NOW - ₹99 ONLY
            </a>
            
            <p style="margin-top: 20px; font-size: 0.9rem;">
                <i class="fas fa-lock"></i> 256-bit SSL Secure Payment · Money Back Guarantee
            </p>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="logo" style="justify-content: center; margin-bottom: 15px;">
                <i class="fas fa-book-medical"></i>
                <span>NEETPrepPro</span>
            </div>
            
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
                <a href="#">Refund Policy</a>
            </div>
            
            <p style="opacity: 0.8; font-size: 0.9rem;">
                © 2023 NEETPrepPro. All rights reserved.<br>
                Disclaimer: This product is not affiliated with or endorsed by the National Testing Agency (NTA).
            </p>
        </div>
    </footer>
    
    <!-- Fake purchase notifications -->
    <div class="purchase-notification" id="purchase1">
        <img src="https://randomuser.me/api/portraits/women/33.jpg" class="purchase-avatar" alt="Customer">
        <div class="purchase-info">
            <h4>Anjali from Mumbai just purchased</h4>
            <p>NEET Super Combo at ₹99</p>
            <div class="purchase-time">2 minutes ago</div>
        </div>
    </div>
    
    <div class="purchase-notification" id="purchase2">
        <img src="https://randomuser.me/api/portraits/men/45.jpg" class="purchase-avatar" alt="Customer">
        <div class="purchase-info">
            <h4>Rohit from Delhi just purchased</h4>
            <p>NEET Super Combo at ₹99</p>
            <div class="purchase-time">5 minutes ago</div>
        </div>
    </div>
    
    <div class="purchase-notification" id="purchase3">
        <img src="https://randomuser.me/api/portraits/men/68.jpg" class="purchase-avatar" alt="Customer">
        <div class="purchase-info">
            <h4>Vikram from Bangalore just purchased</h4>
            <p>NEET Super Combo at ₹99</p>
            <div class="purchase-time">8 minutes ago</div>
        </div>
    </div>
    
    <script>
        // Countdown timer
        function updateCountdown() {
            let hours = document.getElementById('hours');
            let minutes = document.getElementById('minutes');
            let seconds = document.getElementById('seconds');
            
            let hours2 = document.getElementById('hours2');
            let minutes2 = document.getElementById('minutes2');
            let seconds2 = document.getElementById('seconds2');
            
            let time = hours.innerHTML * 3600 + minutes.innerHTML * 60 + seconds.innerHTML * 1 - 1;
            
            if (time < 0) {
                time = 2 * 3600 + 37 * 60 + 45; // Reset to 2:37:45
            }
            
            let h = Math.floor(time / 3600);
            let m = Math.floor((time % 3600) / 60);
            let s = time % 60;
            
            hours.innerHTML = h < 10 ? '0' + h : h;
            minutes.innerHTML = m < 10 ? '0' + m : m;
            seconds.innerHTML = s < 10 ? '0' + s : s;
            
            hours2.innerHTML = h < 10 ? '0' + h : h;
            minutes2.innerHTML = m < 10 ? '0' + m : m;
            seconds2.innerHTML = s < 10 ? '0' + s : s;
        }
        
        setInterval(updateCountdown, 1000);
        
        // Fake purchase notifications
        function showPurchaseNotification(id, delay) {
            setTimeout(function() {
                document.getElementById(id).classList.add('show');
                setTimeout(function() {
                    document.getElementById(id).classList.remove('show');
                }, 5000);
            }, delay);
        }
        
        function cyclePurchaseNotifications() {
            showPurchaseNotification('purchase1', 3000);
            showPurchaseNotification('purchase2', 12000);
            showPurchaseNotification('purchase3', 20000);
            
            // Repeat the cycle
            setTimeout(cyclePurchaseNotifications, 25000);
        }
        
        // Start the notification cycle after page loads
        setTimeout(cyclePurchaseNotifications, 3000);
        
        // FAQ accordion
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                item.classList.toggle('active');
                
                // Close other open items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                    }
                });
            });
        });
        
        // Fake purchase function for buy button
        function fakePurchase() {
            alert('Thank you for your interest! This is a demo page. On a real website, this would redirect to payment.');
            return false;
        }
    </script>
</body>
</html>
<?php get_footer(); ?>
