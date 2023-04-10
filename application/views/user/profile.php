<!-- Profile Portfolio  -->
      <div class="col-12 mt-5 collapse show" id="myPortfolio">
        <div class="p-md-5 p-2 primary-background">
          <div class="row">
            <div class="col-md-8">
              <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="fullName">First name</label>
                    <input type="text" class="form-control form-control-lg" value="<?php echo $fname; ?>" id="fullName"
                      placeholder="Enter full name">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Last name</label>
                    <input type="text" class="form-control form-control-lg" value="<?php echo $lname; ?>" id="email"
                      placeholder="Enter email">
                  </div>

                </div>

                <div class="divider my-5"></div>

                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control form-control-lg" value="<?php echo $email; ?>" id="inputEmail3"
                      placeholder="Email">
                  </div>
                </div>

                <div class="divider my-5"></div>

                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-6">
                    <button class="btn  btn-outline-secondary" type="button" data-target="#changePassword"
                      data-toggle="modal">Change
                      Password</button>
                  </div>
                </div>
                <input type="hidden" value="<?php echo $userID; ?>" name="" />
              </form>
            </div>
          </div>

          <!-- Add contact modal -->
          <div class="modal fade" id="changePassword" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header primary-background pl-5">
                  <h5>Change Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body px-5">

                  <form>
                    <div class="form-group m-2">
                      <label style="font-size: 12px;" for="numberOfShares">New Password</label>
                      <input type="password" class="form-control p-3" id="numberOfShares"
                        placeholder="Enter new password">
                    </div>


                    <div class=" my-4 text-center mt-5">
                      <button type="submit" class="btn btn-dark py-2 tertiary-background  px-5" data-toggle="modal"
                        data-target="#createWallet">Update password</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>


        </div>

      </div>



  </main>