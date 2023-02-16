<?php
include ("sidenav.php")
?>
		
   <div>
                <section class="section">
      <div class="row">
        <div class="col-sm-10 grid-margin">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">VOCHER ENTRY</h5>

              <!-- General Form Elements -->
              <form>
                <div class="row mb-3">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-3">
                    <input type="date" class="form-control">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Vouch.No</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Pay.Id</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Pariculares</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>....select...</option>
                      <option value="1">Box Offering</option>
                      <option value="2">Matching of fering</option>
                      <option value="3">Poor offering</option>
                      <option value="4">Others</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label">Amount Type</label>
                  <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>....Select....</option>
                      <option value="1">Cash</option>
                      <option value="2">Cheque</option>
                      <option value="3">Online</option>
                    </select>
                  </div>
                </div>
                 
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-3 col-form-label">Amount</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">CONFIRM</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>