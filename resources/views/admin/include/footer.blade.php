 <!-- partial:partials/_footer.html -->
 <footer class="footer">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 </footer>
 <!-- partial -->

 <script>
     function confirmDelete(url) {
         if (confirm("Are you sure you want to delete this item?")) {
             window.location.href = url;
         }
     }

     function confirmUpdate(url) {
         if (confirm("Are you sure you want to accept this item?")) {

             window.location.href = url;
         }
     }

     function confirmBooking(url) {
         if (confirm("Are you sure you want to confirm this booking?")) {
             window.location.href = url;
         }
     }

     function notifyseller(url) {
         if (confirm("Are you sure you want to notify seller?")) {
             window.location.href = url;
         }
     }
 </script>
 </div>
 <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->
 <!-- plugins:js -->
 <script src="{{ asset('assets1/vendors/js/vendor.bundle.base.js') }}"></script>
 <script src="{{ asset('assets1/vendors/js/vendor.bundle.addons.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page-->
 <!-- End plugin js for this page-->
 <!-- inject:js -->
 <script src="{{ asset('assets1/js/shared/off-canvas.js') }}"></script>
 <script src="{{ asset('assets1/js/shared/misc.js') }}"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="{{ asset('assets1/js/demo_1/dashboard.js') }}"></script>
 <!-- End custom js for this page-->
 <script src="{{ asset('assets1/js/shared/jquery.cookie.js') }}" type="text/javascript"></script>
 </body>

 </html>
