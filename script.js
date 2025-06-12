// Language translations
const translations = {
    en: {
        'hero-title': 'Transform Your Home Into a Smart Home',
        'hero-description': 'Discover the latest in smart home technology with our comprehensive range of electronic solutions for modern living.',
        'cta-button': 'Explore Products',
        'about-title': 'About Us',
        'about-text-1': 'We are passionate about bringing the future of home automation to your doorstep. With years of experience in smart home technology, we provide cutting-edge solutions that make your life more convenient, secure, and efficient.',
        'about-text-2': 'Our team of experts is dedicated to helping you create the perfect smart home environment tailored to your needs and lifestyle.',
        'products-title': 'Our Products',
        'product-1-title': 'Smart Security Systems',
        'product-1-desc': 'Advanced security solutions for complete home protection',
        'product-2-title': 'Smart Lighting',
        'product-2-desc': 'Intelligent lighting control systems for every room',
        'product-3-title': 'Climate Control',
        'product-3-desc': 'Smart thermostats and HVAC automation systems',
        'product-4-title': 'Entertainment Systems',
        'product-4-desc': 'Smart TV and audio integration solutions',
        'product-5-title': 'Smart Appliances',
        'product-5-desc': 'Connected home appliances for modern living',
        'product-6-title': 'Home Automation Hubs',
        'product-6-desc': 'Central control systems for all your smart devices',
        'services-title': 'Our Services',
        'service-1-title': 'Installation',
        'service-1-desc': 'Professional installation of all smart home devices and systems',
        'service-2-title': 'Consultation',
        'service-2-desc': 'Expert advice on the best smart home solutions for your needs',
        'service-3-title': 'Maintenance',
        'service-3-desc': 'Ongoing support and maintenance for your smart home systems',
        'service-4-title': 'App Setup',
        'service-4-desc': 'Complete setup and configuration of smart home applications',
        'electronics-title': 'About Electronics',
        'electronics-text-1': 'Understanding smart home electronics is key to making informed decisions. Our devices use cutting-edge technology including IoT connectivity, AI integration, and energy-efficient designs.',
        'electronics-text-2': 'We work with leading brands and ensure all our products meet the highest standards for reliability, security, and performance in modern smart home environments.',
        'contact-title': 'Contact Us',
        'contact-subtitle': 'Get In Touch',
        'phone-label': 'Phone:',
        'email-label': 'Email:',
        'line-label': 'LINE:',
        'address-label': 'Address:',
        'footer-copyright': '© 2025 Smart Home Electronics. All rights reserved.',
        'footer-tagline': 'Making homes smarter, one device at a time.'
    },
    th: {
        'hero-title': 'เปลี่ยนบ้านของคุณให้เป็นสมาร์ทโฮม',
        'hero-description': 'ค้นพบเทคโนโลยีสมาร์ทโฮมล่าสุดด้วยผลิตภัณฑ์อิเล็กทรอนิกส์ครบครันสำหรับการใช้ชีวิตสมัยใหม่',
        'cta-button': 'สำรวจผลิตภัณฑ์',
        'about-title': 'เกี่ยวกับเรา',
        'about-text-1': 'เรามีความหลงใหลในการนำอนาคตของระบบอัตโนมัติในบ้านมาสู่หน้าประตูของคุณ ด้วยประสบการณ์หลายปีในเทคโนโลยีสมาร์ทโฮม เราให้บริการโซลูชันที่ทันสมัยที่ทำให้ชีวิตของคุณสะดวก ปลอดภัย และมีประสิทธิภาพมากขึ้น',
        'about-text-2': 'ทีมผู้เชี่ยวชาญของเรามุ่งมั่นที่จะช่วยให้คุณสร้างสภาพแวดล้อมสมาร์ทโฮมที่สมบูรณ์แบบตามความต้องการและไลฟ์สไตล์ของคุณ',
        'products-title': 'ผลิตภัณฑ์ของเรา',
        'product-1-title': 'ระบบรักษาความปลอดภัยอัจฉริยะ',
        'product-1-desc': 'โซลูชันด้านความปลอดภัยขั้นสูงเพื่อการป้องกันบ้านอย่างครบครัน',
        'product-2-title': 'ระบบแสงสว่างอัจฉริยะ',
        'product-2-desc': 'ระบบควบคุมแสงสว่างอัจฉริยะสำหรับทุกห้อง',
        'product-3-title': 'ระบบควบคุมอากาศ',
        'product-3-desc': 'เทอร์โมสแตทอัจฉริยะและระบบอัตโนมัติ HVAC',
        'product-4-title': 'ระบบบันเทิง',
        'product-4-desc': 'โซลูชันการรวมระบบทีวีสมาร์ทและเสียง',
        'product-5-title': 'เครื่องใช้ไฟฟ้าอัจฉริยะ',
        'product-5-desc': 'เครื่องใช้ไฟฟ้าในบ้านที่เชื่อมต่อได้สำหรับการใช้ชีวิตสมัยใหม่',
        'product-6-title': 'ฮับระบบอัตโนมัติในบ้าน',
        'product-6-desc': 'ระบบควบคุมส่วนกลางสำหรับอุปกรณ์อัจฉริยะทั้งหมดของคุณ',
        'services-title': 'บริการของเรา',
        'service-1-title': 'การติดตั้ง',
        'service-1-desc': 'การติดตั้งอุปกรณ์และระบบสมาร์ทโฮมทั้งหมดอย่างมืออาชีพ',
        'service-2-title': 'การให้คำปรึกษา',
        'service-2-desc': 'คำแนะนำจากผู้เชี่ยวชาญเกี่ยวกับโซลูชันสมาร์ทโฮมที่ดีที่สุดสำหรับความต้องการของคุณ',
        'service-3-title': 'การบำรุงรักษา',
        'service-3-desc': 'การสนับสนุนและบำรุงรักษาระบบสมาร์ทโฮมของคุณอย่างต่อเนื่อง',
        'service-4-title': 'การตั้งค่าแอป',
        'service-4-desc': 'การตั้งค่าและกำหนดค่าแอปพลิเคชันสมาร์ทโฮมอย่างครบถ้วน',
        'electronics-title': 'เกี่ยวกับอิเล็กทรอนิกส์',
        'electronics-text-1': 'การเข้าใจอิเล็กทรอนิกส์สมาร์ทโฮมเป็นกุญแจสำคัญในการตัดสินใจอย่างมีข้อมูล อุปกรณ์ของเราใช้เทคโนโลยีที่ทันสมัย รวมถึงการเชื่อมต่อ IoT การรวม AI และการออกแบบที่ประหยัดพลังงาน',
        'electronics-text-2': 'เราทำงานร่วมกับแบรนด์ชั้นนำและมั่นใจว่าผลิตภัณฑ์ทั้งหมดของเราตรงตามมาตรฐานสูงสุดด้านความน่าเชื่อถือ ความปลอดภัย และประสิทธิภาพในสภาพแวดล้อมสมาร์ทโฮมสมัยใหม่',
        'contact-title': 'ติดต่อเรา',
        'contact-subtitle': 'ติดต่อเรา',
        'phone-label': 'โทรศัพท์:',
        'email-label': 'อีเมล:',
        'line-label': 'ไลน์:',
        'address-label': 'ที่อยู่:',
        'footer-copyright': '© 2025 Smart Home Electronics สงวนลิขสิทธิ์',
        'footer-tagline': 'ทำให้บ้านฉลาดขึ้น ทีละอุปกรณ์'
    },
    zh: {
        'hero-title': '将您的家转变为智能家居',
        'hero-description': '通过我们全面的电子解决方案，探索最新的智能家居技术，为现代生活服务。',
        'cta-button': '探索产品',
        'about-title': '关于我们',
        'about-text-1': '我们热衷于将家庭自动化的未来带到您的门前。凭借多年的智能家居技术经验，我们提供尖端解决方案，让您的生活更加便利、安全和高效。',
        'about-text-2': '我们的专家团队致力于帮助您创造完美的智能家居环境，满足您的需求和生活方式。',
        'products-title': '我们的产品',
        'product-1-title': '智能安防系统',
        'product-1-desc': '完整家庭保护的先进安全解决方案',
        'product-2-title': '智能照明',
        'product-2-desc': '每个房间的智能照明控制系统',
        'product-3-title': '气候控制',
        'product-3-desc': '智能恒温器和暖通空调自动化系统',
        'product-4-title': '娱乐系统',
        'product-4-desc': '智能电视和音频集成解决方案',
        'product-5-title': '智能家电',
        'product-5-desc': '现代生活的联网家用电器',
        'product-6-title': '家庭自动化中心',
        'product-6-desc': '所有智能设备的中央控制系统',
        'services-title': '我们的服务',
        'service-1-title': '安装',
        'service-1-desc': '专业安装所有智能家居设备和系统',
        'service-2-title': '咨询',
        'service-2-desc': '关于最适合您需求的智能家居解决方案的专家建议',
        'service-3-title': '维护',
        'service-3-desc': '智能家居系统的持续支持和维护',
        'service-4-title': '应用设置',
        'service-4-desc': '智能家居应用程序的完整设置和配置',
        'electronics-title': '关于电子产品',
        'electronics-text-1': '了解智能家居电子产品是做出明智决策的关键。我们的设备采用尖端技术，包括物联网连接、人工智能集成和节能设计。',
        'electronics-text-2': '我们与领先品牌合作，确保我们所有的产品都符合现代智能家居环境中可靠性、安全性和性能的最高标准。',
        'contact-title': '联系我们',
        'contact-subtitle': '联系我们',
        'phone-label': '电话:',
        'email-label': '邮箱:',
        'line-label': 'LINE:',
        'address-label': '地址:',
        'footer-copyright': '© 2025 Smart Home Electronics. 版权所有.',
        'footer-tagline': '让家更智能，一次一个设备。'
    }
};

