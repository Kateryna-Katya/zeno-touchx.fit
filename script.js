document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок Lucide
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // 2. Инициализация AOS (Анимации)
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
    });

    // 3. Интерактивный фон Vanta.js
    if (document.getElementById('hero-interactive-bg')) {
        VANTA.NET({
            el: "#hero-interactive-bg",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x8b5cf6,
            backgroundColor: 0x0a0a0c,
            points: 10.00,
            maxDistance: 20.00,
            spacing: 18.00,
            showDots: false
        });
    }

    // 4. Мобильное меню (Бургер)
    const burger = document.getElementById('burgerBtn');
    const menu = document.getElementById('mobileMenu');
    const body = document.body;
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');
        body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
    };

    burger?.addEventListener('click', toggleMenu);

    // Закрытие меню при клике на ссылку
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (menu.classList.contains('active')) toggleMenu();
        });
    });

    // 5. Header эффект при скролле
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 10, 12, 0.95)';
            header.style.borderBottomColor = 'rgba(139, 92, 246, 0.2)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(10, 10, 12, 0.8)';
            header.style.borderBottomColor = 'rgba(255, 255, 255, 0.05)';
        }
    });

    // 6. FAQ Аккордеон
    const faqItems = document.querySelectorAll('.faq__item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq__question');
        question?.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            // Опционально: закрыть другие
            // faqItems.forEach(i => i.classList.remove('active'));
            
            item.classList.toggle('active');
            const icon = item.querySelector('i');
            if (icon) {
                icon.setAttribute('data-lucide', item.classList.contains('active') ? 'minus' : 'plus');
                lucide.createIcons();
            }
        });
    });

    // 7. Логика формы и Капча
    const form = document.getElementById('mainForm');
    const captchaLabel = document.getElementById('captchaLabel');
    const phoneInput = document.getElementById('phoneInput');
    
    // Генерация капчи
    const n1 = Math.floor(Math.random() * 10) + 1;
    const n2 = Math.floor(Math.random() * 5) + 1;
    const result = n1 + n2;
    if (captchaLabel) captchaLabel.innerText = `Сколько будет ${n1} + ${n2}?`;

    // Только цифры в телефоне
    phoneInput?.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^\d+]/g, '');
    });

    form?.addEventListener('submit', (e) => {
        e.preventDefault();
        const captchaInput = document.getElementById('captchaInput').value;
        const successMsg = document.getElementById('formSuccess');
        const btn = form.querySelector('button');

        if (parseInt(captchaInput) !== result) {
            alert('Ошибка капчи. Попробуйте еще раз.');
            return;
        }

        btn.disabled = true;
        btn.innerHTML = '<span>Отправка...</span>';

        setTimeout(() => {
            form.reset();
            btn.style.display = 'none';
            successMsg.style.display = 'flex';
            lucide.createIcons();
        }, 1500);
    });

    // 8. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookies_zeno_accepted')) {
        setTimeout(() => cookiePopup?.classList.add('active'), 3000);
    }

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('cookies_zeno_accepted', 'true');
        cookiePopup.classList.remove('active');
    });
});