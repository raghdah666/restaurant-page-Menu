document.addEventListener('DOMContentLoaded', () => {
    const darkModeBtn = document.getElementById('dark-mode-btn');
    const lightModeBtn = document.getElementById('light-mode-btn');
    const brandingElements = document.querySelectorAll('.branding'); // جميع العناصر التي تحمل الكلاس "branding"
    const backgroundElements = document.querySelectorAll('.dark-background, .light-background'); // جميع الخلفيات
  
    // استعادة الوضع من localStorage
    const currentMode = localStorage.getItem('mode');
  
    // تطبيق الوضع المحفوظ على كل العناصر
    if (currentMode === 'dark') {
      brandingElements.forEach((branding) => {
        branding.classList.add('dark-mode');
        branding.classList.remove('light-mode');
      });
  
      backgroundElements.forEach((bg) => {
        bg.classList.add('dark-background');
        bg.classList.remove('light-background');
      });
  
      darkModeBtn.classList.add('d-none');
      lightModeBtn.classList.remove('d-none');
    } else {
      brandingElements.forEach((branding) => {
        branding.classList.add('light-mode');
        branding.classList.remove('dark-mode');
      });
  
      backgroundElements.forEach((bg) => {
        bg.classList.add('light-background');
        bg.classList.remove('dark-background');
      });
  
      lightModeBtn.classList.add('d-none');
      darkModeBtn.classList.remove('d-none');
    }
  
    // تفعيل الوضع الليلي
    darkModeBtn.addEventListener('click', () => {
      brandingElements.forEach((branding) => {
        branding.classList.remove('light-mode');
        branding.classList.add('dark-mode');
      });
  
      backgroundElements.forEach((bg) => {
        bg.classList.remove('light-background');
        bg.classList.add('dark-background');
      });
  
      darkModeBtn.classList.add('d-none');
      lightModeBtn.classList.remove('d-none');
      localStorage.setItem('mode', 'dark');
    });
  
    // تفعيل الوضع العادي
    lightModeBtn.addEventListener('click', () => {
      brandingElements.forEach((branding) => {
        branding.classList.remove('dark-mode');
        branding.classList.add('light-mode');
      });
  
      backgroundElements.forEach((bg) => {
        bg.classList.remove('dark-background');
        bg.classList.add('light-background');
      });
  
      lightModeBtn.classList.add('d-none');
      darkModeBtn.classList.remove('d-none');
      localStorage.setItem('mode', 'light');
    });
  });
  