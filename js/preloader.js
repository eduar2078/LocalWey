const btnEnter = document.getElementById('btnEnter');
const preloader = document.getElementById('preloader');
const bar = document.getElementById('progressBar');
const percentText = document.getElementById('percentText');

let isLoading = false; 

btnEnter.addEventListener('click', (e) => {
  e.preventDefault();

  if (isLoading) return; // evita repetición
  isLoading = true;

  let progress = 0;

  // bloquear botón
  btnEnter.disabled = true;

  // mostrar preloader
  preloader.classList.remove('hidden');

  const loading = setInterval(() => {
    progress += Math.floor(Math.random() * 8) + 1;
    if (progress >= 100) progress = 100;

    bar.style.width = progress + '%';
    percentText.textContent = progress + '%';

    if (progress === 100) {
      clearInterval(loading);

      setTimeout(() => {
        preloader.classList.add('fade-out');
        window.location.href = 'content/Home.php';
      }, 310);
    }
  },100);
});
