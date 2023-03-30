<!-- Gift basket -->
      <div class="col-12 mt-5 collapse show" id="property">
        <div class="primary-background send-gift-container py-5 ">
          <div class="row mb-4">
            <div class="col-md-6 col-12 mb-3">
              <p class="custom-font-size-22">Send Gift <?php echo $giftbags['property_id']; ?></p>
            </div>
            <div class="col-md-4 col-12 mb-3">
              <div class="d-flex justify-content-between">
                <div>
                  <p>Gift Sent</p>
                  <p class="custom-font-size-22"><?php echo $sent_gifts['shares_spent']; ?></p>
                </div>
                <div>
                  <p>Shares remaining to gift</p>
                  <p class="custom-font-size-22"><?php echo $added_gifts['shares'] - $sent_gifts['shares_spent']; ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-2 d-flex  mb-3">
              <div>
                <p>Value</p>
                <p class="custom-font-size-22">&#8358;23,000</p>
              </div>
            </div>
          </div>
          <div class="row custom-form-container mx-0">
            <div class="col-12 default-background p-md-5 p-2">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fullName">Full name</label>
                    <input type="email" class="form-control form-control-lg" id="fullName"
                      placeholder="Enter full name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="password" class="form-control form-control-lg" id="email" placeholder="Enter email">
                  </div>

                  <div class="form-group col-md-6">
                    <label for="phoneNumber">Phone number</label>
                    <input type="email" class="form-control form-control-lg" id="phoneNumber"
                      placeholder="Enter bank account number">
                  </div>


                  <div class="form-group col-md-6">
                    <label class=" mr-2" for="inlineFormCustomSelectPref">Property Shares Portfoilio</label>
                    <select class="form-control form-control-lg mr-sm-2 form-control-lg"
                      id="inlineFormCustomSelectPref">
                      <option selected>Choose portfolio</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="noOfShares">Number of shares to gift</label>
                    <input type="password" class="form-control form-control-lg" id="noOfShares"
                      placeholder="Enter amount of shares">
                  </div>

                  <div class="form-group col-md-6">
                    <label class=" mr-2" for="inlineFormCustomSelectPref">Gift Delivery method</label>
                    <select class="form-control form-control-lg mr-sm-2 form-control-lg"
                      id="inlineFormCustomSelectPref">
                      <option selected>Choose type of delivery</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>


                </div>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn tertiary-background px-5">Send</button>
                </div>


              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-12 mb-5">
              <p class="custom-font-size-22">Popular people</p>
            </div>

            <div class="col-md-4 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <p style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                    style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                <div class="">
                  <a href="send-gift.html" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <p style="line-height: 15px; font-size: 20px; font-weight: 500;">Richard Roe<br><span
                    style="font-size: 13px;" class="font-weight-light">richad@gmail.com</span></p>
                <div class="">
                  <a href="send-gift.html" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
          </div>

          <div class="divider my-5"></div>

          <div class="row">
            <div class="col-12 mb-4">
              <p>Send gift to multiple people</p>
            </div>
            <div class="col-12">
              <button type="button" class="btn tertiary-background p-2 " id="add-contact-btn"><i
                  class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Add contact</button>
            </div>
          </div>

          <div class="row mx-0" id="new-contact"></div>

        </div>

      </div>

      <!-- Contact List -->
      <div class="col-12 mt-5 collapse" id="shareCertificate">
        <div class="primary-background py-5 px-md-5 px-1">
          <div class="contact-head d-flex justify-content-between mb-5 flex-wrap">
            <p class="mb-2">7 Contacts</p>
            <div>
              <button type="button" class="btn tertiary-background p-2 " id="" data-target="#addContact"
                data-toggle="modal"><i class="fa-solid fa-circle-plus"></i>&nbsp;&nbsp;Add contact</button>
            </div>
          </div>

          <!-- Add contact modal -->
          <div class="modal fade" id="addContact" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header primary-background pl-5">
                  <h5>Add a contact to your list</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body px-5">

                  <form>
                    <div class="form-group m-2">
                      <label style="font-size: 12px;" for="numberOfShares">Full name</label>
                      <input type="text" class="form-control p-3" id="numberOfShares" placeholder="Enter full name">
                    </div>
                    <div class="form-group m-2">
                      <label style="font-size: 12px;" for="nameOfOwner">Email</label>
                      <input type="text" class="form-control p-3" id="nameOfOwner" placeholder="Enter email address">
                    </div>
                    <div class="form-group m-2">
                      <label style="font-size: 12px;" for="emailOfOwner">Phone number</label>
                      <input type="text" class="form-control p-3" id="emailOfOwner" placeholder="Enter phone number">
                    </div>

                    <div class=" my-4 text-center mt-5">
                      <button type="submit" class="btn btn-dark py-2 tertiary-background  px-5" data-toggle="modal"
                        data-target="#createWallet">Add contact</button>
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
                    <img class="img-fluid" style="width: 50%;" src="assets/images/success.gif" alt="">
                    <p>Contact added successfully</p>
                  </div>
                </div>

              </div>
            </div>
          </div>


          <div class="row contact-container">
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 mb-3">
              <div class="contact-card rounded d-flex justify-content-between px-3 py-2 align-items-center">
                <div class="d-flex ">
                  <img class="img-fluid" src="assets/images/contact-icon.svg" alt="">
                  <p class="ml-4" style="line-height: 15px; font-size: 20px; font-weight: 500;">Jane Doe<br><span
                      style="font-size: 13px;" class="font-weight-light">janed@gmail.com</span></p>
                </div>

                <div class="">
                  <p>Shares sent 2</p>
                  <a href="#" class="btn tertiary-background w-100 py-3">Send gift</a>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- History  -->
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