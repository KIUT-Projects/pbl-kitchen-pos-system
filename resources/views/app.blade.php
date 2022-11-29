<!DOCTYPE html>
<html lang="uz">

    <head>
        <meta charset="utf-8" />
        <title>KUIT - Online kitchen</title>
        <meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        @vite('resources/css/app.css')

        <link href="{{ asset('assets/api/pace/pace-theme-flat-top.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/api/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css" />
        <link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="//unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    </head>

    <body id="tc_body" class="header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed">

        <div id="app">
            <main-app></main-app>
        </div>

        @vite('resources/js/app.js')

        <script src="{{ asset('assets/js/plugin.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="//unpkg.com/multiple-select%401.5.2/dist/multiple-select.min.js"></script>
        <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
        <script src="{{ asset('assets/js/sweetalert1.js') }}"></script>
        <script src="{{ asset('assets/js/script.bundle.js') }}"></script>
        <script>
            jQuery(function() {
                jQuery('.arabic-select').multipleSelect({
                    filter: true,
                    filterAcceptOnEnter: true
                })
            });
            jQuery(function() {
                jQuery('.js-example-basic-single').multipleSelect({
                    filter: true,
                    filterAcceptOnEnter: true
                })
            });
            jQuery(document).ready(function() {
                jQuery('#orderTable').DataTable({

                    "info":     false,
                    "paging":   false,
                    "searching": false,

                    "columnDefs": [ {
                        "targets"  : 'no-sort',
                        "orderable": false,
                    }]
                });
            } );
        </script>
    </body>

</html>
