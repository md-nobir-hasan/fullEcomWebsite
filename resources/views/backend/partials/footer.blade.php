  <footer class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6">
                  <script>
                      document.write(new Date().getFullYear())
                  </script> © Skote.
              </div>
              <div class="col-sm-6">
                  <div class="text-sm-right d-none d-sm-block">
                      Design & Develop by Themesbrand
                  </div>
              </div>
          </div>
      </div>
  </footer>
  </div>
  <!-- end main content-->

  </div>
  <!-- END layout-wrapper -->

  <!-- Right Sidebar -->
  <div class="right-bar">
      <div data-simplebar class="h-100">
          <div class="rightbar-title px-3 py-4">
              <a href="javascript:void(0);" class="right-bar-toggle float-right">
                  <i class="mdi mdi-close noti-icon"></i>
              </a>
              <h5 class="m-0">Settings</h5>
          </div>

          <!-- Settings -->
          <hr class="mt-0" />
          <h6 class="text-center mb-0">Choose Layouts</h6>

          <div class="p-4">
              <div class="mb-2">
                  <img src="{{ asset('backend/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail"
                      alt="">
              </div>
              <div class="custom-control custom-switch mb-3">
                  <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                  <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
              </div>

              <div class="mb-2">
                  <img src="{{ asset('backend/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail"
                      alt="">
              </div>
              <div class="custom-control custom-switch mb-3">
                  <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                      data-bsStyle="{{ asset('backend/assets/css/bootstrap-dark.min.css') }}"
                      data-appStyle="{{ asset('backend/assets/css/app-dark.min.css') }}" />
                  <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
              </div>

              <div class="mb-2">
                  <img src="{{ asset('backend/assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail"
                      alt="">
              </div>
              <div class="custom-control custom-switch mb-5">
                  <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                      data-appStyle="{{ asset('backend/assets/css/app-rtl.min.css') }}" />
                  <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
              </div>


          </div>

      </div> <!-- end slimscroll-menu-->
  </div>
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
  <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

  <!-- apexcharts -->
  <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

  <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('backend/assets/js/app.js') }}"></script>
  </body>
  <!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->

  </html>
