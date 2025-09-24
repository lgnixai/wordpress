(function(){
  // Mobile menu
  var toggle = document.getElementById('mobile-menu-toggle');
  var menu = document.getElementById('mobile-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', function(){
      var isHidden = menu.classList.contains('hidden');
      menu.classList.toggle('hidden');
      toggle.setAttribute('aria-expanded', String(isHidden));
    });
  }

  // Contact form AJAX
  var form = document.getElementById('contact-form');
  if (form && window.SHADCN) {
    form.addEventListener('submit', function(e){
      e.preventDefault();
      var formData = new FormData(form);
      var result = document.getElementById('contact-result');
      result.textContent = 'Sending...';
      fetch(SHADCN.ajax_url, {
        method: 'POST',
        credentials: 'same-origin',
        body: formData
      }).then(function(r){return r.json()}).then(function(json){
        if (json.success) {
          result.textContent = json.data.message;
          result.className = 'md:col-span-2 text-sm text-green-400';
          form.reset();
        } else {
          result.textContent = (json && json.data && json.data.message) || 'Failed to send.';
          result.className = 'md:col-span-2 text-sm text-red-400';
        }
      }).catch(function(){
        result.textContent = 'Network error.';
        result.className = 'md:col-span-2 text-sm text-red-400';
      });
    });
  }
})();