// DOM Elements
const languageSelector = document.getElementById('languageSelector');
const ctaButton = document.getElementById('ctaButton');
const productsGrid = document.getElementById('productsGrid');
const storeMap = document.getElementById('storeMap');

// Current language
let currentLanguage = 'en';

// Initialize the website
document.addEventListener('DOMContentLoaded', function() {
    initializeWebsite();
    setupEventListeners();
    animateElements();
});

// Initialize website functionality
function initializeWebsite() {
    // Set default language
    setLanguage(currentLanguage);
    
    // Add loading animation to elements
    const elements = document.querySelectorAll('.section');
    elements.forEach((element, index) => {
        element.classList.add('loading');
        element.style.animationDelay = `${index * 0.1}s`;
    });
}

// Setup event listeners
function setupEventListeners() {
    // Language selector
    languageSelector.addEventListener('change', function() {
        const selectedLanguage = this.value;
        setLanguage(selectedLanguage);
    });

    // CTA Button
    ctaButton.addEventListener('click', function() {
        scrollToSection('products');
    });

    // Navigation links
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            scrollToSection(targetId);
        });
    });

    // Product cards
    const productCards = document.querySelectorAll('.product-card');
    productCards.forEach(card => {
        card.addEventListener('click', function() {
            showProductDetails(this);
        });
    });

    // Service cards
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.addEventListener('click', function() {
            showServiceDetails(this);
        });
    });

    // Store map
    storeMap.addEventListener('click', function() {
        openMap();
    });

    // Scroll event for animations
    window.addEventListener('scroll', handleScroll);
}

