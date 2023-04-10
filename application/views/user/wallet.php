  <!-- Main body content starts here -->
  <div class="row">
      <div class="col-12 mt-5">
        <p style="font-size: 22px;">Wallet</p>
      </div>
      <div class="col-12">
        <nav class="nav sub-nav">
          <li class="nav-item mr-3 ">
            <a class="nav-link primary-text-color   sub-menu--dashboard-active px-0" id="currentBookingBtn" href="#"
              role="button">Wallet Balance</a>
          </li>

          <li class="nav-item mr-3">
            <a class="nav-link secondary-text-color px-0" id="historyBtn" href="#" role="button">History</a>
          </li>
        </nav>
      </div>

      <!-- default Payout -->
      <div class="col-12 mt-5 collapse <?php echo (empty($wallet))? 'show' : ''; ?>" id="currentBooking">
        <div class="primary-background p-5 d-flex justify-content-center align-content-center">
          <div class="text-center">
            <img class="mb-4" style="width: 100px;" src="<?php echo base_url(); ?>assets/user-assets/images/wallet.gif" alt="">
            <p class="mb-2" style="font-size: 22px;">You haven’t created a wallet yet</p>
            <p class="mb-4" style="font-size: 13px;">Create wallet to receive your quarterly rent payout
              You will need to provide your BVN to create a wallet on our platform</p>
            <button type="button" class="btn tertiary-background py-3 px-5" data-toggle="modal"
              data-target="#createWallet">Create Wallet</button>
          </div>
        </div>


        <!-- create wallet Modal -->
        <div class="modal fade" id="createWallet" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5 class="modal-title font-weight-light" id="staticBackdropLabel">Create Wallet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-5">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Provide bvn</label>
                    <input type="text" class="form-control p-4" name="bvn" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="BVN">

                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Custom account name</label>
                    <input type="text" class="form-control p-4" name="account-name" id="exampleInputPassword1"
                      placeholder="Account name">
                  </div>
                  <div class="form-check text-center">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                    <label class="form-check-label " for="exampleCheck1">Agree to our <a href="#"
                        style="color: #138E3D">terms
                        and conditions</a> </label>
                  </div>

                  <div class="my-4 text-center">
                    <button type="submit" class="btn btn-dark py-2 tertiary-background px-5" data-toggle="modal"
                      data-target="#createWallet">Create</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>


        <!-- SUCCESS Modal -->
        <div class="modal fade d-none" id="success" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5 class="modal-title font-weight-light" id="staticBackdropLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-5">
                <div class="text-center">
                  <img class="img-fluid" style="width: 50%;" src="<?php echo base_url(); ?>assets/user-assets/images/success.gif" alt="">
                  <p>Wallet created successfully</p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

      <!-- Payout -->
      <div class="col-12 mt-5 collapse <?php echo (!empty($wallet))? 'show' : ''; ?>" id="currentBooking">
        
        <!-- Wallet section  -->
        <div class="primary-background wallet p-5">
          <div class="row mb-4">
            <div class="col-12">
              <p style="font-size: 22px;">Wallet</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-4">
              <p>Wallet Balance</p>
              <h3 style="font-size: 36px;">&#8358;<?php echo number_format($wallet['account_balance']); ?></h3>
            </div>
            <div class="col-12 col-md-3 mb-3">
              <button type="button" class="btn btn-dark py-3 tertiary-background px-5" data-toggle="modal"
                data-target="#withdraw">Withdraw</button>
              <p style="font-size: 10px;">Transfer cash from Buysmallsmall into your Bank Account.</p>
            </div>
            <div class="col-12 col-md-3">
              <button type="button" class="btn btn-dark py-3 tertiary-background px-5" data-toggle="modal"
                data-target="#withdraw">Fund wallet</button>
            </div>
          </div>
          <div class="divider d-md-none d-block my-5"></div>

          <div class="row my-5">
            <div class="col-md-3 col-12 mb-3 ">
              <p style="font-size: 14px;" class="font-weight-light">Account Name</p>
              <p style="font-size: 26px;"><?php echo $wallet['account_name'] ?></p>
            </div>
            <div class="col-md-3 col-12 mb-3 ">
              <p style="font-size: 14px;" class="font-weight-light">Account number</p>
              <div class="d-flex justify-content-between">
                <p style="font-size: 26px;" class="align-self-end"><?php echo chunk_split($wallet['account_number'], 3, ' '); ?></p>
                <span><img class="img-fluid" src="<?php echo base_url(); ?>assets/user-assets/images/copy.svg" alt=""><br>copy</span>
              </div>

            </div>
            <div class="col-md-3 col-12 mb-3 ">
              <p style="font-size: 14px;" class="font-weight-light">Bank name</p>
              <p style="font-size: 26px;">Providus Bank</p>
            </div>
            <div class="col-md-2 col-12 mb-3 ">
              <p style="font-size: 14px;" class="font-weight-light">Created</p>
              <p style="font-size: 26px;" class="d-flex align-items-center"><?php echo date('m/y', strtotime($wallet['date_created'])); ?></p>
            </div>
          </div>

        </div>


        <!-- Default modal for withdraw to add bank account -->
        <div class="modal fade" id="withdraw" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5>Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row">
                  <div class="col-12">
                    <p class="p-2" style="font-size: 12px;">Please add a bank account.</p>

                  </div>
                </div>
                <form>
                  <div class="form-group m-2">
                    <label style="font-size: 12px;" for="numberOfShares">Bank</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Select your bank</option>
                      <option>First Bank</option>
                      <option>Access bank</option>
                      <option>Zenith Bank</option>
                    </select>
                  </div>
                  <div class="form-group m-2">
                    <label style="font-size: 12px;" for="nameOfOwner">Account number</label>
                    <input type="text" class="form-control p-3" id="nameOfOwner"
                      placeholder="Enter bank account number">
                  </div>


                  <div class="my-4 text-center mt-5">
                    <button type="submit" class="btn btn-dark py-2  tertiary-background px-5" data-toggle="modal"
                      data-target="#addAccount">Add Account</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>

        <!-- Modal to show after adding bank account -->
        <div class="modal fade" id="" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5>Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row ">
                  <div class="d-flex">
                    <div class="primary-background p-3 mr-1">
                      <p class="font-weight-bold">John Doe</p>
                      <p>Wema Bank - 5335 04994 48848</p>
                    </div>
                    <div class="">
                      <button type="button" class="btn  tertiary-background h-100"
                        style="min-width: 0px">Withdraw</button>
                    </div>

                  </div>

                  <div class="col-12 my-4">
                    <a href="#" class="text-dark" style="font-size: 14px;">+ Add new bank account</a>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

        <!-- Modal to withdraw -->
        <div class="modal fade" id="" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5>Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row ">
                  <div class="d-flex">
                    <div class="primary-background p-3 mr-1">
                      <p class="font-weight-bold">John Doe</p>
                      <p>Wema Bank - 5335 04994 48848</p>
                    </div>
                    <div class="">
                      <button type="button" class="btn primary-background h-100" disabled
                        style="min-width: 0px">Withdraw</button>
                    </div>

                  </div>

                  <div class="col-12 my-4">
                    <a href="#" class="text-dark" style="font-size: 14px;">+ Add new bank account</a>
                  </div>
                </div>
                <form>

                  <div class="form-group m-2">
                    <label style="font-size: 12px;" for="nameOfOwner">Enter amount</label>
                    <input type="text" class="form-control special-input" id="nameOfOwner" placeholder="Enter amount">
                  </div>


                  <div class="my-4 text-center mt-5">
                    <button type="submit" class="btn btn-dark py-2 tertiary-background  px-5" data-toggle="modal"
                      data-target="#createWallet">Withdraw</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>

        <!-- Modal to add a new bank account -->
        <div class="modal fade" id="" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5>Withdraw</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row ">
                  <div class="d-flex">
                    <div class="primary-background p-3 mr-1">
                      <p class="font-weight-bold">John Doe</p>
                      <p>Wema Bank - 5335 04994 48848</p>
                    </div>
                    <div class="">
                      <button type="button" class="btn tertiary-background h-100"
                        style="min-width: 0px">Withdraw</button>
                    </div>

                  </div>

                  <div class="col-12 my-4">
                    <a href="#" class="text-dark" style="font-size: 14px;">+ Add new bank account</a>
                  </div>
                </div>
                <form>
                  <div class="form-group m-2">
                    <label style="font-size: 12px;" for="numberOfShares">Bank</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Select your bank</option>
                      <option>First Bank</option>
                      <option>Access bank</option>
                      <option>Zenith Bank</option>
                    </select>
                  </div>
                  <div class="form-group m-2">
                    <label style="font-size: 12px;" for="nameOfOwner">Account number</label>
                    <input type="text" class="form-control p-3" id="nameOfOwner"
                      placeholder="Enter bank account number">
                  </div>


                  <div class="my-4 text-center mt-5">
                    <button type="submit" class="btn btn-dark py-2  tertiary-background px-5" data-toggle="modal"
                      data-target="#createWallet">Add Account</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>


        <!-- SUCCESS withdraw Modal -->
        <div class="modal fade" id="" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5 class="modal-title font-weight-light" id="staticBackdropLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-5">
                <div class="text-center">
                  <img class="img-fluid" style="width: 50%;" src="<?php echo base_url(); ?>assets/user-assets/images/success.gif" alt="">
                  <p>withdraw successfully</p>
                </div>
              </div>

            </div>
          </div>
        </div>


        <!-- SUCCESS Account added Modal -->
        <div class="modal fade" id="#" data-backdrop="static" data-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header primary-background pl-5">
                <h5 class="modal-title font-weight-light" id="staticBackdropLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body p-5">
                <div class="text-center">
                  <img class="img-fluid" style="width: 50%;" src="assets/images/success.gif" alt="">
                  <p class="mb-3">Account added successfully</p>
                  <a href="#" class="text-dark" style="text-decoration: underline;">Withdraw now</a>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

      <!-- History Booking -->
      <div class="col-12 mt-5 collapse" id="history">
        <div class="primary-background p-5">
          <div class="table-responsive">
            <table class="table">
              <thead class="tertiary-background ">
                <tr>
                  <th scope="col">Payment</th>
                  <th scope="col">Transaction id</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Date</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Payout</td>
                  <td>er355479032039034</td>
                  <td>&#8358;53,000</td>
                  <td>
                    <p class="d-flex align-items-center">15 May, 2021</p>
                  </td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td>Withdraw</td>
                  <td>er355479032039034</td>
                  <td>&#8358;53,000</td>
                  <td>
                    <p class="d-flex align-items-center">15 May, 2021</p>
                  </td>
                  <td>Complete</td>
                </tr>
                <tr>
                  <td>Payout</td>
                  <td>er355479032039034</td>
                  <td>&#8358;53,000</td>
                  <td>
                    <p class="d-flex align-items-center">15 May, 2021</p>
                  </td>
                  <td>Failed</td>
                </tr>

              </tbody>
            </table>
          </div>

        </div>

      </div>


    </div>

  </main>
  
  <script>
    $(document).ready(function () {
      $(document).ready(function () {
      const loadHistory = function () {
        $("#history").addClass("show");
        $("#currentBooking").removeClass("show");
        $("#checklist").removeClass("show");

        $("#checklistBtn").addClass("secondary-text-color")
        $("#checklistBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#currentBookingBtn").addClass("secondary-text-color")
        $("#currentBookingBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").removeClass("secondary-text-color")
        $("#historyBtn").addClass("primary-text-color sub-menu--dashboard-active")
      }


      $("#currentBookingBtn").click(function () {
        $("#currentBooking").addClass("show");
        $("#checklist").removeClass("show");
        $("#history").removeClass("show");
        $("#checklistBtn").addClass("secondary-text-color")
        $("#checklistBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#currentBookingBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#currentBookingBtn").removeClass("secondary-text-color")

      });
      $("#checklistBtn").click(function () {
        $("#checklist").addClass("show");
        $("#currentBooking").removeClass("show");
        $("#history").removeClass("show");
        $("#checklistBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#checklistBtn").removeClass("secondary-text-color")
        $("#currentBookingBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#currentBookingBtn").addClass("secondary-text-color")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")

      });

      $("#historyBtn").click(loadHistory);

      $(".viewTransaction").click(loadHistory);

    });
  </script>