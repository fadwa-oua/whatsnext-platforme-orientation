function loginWithGoogle() {
    google.accounts.id.initialize({
      client_id: '615162946126-1ftm8recpo1v122dup7ntdi0jmhag7jj.apps.googleusercontent.com',
      callback: handleCredentialResponse
    });
    google.accounts.id.prompt();
  }

  function handleCredentialResponse(response) {
    const payload = JSON.parse(atob(response.credential.split('.')[1]));
    const sessionUser = {
      name: payload.name,
      nom: payload.name,
      email: payload.email,
      photo: payload.picture,
      photo_url: payload.picture,
      provider: 'google',
      loginAt: new Date().toISOString()
    };
    localStorage.setItem('user', JSON.stringify(sessionUser));
    localStorage.setItem('wn_user', JSON.stringify(sessionUser));
    window.location.href = 'Aceuil.html';
  }

  function togglePw() {
    const input = document.getElementById('password');
    const ico   = document.getElementById('eyeIco');
    const isText = input.type === 'text';
    input.type = isText ? 'password' : 'text';
    ico.innerHTML = isText
      ? `<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>`
      : `<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>`;
  }

  document.getElementById('loginForm').addEventListener('submit', function(e) {
    let ok = true;
    const email = document.getElementById('email');
    const pw    = document.getElementById('password');
    if (!email.value || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
      document.getElementById('emailErr').classList.add('show'); ok = false;
    } else { document.getElementById('emailErr').classList.remove('show'); }
    if (!pw.value) {
      document.getElementById('pwErr').classList.add('show'); ok = false;
    } else { document.getElementById('pwErr').classList.remove('show'); }
    if (!ok) e.preventDefault();
  });