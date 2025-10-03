// Animaciones adicionales para OpenAdmin Panel
// Efectos: entrada de tarjetas, fade de secciones, animación de menú lateral

document.addEventListener('DOMContentLoaded', function() {
    // Animar tarjetas al aparecer
    document.querySelectorAll('.card, .box, .panel').forEach((el, i) => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(40px) scale(0.98)';
        setTimeout(() => {
            el.style.transition = 'opacity 0.7s cubic-bezier(.4,2,.3,1), transform 0.7s cubic-bezier(.4,2,.3,1)';
            el.style.opacity = 1;
            el.style.transform = 'translateY(0) scale(1)';
            el.classList.add('animated-glow');
        }, 200 + i * 120);
    });

    // Fade-in para secciones principales
    document.querySelectorAll('.content-header, .content').forEach((el, i) => {
        el.style.opacity = 0;
        setTimeout(() => {
            el.style.transition = 'opacity 1s cubic-bezier(.4,2,.3,1)';
            el.style.opacity = 1;
        }, 400 + i * 100);
    });

    // Animación de menú lateral
    document.querySelectorAll('.sidebar-menu > li').forEach((li, i) => {
        li.style.opacity = 0;
        li.style.transform = 'translateX(-30px)';
        setTimeout(() => {
            li.style.transition = 'opacity 0.5s, transform 0.5s';
            li.style.opacity = 1;
            li.style.transform = 'translateX(0)';
        }, 300 + i * 80);
    });

    // Efecto de onda en botones
    document.querySelectorAll('.btn, .btn-primary, .btn-info').forEach(btn => {
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            ripple.className = 'oa-ripple';
            ripple.style.left = (e.clientX - btn.getBoundingClientRect().left) + 'px';
            ripple.style.top = (e.clientY - btn.getBoundingClientRect().top) + 'px';
            btn.appendChild(ripple);
            setTimeout(() => ripple.remove(), 600);
        });
    });
});

// CSS para el efecto ripple
const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
.oa-ripple {
  position: absolute;
  border-radius: 50%;
  transform: scale(0);
  animation: oa-ripple-anim 0.6s linear;
  background: rgba(250,218,122,0.5);
  pointer-events: none;
  width: 60px;
  height: 60px;
  left: 0; top: 0;
  z-index: 10;
}
@keyframes oa-ripple-anim {
  to {
    transform: scale(2.5);
    opacity: 0;
  }
}`;
document.head.appendChild(rippleStyle);
