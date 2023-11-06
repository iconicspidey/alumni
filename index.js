const bar = document.getElementById("bar");
const bar1 = document.getElementById("bar1");
const bar2 = document.getElementById("bar2");
const bar3 = document.getElementById("bar11");
const bar4 = document.getElementById("bar22");
const bar5 = document.getElementById("bar111");
const bar6 = document.getElementById("bar222");
const sidebar = document.getElementById("sidebar-admin");
const sidebar1 = document.getElementById("sidebar-artisan");
const sidebar2 = document.getElementById("sidebar-user");
const close = document.getElementById("close");
const clos = document.getElementById("close1-admin");
const close2 = document.getElementById("close2-admin");
const close3 = document.getElementById("close1-artisan");
const close4 = document.getElementById("close2-artisan");
const close5 = document.getElementById("close1-user");
const close6 = document.getElementById("close2-user");
const nav = document.getElementById("navigation");
const headina = document.getElementById("headina-admin");
const headinaartisan = document.getElementById("headina-artisan");
const headinauser = document.getElementById("headina-user");
const visio = document.getElementById("visio");
const visioclose = document.getElementById("visioclose");
const visio1 = document.getElementById("visio1");
const popup = document.getElementById("popup");
const tap = document.getElementById("tap");
const popup1 = document.getElementById("popup1");
const main = document.getElementById("main");
if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}
if (bar1) {
  bar1.addEventListener("click", () => {
    headina.classList.add("active");
    headinaartisan.classList.add("active");
  });
}
if (bar2) {
  bar2.addEventListener("click", () => {
    sidebar.classList.add("active");
  });
}
if (bar3) {
  bar3.addEventListener("click", () => {
    headinaartisan.classList.add("active");
  });
}
if (bar4) {
  bar4.addEventListener("click", () => {
    sidebar1.classList.add("active");
  });
}
if (bar5) {
  bar5.addEventListener("click", () => {
    headinauser.classList.add("active");
  });
}
if (bar6) {
  bar6.addEventListener("click", () => {
    sidebar2.classList.add("active");
  });
}

if (tap) {
  tap.addEventListener("click", () => {
    popup.style.visibility = "visible";
    visio.style.filter = "blur(1px)";
    main.style.filter = "blur(1px)";
    visio1.style.filter = "blur(1px)";
  });
}
if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

if (clos) {
  clos.addEventListener("click", () => {
    headina.classList.remove("active");
  });
}
if (close2) {
  close2.addEventListener("click", () => {
    sidebar.classList.remove("active");
  });
}
if (close3) {
  close3.addEventListener("click", () => {
    headinaartisan.classList.remove("active");
  });
}
if (close4) {
  close4.addEventListener("click", () => {
    sidebar1.classList.remove("active");
  });
}
if (close5) {
  close5.addEventListener("click", () => {
    headinauser.classList.remove("active");
  });
}
if (close6) {
  close6.addEventListener("click", () => {
    sidebar2.classList.remove("active");
  });
}
if (popup.style.visibility === "visible") {
  const egbe = document.getElementById("egbe");
  const other = document.getElementById("other");
  egbe.style.filter = "blur(1px)";
  other.style.filter = "blur(1px)";
}
function change() {
  var popup = document.getElementById("popup");
  popup.style.visibility = "hidden";
  const visio = document.getElementById("visio");
  visio.style.filter = "none";
  const visio1 = document.getElementById("visio1");
  visio1.style.filter = "none";
}

////////////////////////