// Set language function
function setLanguage(lang) {
    currentLanguage = lang;
    const elements = document.querySelectorAll('[data-lang]');
    
    elements.forEach(element => {
        const key = element.getAttribute('data-lang');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    // Update language selector
    languageSelector.value = lang;
}

// Smooth scroll to section
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        const headerHeight = document.querySelector('header').offsetHeight;
        const targetPosition = section.offsetTop - headerHeight - 20;
        
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });
    }
}

// Show product details (placeholder for modal or detailed view)
function showProductDetails(productCard) {
    const productTitle = productCard.querySelector('h3').textContent;
    const productDesc = productCard.querySelector('p').textContent;
    
    // Simple alert for now - you can replace with modal
    alert(`Product: ${productTitle}\n\nDescription: ${productDesc}\n\nFor more information, please contact us!`);
}

// Show service details
function showServiceDetails(serviceCard) {
    const serviceTitle = serviceCard.querySelector('h3').textContent;
    const serviceDesc = serviceCard.querySelector('p').textContent;
    
    // Simple alert for now - you can replace with modal
    alert(`Service: ${serviceTitle}\n\nDescription: ${serviceDesc}\n\nContact us to learn more!`);
}

// Open map (placeholder for Google Maps integration)
function openMap() {
    // You can replace this with actual Google Maps integration
    const mapUrl = 'https://maps.google.com/';
    window.open(mapUrl, '_blank');
}

// Handle scroll animations
function handleScroll() {
    const sections = document.querySelectorAll('.section');
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const scrollTop = window.pageYOffset;
        const windowHeight = window.innerHeight;
        
        // Check if section is in viewport
        if (scrollTop + windowHeight > sectionTop + 100) {
            section.style.opacity = '1';
            section.style.transform = 'translateY(0)';
        }
    });
}

// Animate elements on load
function animateElements() {
    // Animate hero elements
    setTimeout(() => {
        const heroElements = document.querySelectorAll('.hero h1, .hero p, .cta-button');
        heroElements.forEach((element, index) => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        });
    }, 100);
}

// Contact form functionality (if you add a contact form later)
function handleContactForm(formData) {
    // Placeholder for contact form handling
    console.log('Contact form submitted:', formData);
    
    // You can add AJAX request here to send form data to server
    // or integrate with email services
}

// Search functionality (if you want to add product search)
function searchProducts(query) {
    const products = document.querySelectorAll('.product-card');
    const searchQuery = query.toLowerCase();
    
    products.forEach(product => {
        const title = product.querySelector('h3').textContent.toLowerCase();
        const description = product.querySelector('p').textContent.toLowerCase();
        
        if (title.includes(searchQuery) || description.includes(searchQuery)) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Theme toggle functionality (if you want to add dark mode)
function toggleTheme() {
    document.body.classList.toggle('dark-theme');
    
    // Save theme preference
    const isDark = document.body.classList.contains('dark-theme');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

// Load saved theme
function loadTheme() {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
    }
}

// Mobile menu toggle (for responsive design)
function toggleMobileMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('mobile-active');
}

// Utility functions
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add debounced scroll handler
window.addEventListener('scroll', debounce(handleScroll, 10));

// Export functions for external use (if needed)
window.SmartHomeWebsite = {
    setLanguage,
    scrollToSection,
    searchProducts,
    toggleTheme,
    toggleMobileMenu
};