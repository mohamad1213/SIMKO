<!-- Required vendors -->
<script src="{{url('admin/vendor/global/global.min.js')}}"></script>
<script src="{{url('admin/vendor/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Apex Chart -->
<script src="{{url('admin/vendor/apexchart/apexchart.js')}}"></script>
<!-- Chart piety plugin files -->
<script src="{{url('admin/vendor/peity/jquery.peity.min.js')}}"></script>
<!--swiper-slider-->
<script src="{{url('admin/vendor/swiper/js/swiper-bundle.min.js')}}"></script>


<!-- Datatable -->
<script src="{{url('admin/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/js/plugins-init/datatables.init.js')}}"></script>

<!-- Dashboard 1 -->
<script src="{{url('admin/js/dashboard/dashboard-1.js')}}"></script>
<script src="{{url('admin/vendor/wow-master/dist/wow.min.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
<script src="{{url('admin/vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('admin/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js')}}"></script>
<script src="{{ url('admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
<script src="{{ url('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ url('admin/vendor/dropzone/dist/dropzone.js') }}"></script>
<script src="{{url('admin/js/dlabnav-init.js')}}"></script>
<script src="{{url('admin/js/custom.min.js')}}"></script>
<script src="{{url('admin/js/demo.js')}}"></script>
<script src="{{url('admin/js/styleSwitcher.js')}}"></script>


<!-- Required vendors -->
<script src="{{ url('admin/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ url('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<!-- Form validate init -->
<script src="{{ url('admin/js/plugins-init/jquery.validate-init.js') }}"></script>
<script src="{{ url('admin/vendor/dropzone/dist/dropzone.js') }}"></script>

<script>
    $(document).ready(function () {
        // SmartWizard initialize
        $('#smartwizard').smartWizard();
    });
    $(document).ready(function () {
        $('select').niceSelect(); // jalankan sekali untuk semua select
    });
</script>