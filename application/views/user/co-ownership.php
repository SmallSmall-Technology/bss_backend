<div class="col-12">
        <nav class="nav">
          <li class="nav-item mr-3 ">
            <a class="nav-link primary-text-color  sub-menu--dashboard-active px-0" id="myPortfolioBtn" href="#"
              role="button">My shares</a>
          </li>
          <li class="nav-item mr-3 ">
            <a class="nav-link primary-text-color px-0" id="giftBtn" href="#" role="button">Gift</a>
          </li>
          <li class="nav-item mr-3">
            <a class="nav-link secondary-text-color px-0" id="historyBtn" href="#" role="button">History</a>
          </li>

        </nav>
      </div>

      <!-- Property Portfolio  -->
      <div class="col-12 mt-5 collapse show" id="myPortfolio">
        <div class="p-md-5 p-2 primary-background">
          <div class="row">
          <?php if(!empty($all_co_own_properties)){ ?>
                <?php foreach($all_co_own_properties as $all_co_own_property => $value){ ?>
                    <div class="col-md-4 col-12  mb-4">
                      <div class="card border-0 default-background h-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between my-2">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/user-assets/images/portfolio-bag2.svg" alt="">
                            <p>Bought <?php echo date('M Y', strtotime($value['request_date'])); ?><br><small class="font-weight-lighter">Co ownership</small></p>
                          </div>
                          <p class="card-text"><?php echo $value['property_name']; ?></p>
                          <p class="card-text font-weight-lighter"><?php echo ($value['purchase_beneficiary'] == 'Self')? $value['unit_amount'] : $value['no_of_units']; ?> Shares</p>
                          <div class=" mt-5">
                            <a href="<?php echo base_url(); ?>user/co-ownership-property/<?php echo $value['reqID']; ?>" class="btn tertiary-background px-5">view</a>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php } ?>
            <?php } ?>
            
          </div>

        </div>

      </div>

      <!-- Gift -->
      <div class="col-12 mt-5 collapse" id="gift">
        <div class="p-md-5 p-2 primary-background">
          <div class="row">
            <div class="col-12 mb-5">
              <span style="padding:10px;border-radius:5px;float:left;display:block;font-size:14px;background:#64318A;margin-right:10px;"><a style="display:block;color:#FFF;text-decoration:none;" href="<?php echo base_url(); ?>user/send-gift">Send Gift <i class="fa fa-plane"></i></a></span> <p style="line-height:40px;">This tab shows all the Property shares gift you have bought for family and friends.</p>
            </div>
            <?php if(!empty($gifts) && isset($gifts)){ ?>
                <?php foreach($gifts as $gift => $value){ ?>
                    <div class="col-md-4 col-12  mb-4">
                      <div class="card default-background h-100 border-0">
                        <div class="card-body">
                          <div class="d-flex justify-content-between my-2">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/user-assets/images/portfolio-bag2.svg" alt="">
                            <p>May 2023<br><small class="font-weight-lighter">Gift claimed</small></p>
                          </div>
                          <div class="text-center ">
                            <p class="card-text px-5" style="font-size: 14px;">You sent <span style="font-size: 16px"><?php echo $value['no_of_units']; ?></span>
                              property shares to </p>
                            <p style="font-size: 20px;"><?php echo $value['firstname'].' '.$value['lastname']; ?></p>
                            <div class=" mt-5">
                              <a href="#claimedGift" class="btn tertiary-background px-5" data-toggle="modal">view</a>
                            </div>
                          </div>
        
                        </div>
                      </div>
                    </div>
                <?php } ?>
            <?php } ?> 
            
            
            <!-- modal for CLAIMED gift -->
            <div class="modal fade" id="claimedGift" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                      <div class=" col-12 my-2 text-center">
                        <p class="mb-2"><!---Jane Doe has claimed the property shares
                          you sent on 23 Mar, 2023---></p>
                        <p style="font-size: 13px" class="font-weight-light"><!---Number of property shares sent---></p>
                        <p class="mb-2" style="font-size: 18px"><!---23---></p>
                        <p style="font-size: 13px" class="font-weight-light"><!---Property info---></p>
                        <p style="font-size: 18px"><!---1 br Maisonette B2 Olivia Court Lekki---></p>
                      </div>

                    </div>

                    <div class="my-4 text-center mt-5">
                      <button type="submit" class="btn btn-dark  btn-custom-primary px-md-4 py-md-2" disabled>Recall
                        Gift</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- modal for UNCLAIMED gift -->
            <div class="modal fade" id="unclaimedGift" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                      <div class=" col-12 my-2 text-center">
                        <p class="mb-2"><!---Mary joy has claimed the property shares
                          you sent on 23 Mar, 2023---></p>
                        <p style="font-size: 13px" class="font-weight-light"><!---Number of property shares sent---></p>
                        <p class="mb-2" style="font-size: 18px">23</p>
                        <p style="font-size: 13px" class="font-weight-light"><!---Property info---></p>
                        <p style="font-size: 18px"><!---1 br Maisonette B2 Olivia Court Lekki---></p>
                      </div>

                    </div>

                    <div class="my-4 text-center mt-5">
                      <button type="submit" class="btn tertiary-background  px-md-4 py-md-2">Recall
                        Gift</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>


          </div>

        </div>

      </div>

      <!-- History Booking -->
      <div class="col-12 mt-5 collapse" id="history">
        <div class="primary-background p-5 table-responsive">
          <table class="table">
            <thead class="tertiary-background">
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
                    <td><?php echo $value['unit_amount']; ?></td>
                    <td><?php echo $value['property_name']; ?></td>
                    <td>&#8358;<?php echo number_format($value['amount']); ?></td>
                    <td><?php echo ucfirst($value['purchase_beneficiary']); ?></td>
                    <td>
                      <?php echo date('d M, Y', strtotime($value['request_date'])); ?>
                    </td>
                  </tr>
                <?php } ?>
            <?php } ?>

            </tbody>
          </table>
        </div>

      </div>

  </main>
  <script>
    $(document).ready(function () {
      $("#myPortfolioBtn").click(function () {
        $("#myPortfolio").addClass("show");
        $("#gift").removeClass("show");
        $("#history").removeClass("show");
        $("#giftBtn").addClass("secondary-text-color")
        $("#giftBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#myPortfolioBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#myPortfolioBtn").removeClass("secondary-text-color")

      });
      $("#giftBtn").click(function () {
        $("#gift").addClass("show");
        $("#myPortfolio").removeClass("show");
        $("#history").removeClass("show");
        $("#giftBtn").addClass("primary-text-color sub-menu--dashboard-active")
        $("#giftBtn").removeClass("secondary-text-color")
        $("#myPortfolioBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#myPortfolioBtn").addClass("secondary-text-color")
        $("#historyBtn").addClass("secondary-text-color")
        $("#historyBtn").removeClass("primary-text-color sub-menu--dashboard-active")

      });
      $("#historyBtn").click(function () {
        $("#history").addClass("show");
        $("#myPortfolio").removeClass("show");
        $("#gift").removeClass("show");

        $("#giftBtn").addClass("secondary-text-color")
        $("#giftBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#myPortfolioBtn").addClass("secondary-text-color")
        $("#myPortfolioBtn").removeClass("primary-text-color sub-menu--dashboard-active")
        $("#historyBtn").removeClass("secondary-text-color")
        $("#historyBtn").addClass("primary-text-color sub-menu--dashboard-active")
      });

    });
  </script>