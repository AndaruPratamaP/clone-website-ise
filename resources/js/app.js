import './bootstrap';
import Swal from 'sweetalert2';
window.Swal = Swal;

import toastr from 'toastr';
window.toastr = toastr;

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

toastr.options = {
  closeButton: false,
  debug: false,
  newestOnTop: true,
  progressBar: true,
  positionClass: 'toast-top-right',
  preventDuplicates: false,
  onclick: null,
  showDuration: '300',
  hideDuration: '1000',
  timeOut: '5000',
  extendedTimeOut: '1000',
  showEasing: 'swing',
  hideEasing: 'linear',
  showMethod: 'fadeIn',
  hideMethod: 'fadeOut',
};

async function swalToast({ type, title, text }) {
  await Swal.fire({
    icon: type,
    title: title,
    text: text,
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000, // timeout in milliseconds
    timerProgressBar: true,
  });
}

async function toastrToast({ type, title, text }) {
  await toastr[type](text, title);
}

document.addEventListener('swal-toast', (event) => {
  swalToast(event.detail);
});

document.addEventListener('toastr-toast', (event) => {
  toastrToast(event.detail);
});

document.addEventListener('alpine-data', (event) => {
  Alpine.store(event.detail.key, event.detail.value);
});

window.toastrToast = toastrToast;
window.swalToast = swalToast;
