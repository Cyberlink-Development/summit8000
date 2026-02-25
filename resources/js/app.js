import $ from 'jquery'
import toastr from 'toastr'
import 'toastr/build/toastr.min.css'

/*
|--------------------------------------------------------------------------
| Make libraries global
|--------------------------------------------------------------------------
*/
window.$ = $
window.jQuery = $
window.toastr = toastr

/*
|--------------------------------------------------------------------------
| Toastr Global Configuration
|--------------------------------------------------------------------------
*/
toastr.options = {
    closeButton: true,
    progressBar: true,
    newestOnTop: true,
    preventDuplicates: true,
    positionClass: "toast-top-right",
    showDuration: "300",
    hideDuration: "300",
    timeOut: "4000",
    extendedTimeOut: "1000",
}

/*
|--------------------------------------------------------------------------
| Optional: Custom Styling Adjustments
|--------------------------------------------------------------------------
*/
document.addEventListener('DOMContentLoaded', function () {
    const style = document.createElement('style')
    style.innerHTML = `
        .toast {
            opacity: 0.9 !important;
        }
    `
    document.head.appendChild(style)
})
