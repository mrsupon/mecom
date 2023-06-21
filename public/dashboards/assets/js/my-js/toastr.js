/*
toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "3000",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "300",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut",
    iconClasses: {
        error: 'fas fa-trash',
        info: 'fa fa-info',
        success: 'fas fa-check',
        warning: 'something',
    },
};
*/


 toastr.options.timeOut = 2000 ;
 toastr.options.progressBar= true;
 var type = toastrSetup.alertType;
 switch(type){
    case 'info':
    toastr.info(toastrSetup.massage);
    break;
    case 'success':
    toastr.success(toastrSetup.massage);
    /*
    toastr.success(toastrSetup.massage,'', {'iconClass': 'toast-custom', 'timeOut':2000});
    <style>
        #toast-container > .toast-custom {
            background-color:orange;
        }
    </style>
    */
    break;

    case 'warning':
    toastr.warning(toastrSetup.massage);
    break;

    case 'error':
    toastr.error(toastrSetup.massage);
    break;
 }

