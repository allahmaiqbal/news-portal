import bootstrap from "bootstrap/dist/js/bootstrap.bundle";
import 'bootstrap/scss/bootstrap.scss'; // scss
window.bootstrap = bootstrap;

// enable tooltip globally
var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
});
