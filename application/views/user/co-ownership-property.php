    <div class="row">
      <div class="col-12 mt-5">
        <p style="font-size: 22px;"><?php echo $co_details['property_name']; ?></p>
      </div>
      <div class="col-12">
        <nav class="nav">
          <li class="nav-item mr-3 ">
            <a class="nav-link primary-text-color  sub-menu--dashboard-active px-0" id="propertyBtn" href="#"
              role="button">Property</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link secondary-text-color px-0 " id="shareCertificateBtn" href="#" role="button">Property
              Shares
              Certificate</a>
          </li>
          <!---<li class="nav-item mr-3">
            <a class="nav-link secondary-text-color px-0 " id="historyBtn" href="#" role="button">History</a>
          </li>--->

        </nav>
      </div>

      <!-- Property -->
      <div class="col-12 mt-5 collapse show" id="property">
        <div class="primary-background p-md-5 p-3">
          <div class="row">
            <div class="col-12">
              <h3 class="address-title"><?php echo $co_details['property_name']; ?></h3>
              <p><?php echo $co_details['city'].', '.$co_details['name']; ?></p>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Shares Bought</p>
              <p style="font-size: 26px;"><?php echo $co_details['unit_amount']; ?></p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Paid</p>
              <p style="font-size: 26px;">&#8358;<?php echo number_format($co_details['amount']); ?></p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Property Status</p>
              <p style="font-size: 26px;"><?php echo $co_details['construction_lvl']; ?></p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Hold Period</p>
              <p style="font-size: 26px;" class="d-flex align-items-center"><?php 
                        if(@$co_details['hold_period'] == 'One year'){
				            echo "1 year";
				        }elseif(@$co_details['hold_period'] == 'Two years'){
				            echo "2 years";
				        }elseif(@$co_details['hold_period'] == 'Three years'){
				            echo "3 years";
				        }elseif(@$co_details['hold_period'] == 'Four years'){
				            echo "4 years";
				        }elseif(@$co_details['hold_period'] == 'Five years'){
				            echo "5 years";
				        }elseif(@$co_details['hold_period'] == 'Six years'){
				            echo "6 years";
				        }else{
				            echo @$co_details['hold_period'];
				        } ?></p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Maturity Date</p>
              <p style="font-size: 26px;" class="d-flex align-items-center"><?php echo date('M, Y', strtotime($co_details['maturity_date'])); ?></p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Maturity Countdown</p>
              <p style="font-size: 26px;" class="d-flex align-items-center">
                  <?php 
                    $now = time(); // or your date as well
                    $maturity_date = strtotime($co_details['maturity_date']);
                    $datediff = $maturity_date - $now;
                    echo round($datediff / (60 * 60 * 24));
                  ?> days</p>
            </div>
          </div>
          <div class="row my-md-5">
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Payouts received</p>
              <p style="font-size: 26px;">&#8358;0</p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Market value</p>
              <p style="font-size: 26px;">&#8358;<?php echo ($co_details['marketValue']/1000000); ?>m</p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Free Property Shares</p>
              <p style="font-size: 26px;">0</p>
            </div>
            <div class="col-md-2 col-6 my-2 my-md-0">
              <p style="font-size: 14px;" class="font-weight-light">Transferred shares</p>
              <p style="font-size: 26px;">0</p>
            </div>
          </div>
          <div class="row mt-4">
             <div class="col-md-3 col-5 mb-3">
              <button class="btn font-weight-light w-100 p-md-3 p-2 tertiary-background" type="button"
                data-target="#liquidate" data-toggle="modal">
                Liquidate</button>
            </div>
            <div class="col-md-3 col-7 mb-3">
              <button class="btn font-weight-light w-100 p-md-3 p-2 tertiary-background" type="button"
                data-target="#transferShares" data-toggle="modal">
                Transfer Shares</button>
            </div>
            <div class="col-md-3 col-12">
              <button class="btn font-weight-light w-100 p-md-3 p-2 tertiary-background" type="button"
                data-target="#giftBasket" data-toggle="modal">
                Put in Gift Basket</button>
            </div>
            <div class="col-md-3 col-12">
              <!--<button class="btn font-weight-light w-100 p-md-3 p-2 tertiary-background" type="button"
                data-target="#giftBasket" data-toggle="modal"><a style="color:#FFF" href="<? //echo base_url(); ?>user/send-a-gift/<?php //echo $co_details['reqID']; ?>">
                Send a Gift</a></button>--->
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
            
            <!-- Transfer to gift bucket shares modal -->
            <div class="modal fade" id="giftBasket" data-backdrop="static" data-keyboard="false" tabindex="-1"
              aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header primary-background pl-5">
                    <h5>Transfer to gift basket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body px-5">
                    <p class="text-center my-4">You have &nbsp;&nbsp;<span
                        style="font-size: 26px;"><?php echo ($co_details['purchase_beneficiary'] == 'Self')? $co_details['unit_amount'] : $co_details['no_of_units']; ?></span>&nbsp;&nbsp;Property
                      shares</p>
                    <form id="giftBasket">
                      <!--<div class="form-group m-2">
                        <label style="font-size: 12px;" for="numberOfShares">Name of gift basket</label>
                        <input type="text" class="form-control p-3" id="numberOfShares"
                          placeholder="Enter custom name for gift basket ">
                      </div>--->
                      <div class="form-group m-2">
                        <label style="font-size: 12px;" for="nameOfOwner">Shares to transfer</label>
                        <input type="text" class="form-control p-3" id="gift_amount" placeholder="Enter amount of share to transfer ">
                      </div>

                      <div class="my-4 text-center mt-5">
                        <button type="submit" class="btn btn-dark py-2 tertiary-background  px-5" id="giftBut">Send gift</button>
                      </div>
                      <input type="hidden" value="<?php echo $co_details['unit_amount']; ?>" class="user_shares" id="user_shares" />
                      <input type="hidden" value="<?php echo $co_details['refID']; ?>" class="request_id" id="request_id" />
                      <input type="hidden" value="<?php echo $co_details['propID']; ?>" class="property_id" id="property_id" />
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

            <div class="default-background px-4 py-3">
              <div class="unit-container d-flex mb-2">
                <div class="unit-container__percent set-unit-container" id="percent">
                  <span class="">%</span>
                </div>
                <div class="unit-container__naira" id="naira">
                  <span class="">&#8358;</span>
                </div>
              </div>
              <div>
                <table class="table table-responsive">
                  <thead>
                    <tr>
                      <td></td>
                      <td>Year 1</td>
                      <td>Year 2</td>
                      <td>Year 3</td>
                      <td>Year 4</td>
                      <?php if($co_details['hold_period'] == 'Five years' || $co_details['hold_period'] == 'Six years'){ ?>
                      <th>Year 5</th>
                      <?php } ?>
                      <?php if($co_details['hold_period'] == 'Six years'){ ?>
                      <th>Year 6</th>
                      <?php } ?>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td scope="row">Rent</td>
                      <td><?php echo $co_details['co_rent_1']; ?>%</td>
                      <td><?php echo $co_details['co_rent_2']; ?>%</td>
                      <td><?php echo $co_details['co_rent_3']; ?>%</td>
                      <td><?php echo $co_details['co_rent_4']; ?>%</td>
                      <?php if($co_details['hold_period'] == 'Five years' || $co_details['hold_period'] == 'Six years'){ ?>
                            <td><?php echo $co_details['co_rent_5']; ?>%</td>
                            
                        <?php } ?>
                        <?php if($co_details['hold_period'] == 'Six years'){ ?>
                            <td><?php echo $co_details['co_rent_6']; ?>%</td>
                        <?php } ?>
                    </tr>
                    <tr>
                      <td scope="row">Appreciation</td>
                      <td><?php echo $co_details['co_appr_1']; ?>%</td>
                      <td><?php echo $co_details['co_appr_2']; ?>%</td>
                      <td><?php echo $co_details['co_appr_3']; ?>%</td>
                      <td><?php echo $co_details['co_appr_4']; ?>%</td>
                      <?php if($co_details['hold_period'] == 'Five years' || $co_details['hold_period'] == 'Six years'){ ?>
                            <td><?php echo $co_details['co_appr_5']; ?>%</td>
                            
                        <?php } ?>
                        <?php if($co_details['hold_period'] == 'Six years'){ ?>
                            <td><?php echo $co_details['co_appr_6']; ?>%</td>
                        <?php } ?>
                    </tr>
                    <tr>
                      <td scope="row">Capital + Appreciation</td>
                      <td>&#8358;<?php $appr_1 = $co_details['marketValue'] * ($co_details['co_appr_1'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_1)/1000000, 1); ?>m</td>
                      <td>&#8358;<?php $appr_2 = $co_details['marketValue'] * ($co_details['co_appr_2'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_2)/1000000, 1); ?>m</td>
                      <td>&#8358;<?php $appr_3 = $co_details['marketValue'] * ($co_details['co_appr_3'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_3)/1000000, 1); ?>m</td>
                      <td>&#8358;<?php $appr_4 = $co_details['marketValue'] * ($co_details['co_appr_4'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_4)/1000000, 1); ?>m</td>
                        <?php if($co_details['hold_period'] == 'Five years' || $co_details['hold_period'] == 'Six years'){ ?>
                            <td>&#8358;<?php $appr_5 = $co_details['marketValue'] * ($co_details['co_appr_5'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_5)/1000000, 1); ?>m</td>
                            
                        <?php } ?>
                        <?php if($co_details['hold_period'] == 'Six years'){ ?>
                            <td>&#8358;<?php $appr_6 = $co_details['marketValue'] * ($co_details['co_appr_6'] / 100); ?>
                        <?php echo round(($co_details['marketValue'] + $appr_6)/1000000, 1); ?>m</td>
                        <?php } ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>


        </div>

      </div>

      <!-- shares certificate -->
      <div class="col-12 mt-5 collapse" id="shareCertificate">
        <div class="primary-background py-5 px-md-0 px-4">
          <div class="certificate-container d-flex flex-wrap">
            <div class="certificate-item px-md-5 mb-md-5">
              <p><?php echo $co_details['property_name']; ?></p>
              <div class="d-flex justify-content-center mt-5">
                <div class="d-flex flex-column align-items-center">
                  <img class="img-fluid d-inline-block mb-4" src="<?php echo base_url(); ?>assets/user-assets/images/pdf-icon.svg" alt="pdf-icon">
                  <a href="<?php echo base_url().'uploads/shares_certificate/'.$userID.'/'.$co_details['refID'].'/'.$co_details['shares_certificate']; ?>" target="_blank" class="btn tertiary-background d-inline-block">Download</a>
                </div>

              </div>
            </div>
            <div class="certificate-item px-md-5 mb-md-5">
              <p><?php echo $co_details['property_name']; ?></p>
              <div class="d-flex justify-content-center mt-5">
                <div class="d-flex flex-column align-items-center">
                  <img class="img-fluid d-inline-block mb-4" src="<?php echo base_url(); ?>assets/user-assets/images/pdf-icon.svg" alt="pdf-icon">
                  <a href="#" class="btn tertiary-background d-inline-block">Download</a>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- History Booking -->
      <div class="col-12 mt-5 collapse" id="history">
        <div class="current-booking">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Shares bought</th>
                <th scope="col">Property</th>
                <th scope="col">Amount paid</th>
                <th scope="col">Buying for</th>
                <th scope="col">Date</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($all_co_own_properties)){ ?>
                  <?php foreach($all_co_own_properties as $all_co_own_property => $value){ ?>
                  <tr>
                    <td><?php echo ($value['purchase_beneficiary'] == 'Self')? $value['unit_amount'] : $value['no_of_units']; ?></td>
                    <td><?php echo $value['property_name']; ?></td>
                    <td>&#8358;<?php echo number_format($value['amount']); ?></td>
                    <td><?php echo $value['purchase_beneficiary']; ?></td>
                    <td>
                      <?php echo date('d M, Y', strtotime($value['request_date'])); ?>
                    </td>
                  </tr>
                  <?php } ?>
              <?php } ?>
              <!---<tr>
                <td>3</td>
                <td>2 br Maisonette B2 Olivia Court Lekki</td>
                <td>&#8358;53,000</td>
                <td>Gift</td>
                <td>
                  5 May, 2021
                </td>
              </tr>
              <tr>
                <td>23</td>
                <td>2 br Maisonette B2 Olivia Court Lekki</td>
                <td>&#8358;53,000</td>
                <td>Spouse</td>
                <td>
                  5 May, 2021
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>2 br Maisonette B2 Olivia Court Lekki</td>
                <td>&#8358;53,000</td>
                <td>Children</td>
                <td>
                  5 May, 2021
                </td>
              </tr>--->

            </tbody>
          </table>
        </div>

      </div>




    </div>

  </main>
  <script src="<?php echo base_url(); ?>assets/js/gift-basket.js"></script>
  <script>
    $(document).ready(function () {
      $("#propertyBtn").click(function () {
        $("#property").addClass("show");
        $("#shareCertificate").removeClass("show");
        $("#history").removeClass("show");
        $("#shareCertificateBtn").addClass("secondary-text-color")
        $("#shareCertificateBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#propertyBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#propertyBtn").removeClass("secondary-text-color")

      });
      $("#shareCertificateBtn").click(function () {
        $("#shareCertificate").addClass("show");
        $("#property").removeClass("show");
        $("#history").removeClass("show");
        $("#shareCertificateBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#shareCertificateBtn").removeClass("secondary-text-color")
        $("#propertyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#propertyBtn").addClass("secondary-text-color")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")

      });
      $("#historyBtn").click(function () {
        $("#history").addClass("show");
        $("#property").removeClass("show");
        $("#shareCertificate").removeClass("show");

        $("#shareCertificateBtn").addClass("secondary-text-color")
        $("#shareCertificateBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#propertyBtn").addClass("secondary-text-color")
        $("#propertyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
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