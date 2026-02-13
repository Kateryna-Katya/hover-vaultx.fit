document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    lucide.createIcons();

    // 2. Инициализация AOS (Animate on Scroll)
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });

    // 3. Мобильное меню (Бургер)
    const burger = document.querySelector('.burger');
    const overlay = document.getElementById('menu-overlay');
    const mobileLinks = document.querySelectorAll('.mobile-nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        overlay.classList.toggle('active');
        document.body.style.overflow = overlay.classList.contains('active') ? 'hidden' : 'auto';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Скролл-эффекты для Header
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.padding = '12px 0';
            header.style.background = 'rgba(10, 11, 16, 0.95)';
        } else {
            header.style.padding = '20px 0';
            header.style.background = 'rgba(10, 11, 16, 0.8)';
        }
    });

    // 5. Three.js - Эффект "Neural Link"
    const initThree = () => {
        const container = document.getElementById('canvas-container');
        if(!container) return;

        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const geometry = new THREE.BufferGeometry();
        const particlesCount = 150;
        const posArray = new Float32Array(particlesCount * 3);

        for(let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
        }

        geometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));
        const material = new THREE.PointsMaterial({ size: 0.02, color: 0xc1ff00, transparent: true, opacity: 0.8 });
        const particlesMesh = new THREE.Points(geometry, material);
        scene.add(particlesMesh);

        const lineMaterial = new THREE.LineBasicMaterial({ color: 0xc1ff00, transparent: true, opacity: 0.1 });
        const linesMesh = new THREE.LineSegments(geometry, lineMaterial);
        scene.add(linesMesh);

        camera.position.z = 3;

        let mouseX = 0, mouseY = 0;
        document.addEventListener('mousemove', (e) => {
            mouseX = (e.clientX / window.innerWidth - 0.5) * 0.5;
            mouseY = (e.clientY / window.innerHeight - 0.5) * 0.5;
        });

        const animate = () => {
            requestAnimationFrame(animate);
            particlesMesh.rotation.y += 0.001;
            linesMesh.rotation.y += 0.001;
            particlesMesh.rotation.x += (mouseY - particlesMesh.rotation.x) * 0.05;
            particlesMesh.rotation.y += (mouseX - particlesMesh.rotation.y) * 0.05;
            renderer.render(scene, camera);
        };
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });
    };
    initThree();

    // 6. Форма Контактов (Валидация, Капча, AJAX)
    const contactForm = document.getElementById('ai-contact-form');
    if(contactForm) {
        const phoneInput = document.getElementById('phone-input');
        const captchaQuestion = document.getElementById('captcha-question');
        const captchaAnswerInput = document.getElementById('captcha-answer');
        const formResponse = document.getElementById('form-response');

        let correctResult = 0;
        const generateCaptcha = () => {
            const a = Math.floor(Math.random() * 10) + 1;
            const b = Math.floor(Math.random() * 10) + 1;
            correctResult = a + b;
            captchaQuestion.textContent = `${a} + ${b}`;
        };
        generateCaptcha();

        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/[^\d]/g, '');
        });

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            if (parseInt(captchaAnswerInput.value) !== correctResult) {
                formResponse.textContent = "Неверный ответ на капчу.";
                formResponse.className = "form__response error";
                generateCaptcha();
                return;
            }

            const submitBtn = contactForm.querySelector('.form__submit');
            submitBtn.textContent = "Отправка...";
            submitBtn.disabled = true;

            setTimeout(() => {
                formResponse.textContent = "Заявка отправлена успешно!";
                formResponse.className = "form__response success";
                contactForm.reset();
                generateCaptcha();
                submitBtn.textContent = "Начать сейчас";
                submitBtn.disabled = false;
            }, 1500);
        });
    }

    // 7. Cookie Popup Logic
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieAccept = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 2000);
    }

    cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        cookiePopup.classList.remove('active');
    });
});