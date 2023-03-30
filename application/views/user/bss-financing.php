    <div class="row">
      <div class="col-12 mt-5 mb-3">
        <p style="font-size: 22px;">Buysmallsmall financing - <?php echo $bss_finance_property['property_name']; ?></p>
      </div>
      <div class="col-12">
        <nav class="nav">
          <li class="nav-item mr-3 ">
            <a class="nav-link primary-text-color  sub-menu--dashboard-active px-0" id="financingDetailsBtn" href="#"
              role="button">Financing details</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link secondary-text-color px-0 " id="propertyDetailsBtn" href="#" role="button">Property
              details</a>
          </li>

        </nav>
      </div>

      <!-- Financing details -->
      <div class="col-12 mt-5 collapse show" id="financingDetails">
        <div class="primary-background p-md-5 p-3">
          <div class="row">
            <div class="col-12">
              <h3 class="address-title"><?php echo $bss_finance_property['property_name']; ?></h3>
              <p><?php echo $bss_finance_property['city'].', '.$bss_finance_property['name']; ?></p>
            </div>
          </div>
          <div class="row my-md-5">
            <div class="col-md-3 col-12 my-2">
              <p style="font-size: 14px;" class="font-weight-light">Financing Status</p>
              <p style="font-size: 26px;"><?php echo ($bss_finance_property['request_status'] == 'new')? 'Pending' : ucfirst($bss_finance_property['request_status']) ; ?></p>
            </div>
            <div class="col-md-3 col-12 my-2">
              <p style="font-size: 14px;" class="font-weight-light">Approved Financing Amount</p>
              <p style="font-size: 26px;">&#8358;<?php echo number_format($bss_finance_property['finance_balance']); ?></p>
            </div>
            <div class="col-md-3 col-12 my-2">
              <p style="font-size: 14px;" class="font-weight-light">Origination fee Paid</p>
              <p style="font-size: 26px;">&#8358;<?php echo number_format($bss_finance_property['amount']); ?></p>
            </div>
            <div class="col-md-3 col-12 my-2 p-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Outstanding Balance</p>
              <div class="d-flex">
                <p style="font-size: 26px;" class="d-flex align-items-center m-1">&#8358;10,000,000</p>
                <button type="button" class="btn tertiary-background" data-target="#transferFunds"
                  data-toggle="modal">Pay now</button>
                <!-- <button style="background-color: #EDEDEF;" type="button" class="btn">Paid</button> -->
              </div>
            </div>


            <!-- modal to transfer -->
            <div class="modal fade" id="transferFunds" data-backdrop="static" data-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header primary-background pl-5">
                    <h5>Transfer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body px-5">
                    <div class="row">
                      <div class=" col-12 my-2">
                        <p style="font-size: 12px;" class="font-weight-light">Please transfer outstanding balance to the
                          Buysmallsmall account
                          details below.</p>
                      </div>
                      <div class=" col-12 my-2">
                        <p style="font-size: 13px;" class="font-weight-light">Account name</p>
                        <p style="font-size: 26px;">Small Small Te- BuySmallsmall</p>
                      </div>
                      <div class=" col-12 my-2">
                        <p style="font-size: 13px;" class="font-weight-light">Bank name</p>
                        <p style="font-size: 26px;">Providus Bank</p>
                      </div>
                      <div class=" col-12 my-2">
                        <p style="font-size: 13px;" class="font-weight-light">Account number</p>
                        <p style="font-size: 26px;">7901029183</p>
                      </div>
                      <div class="col-12">
                        <p style="font-size: 13px;" class="font-weight-light">Outstanding Balance</p>
                        <div class="primary-background p-md-4 p-3">
                          <p class="text-center" style="font-size: 26px;">&#8358;16,000,000</p>
                        </div>
                      </div>
                    </div>

                    <div class="my-4 text-center mt-5">
                      <button type="submit" class="btn btn-dark  btn-custom-primary px-md-4 py-md-2">Send payment
                        confirmation</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-4  col-12">
              <button class="btn font-weight-light w-100 p-md-3 p-2 tertiary-background" type="button" data-target="#"
                data-toggle="modal">
                Sign Contract of Sale</button>
            </div>
            <div class="col-md-4  col-12 d-none">
              <button style="background-color: #EDEDEF;" class="btn font-weight-light w-100 p-md-3 p-2" type="button"
                data-target="#" data-toggle="modal">
                Contract of Sale Completed</button>
            </div>

          </div>

          <div class="divider my-5"></div>

          <div>
            <div class="row">
              <div class="col-12">
                <p>Property Payment Schedule</p>
              </div>

              <!---<div class="col-md-3 col-12 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Property Value</p>
                <p style="font-size: 26px;">&#8358;80,000,000</p>
              </div>
              <div class="col-md-3 col-12 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Equity 20%</p>
                <p style="font-size: 26px;">&#8358;16,000,000</p>
              </div>
              <div class="col-md-3 col-12 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Principal</p>
                <p style="font-size: 26px;">&#8358;64,000,000</p>
              </div>
              <div class="col-md-3 col-12 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Admin fee 5%</p>
                <p style="font-size: 26px;">&#8358;10,000,000</p>
              </div>

              <div class="col-md-3 col-6 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Interest</p>
                <p style="font-size: 26px;">0.0%</p>
              </div>
              <div class="col-md-3 col-6 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Tenor in months</p>
                <p style="font-size: 26px;">72 months</p>
              </div>
              <div class="col-md-3 col-6 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Tenor in years</p>
                <p style="font-size: 26px;">6 years</p>
              </div>
              <div class="col-md-3 col-6 my-2">
                <p style="font-size: 14px;" class="font-weight-light">Initial paymennt</p>
                <p style="font-size: 26px;">&#8358;1,000,000</p>
              </div>
            </div>--->

            <!---<div class="secondary-background px-4 py-3 mt-5">
              <div class="table-responsive ">
                <table class="table text-white">
                  <thead>
                    <tr class="border-bottom">
                      <td>Month</td>
                      <td>Year 1(28%)<br>12,866,667</td>
                      <td>Year 2(19%)<br>12,866,667</td>
                      <td>Year 3(15%)<br>12,866,667</td>
                      <td>Year 4(11%)<br>12,866,667</td>
                      <td>Year 5(7%)<br>12,866,667</td>
                      <td>Year 6(4%)<br>12,866,667</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>
                    <tr>
                      <td scope="row">Month 1</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                      <td>1,866,667</td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>--->
          </div>


        </div>

      </div>

      <!-- Property details -->
      <div class="col-12 mt-5 collapse" id="propertyDetails">
        <div class="primary-background p-md-5 p-3">
          <div class="row">
            <div class="col-12">
              <h3 class="address-title"><?php echo $bss_finance_property['property_name']; ?></h3>
              <p><?php echo $bss_finance_property['city'].', '.$bss_finance_property['name']; ?></p>
            </div>
          </div>
          <div class="row my-md-5">
            <div class="col-md-5 col-12 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Payment Plan</p>
              <p style="font-size: 26px;">Buysmallsmall Financing</p>
            </div>
            <div class="col-md-3 col-12 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Current market value</p>
              <p style="font-size: 26px;">&#8358;<?php echo number_format($bss_finance_property['marketValue']); ?></p>
            </div>
            <div class="col-md-4 col-12 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Property Status</p>
              <p style="font-size: 26px;"><?php echo ucfirst($bss_finance_property['construction_lvl']); ?></p>
              <button type="button" class="btn btn-custom-secondary">Progress report</button>
            </div>

          </div>
          <div class="row mt-4">
            <div class="col-md-3 col-5">
              <button class="btn font-weight-light w-100 p-md-3 p-2 btn-custom-primary" type="button"
                data-target="#liquidate" data-toggle="modal">
                Liquidate</button>
            </div>
            <div class="col-md-3 col-7">
              <button class="btn font-weight-light w-100 p-md-3 p-2 btn-custom-primary" type="button"
                data-target="#transferShares" data-toggle="modal">
                Transfer Ownership</button>
            </div>

            <!-- liqudate shares modal -->
            <div class="modal fade" id="liquidate" data-backdrop="static" data-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header primary-background pl-5">Liquidate Shares</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body p-5">
                    <form>
                      <div class="form-group">
                        <label for="liquidateShare">How man shares do you want to sell?</label>
                        <input type="text" class="form-control" id="liquidateShare" placeholder="Type number of shares">

                      </div>

                      <div class="my-4 text-center mt-5">
                        <button type="submit" class="btn btn-dark py-2 btn-custom-primary px-5" data-toggle="modal"
                          data-target="#createWallet">Liquidate</button>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>

            <!-- Success after sharing shares modal -->
            <div class="modal fade d-none" id="liquidate" data-keyboard="false" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header primary-background pl-5">Liquidate Shares</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body p-5">
                    <div class="d-flex flex-column justify-content-items text-center">
                      <p>Your offer has been received!!</p>
                      <p>Our team will reach out to you within 24hrs to complete the process</p>
                    </div>
                  </div>

                </div>
              </div>
            </div>


            <!-- Transfer shares modal -->
            <div class="modal fade" id="transferShares" data-backdrop="static" data-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header primary-background pl-5">
                    <h5>Transfer Property Shares</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body px-5">
                    <p class="text-center my-4">You have &nbsp;&nbsp;<span
                        style="font-size: 26px;">4</span>&nbsp;&nbsp;Property shares</p>
                    <form>
                      <div class="form-group m-2">
                        <label style="font-size: 12px;" for="numberOfShares">Shares to transfer</label>
                        <input type="text" class="form-control p-3" id="numberOfShares"
                          placeholder="Enter number of shares to transfer">
                      </div>
                      <div class="form-group m-2">
                        <label style="font-size: 12px;" for="nameOfOwner">Name of new owner</label>
                        <input type="text" class="form-control p-3" id="nameOfOwner" placeholder="Full  name">
                      </div>
                      <div class="form-group m-2">
                        <label style="font-size: 12px;" for="emailOfOwner">Email of new owner</label>
                        <input type="text" class="form-control p-3" id="emailOfOwner" placeholder="Email Address">
                      </div>

                      <div class="my-4 text-center mt-5">
                        <button type="submit" class="btn btn-dark py-2 btn-custom-primary px-5" data-toggle="modal"
                          data-target="#createWallet">Transfer</button>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
            </div>

          </div>

          <div class="divider my-5"></div>

          <div>
            <h6>Financial Highlights</h6>

            <div class="secondary-background px-4 py-3">

              <div>
                <table class="table table-responsive text-white">
                  <thead>
                    <tr>
                      <td></td>
                      <td>Year 1</td>
                      <td>Year 2</td>
                      <td>Year 3</td>
                      <td>Year 4</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Rent</td>
                      <td>0%</td>
                      <td>7%</td>
                      <td>8%</td>
                      <td>9%</td>
                    </tr>
                    <tr>
                      <td scope="row">Appreciation</td>
                      <td>9%</td>
                      <td>10%</td>
                      <td>11%</td>
                      <td>12%</td>
                    </tr>
                    <tr>
                      <td scope="row">Capital + Appreciation</td>
                      <td>&#8358;98m</td>
                      <td>&#8358;102m</td>
                      <td>&#8358;150m</td>
                      <td>&#8358;190m</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>

      </div>


    </div>

  </main>
  <script>
    $(document).ready(function () {
      $("#financingDetailsBtn").click(function () {
        $("#financingDetails").addClass("show");
        $("#propertyDetails").removeClass("show");
        $("#history").removeClass("show");
        $("#propertyDetailsBtn").addClass("secondary-text-color")
        $("#propertyDetailsBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#financingDetailsBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#financingDetailsBtn").removeClass("secondary-text-color")

      });
      $("#propertyDetailsBtn").click(function () {
        $("#propertyDetails").addClass("show");
        $("#financingDetails").removeClass("show");
        $("#history").removeClass("show");
        $("#propertyDetailsBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#propertyDetailsBtn").removeClass("secondary-text-color")
        $("#financingDetailsBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#financingDetailsBtn").addClass("secondary-text-color")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")

      });
      $("#historyBtn").click(function () {
        $("#history").addClass("show");
        $("#financingDetails").removeClass("show");
        $("#propertyDetails").removeClass("show");

        $("#propertyDetailsBtn").addClass("secondary-text-color")
        $("#propertyDetailsBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#financingDetailsBtn").addClass("secondary-text-color")
        $("#financingDetailsBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").removeClass("secondary-text-color")
        $("#historyBtn").addClass("primary-text-color sub-menu--dashboard-active")
      });


      // handles switch button for unit
      $("#percent").click(function () {
        $("#percent").addClass("set-unit-container");
        $("#naira").removeClass("set-unit-container");
      });
      $("#naira").click(function () {
        $("#naira").addClass("set-unit-container");
        $("#percent").removeClass("set-unit-container");
      });

    });


  </script>