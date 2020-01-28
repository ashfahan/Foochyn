var menutriggers = document.getElementsByClassName("menu-trigger");
Object.keys(menutriggers).forEach(k => (menutriggers[k].onclick = e => e.target.classList.toggle("active")));

var nosubmit = document.querySelectorAll("[nosubmit]");
Object.keys(nosubmit).forEach(k => (nosubmit[k].onsubmit = e => e.preventDefault()));
