document.addEventListener('DOMContentLoaded', () => {
    // Initialize Lucide icons
    lucide.createIcons();

    // Header scroll effect
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

    // Smooth scroll for nav links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});
// Добавьте это в существующий document.addEventListener('DOMContentLoaded', ...)

// 1. Инициализация AOS
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// 2. Three.js - Neural Link Effect
const initThree = () => {
    const container = document.getElementById('canvas-container');
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

    const material = new THREE.PointsMaterial({
        size: 0.02,
        color: 0xc1ff00,
        transparent: true,
        opacity: 0.8
    });

    const particlesMesh = new THREE.Points(geometry, material);
    scene.add(particlesMesh);

    // Добавляем линии связи
    const lineMaterial = new THREE.LineBasicMaterial({ color: 0xc1ff00, transparent: true, opacity: 0.1 });
    const linesMesh = new THREE.LineSegments(geometry, lineMaterial);
    scene.add(linesMesh);

    camera.position.z = 3;

    // Mouse movement effect
    let mouseX = 0;
    let mouseY = 0;
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