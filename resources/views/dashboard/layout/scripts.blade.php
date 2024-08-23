<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('dashboard_assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('dashboard_assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('dashboard_assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('dashboard_assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('dashboard_assets') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('dashboard_assets') }}/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
           Livewire.hook('morph.updated', (el, component) => {
               const mySuccessAlert = document.querySelector('.my-success-alert');

               if (mySuccessAlert) {
                   setTimeout(() => {
                       mySuccessAlert.style.display = 'none';
                   }, 2000);
               }
           });
       });
    {{-- Hide Create Modal After Submit --}}
    document.addEventListener("createModalToggle", event => {
        $('#create-modal').modal('toggle');
    });
    {{-- Hide Edit Modal After Submit --}}
    document.addEventListener("editModalToggle", event => {
        $('#edit-modal').modal('toggle');
    });
    {{-- Hide Delete Modal After Submit --}}
    document.addEventListener("deleteModalToggle", event => {
        $('#delete-modal').modal('toggle');
    });
    {{-- Hide Delete Modal After Submit --}}
    document.addEventListener("showModalToggle", event => {
        $('#show-modal').modal('toggle');
    });
</script>

