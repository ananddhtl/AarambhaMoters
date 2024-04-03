 <!-- partial:partials/_footer.html -->
 <footer class="footer">
     <div class="container-fluid clearfix">
         <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
             2020</span>
         <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                 href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin
                 templates</a> from Bootstrapdash.com</span>
     </div>
 </footer>
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
</script>
 </div>

 </div>

 </div>

 <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
 <script src="{{asset('admin/assets/vendors/js/vendor.bundle.addons.js')}}"></script>

 <script src="{{asset('admin/assets/js/shared/off-canvas.js')}}"></script>
 <script src="{{asset('admin/assets/js/shared/misc.js')}}"></script>

 <script src="{{asset('admin/assets/js/demo_1/dashboard.js')}}"></script>

 <script src="{{asset('admin/assets/js/shared/jquery.cookie.js')}}" type="text/javascript"></script>
 </body>

 </html>