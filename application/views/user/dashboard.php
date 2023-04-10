    <div class="row">
      <div class="col-12 my-5">
        <p style="font-size: 22px;">Dashboard</p>
      </div>
      <div class="col-md-4 col-12  mb-4">
        <div class="card card-custom">
          <div class="card-body">
            <p class="card-text">Active Portfolio</p>
            <div class="d-flex justify-content-between my-2">
              <h3 class="card-title"><?php echo $portfolio_count; ?></h3>
              <p><?php echo number_format($co_count); ?> Co-ownership<br>
                
                <?php echo number_format(count($buy_to_let)); ?> Buy2Let<br>
                <?php echo number_format(count($buy_to_live)); ?> Buy2Live</p>
            </div>
            <div class="dash-divider my-3"></div>
            <div>
              <p class="card-text">Value</p>
              <h3 class="card-title">&#8358;<?php echo number_format(@$owner['amount']); ?></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12  mb-4">
        <div class="card card-custom">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <p class="card-text">Wallet Balance</p>
              <h3 class="card-title">&#8358;<?php echo number_format($balance['account_balance']); ?></h3>
            </div>
            <div class="text-right mt-3">
              <a href="#" class="btn btn-custom-tertiary">Withdraw</a>
              <a href="#" class="btn btn-custom-tertiary">Top up</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12  mb-4">
        <div class="card card-custom">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <p class="card-text">Gift Basket</p>
              <h3 class="card-title"><?php echo $gift_basket['shares']; ?> Shares</h3>
            </div>
            <div class="text-right mt-3">
              <a href="gift-basket.html" class="btn btn-custom-tertiary">Start gifting</a>
            </div>


          </div>
        </div>
      </div>
      <div class="col-md-4 col-12 mb-4">
        <div class="card card-custom">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <p class="card-text">Upcoming Payment</p>
              <h3 class="card-title">&#8358;0</h3>
            </div>
            <div class="text-right mt-3">
              <a href="#" class="btn btn-custom-tertiary">pay now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12 mb-4">
        <div class="card card-custom">
          <div class="card-body d-flex flex-column justify-content-between">
            <div>
              <p class="card-text">Next Quarterly Payment</p>
              <h3 class="card-title">&#8358;0</h3>
            </div>

          </div>
        </div>
      </div>
      
    </div>

  </main>