    <div class="col-12 mt-5 collapse show" id="history">
        <div class="primary-background p-5">
          <div class="table-responsive">
            <table class="table">
              <thead class="tertiary-background">
                <tr>
                  <th scope="col">Transaction type</th>
                  <th scope="col">Transaction id</th>
                  <th scope="col">Date</th>
                  <th scope="col">Amount</th>
                </tr>
              </thead>
              <tbody>
                  
                   <?php if(!empty($transactions) && isset($transactions)){ ?>
                      <?php foreach($transactions as $transaction => $value){ ?>
                        <tr>
                          <td>
                              <?php
                                if($value['plan'] == 'co-own')
                                    echo "Shares";
                                elseif($value['plan'] == 'finance')
                                    echo "BuySS financing";
                                elseif($value['plan'] == 'outright')
                                    echo "BuySS outright";
                              ?>
                          </td>
                          <td><?php echo $value['transaction_id']; ?></td>
                          <td>
                            <p class="d-flex align-items-center"><?php echo date('d M, Y', strtotime($value['transactionDate'])); ?></p>
                          </td>
                          <td>&#8358;<?php echo number_format($value['transaction_amount']); ?></td>
                        </tr>
                     <?php } ?>
                  <?php } ?>
                
              </tbody>
            </table>
          </div>

        </div>

      </div>


    </div>

  </main>