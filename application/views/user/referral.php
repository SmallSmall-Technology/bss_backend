<div class="row">
      <div class="col-12 my-5">
        <p style="font-size: 22px;">Referral</p>
        <p>
          Invite your friends to Buysmallsmall , If they sign up and buy property shares you get free property shares.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="primary-background  py-md-5 px-md-5 py-3 px-4">
          <p style="font-size: 22px;" class="mb-4">Your referral stats</p>
          <div class="row">
            <div class="col-md-3 col-12">
              <p style="font-size: 26px;">0</p>
              <p style="font-size: 14px;" class="font-weight-light">Friends referred</p>
            </div>
            <div class="col-md-4 col-12">
              <p style="font-size: 26px;">0 Property shares</p>
              <p style="font-size: 14px;" class="font-weight-light">Referral Earnings</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 my-md-5 mt-4">
        <p style="font-size: 22px;">Invite your friends</p>
        <p>
          Insert your friends email address and send them invitation to join Buysmallsmall
        </p>
      </div>
    </div>

    <form>
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
          <label class="sr-only" for="inlineFormInputName">Name</label>
          <input type="text" class="form-control  " id="inlineFormInputName" placeholder="Email address">
        </div>

        <div class="col-md-auto col-12 my-1">
          <button type="submit" class="btn tertiary-background   w-100">Send</button>
        </div>
      </div>
    </form>

    <div class="row">
      <div class="col-12 my-md-5 mt-3">
        <p style="font-size: 22px;">Share referral your link</p>
        <p>
          You can also share your referral link by copying and sending it or sharing on social media
        </p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-5 col-12">
        <div class="d-flex justify-content-between align-items-md-baseline ">
          <a href="#" style="word-wrap: break-word; width: 90%; color: #662D91" class="d-block align-self-end "
            id="referralLink"><?php echo base_url().'referral/'.$refCode; ?></a>
          <div class="d-flex flex-column" id="copy" style="cursor: pointer;">
            <img class="img-fluid" src="../assets/images/copy.svg" alt="">
            <span class="d-inline-block" id="copy-text">copy</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-7 mt-4">
        <div class="d-flex h-100 align-items-end justify-content-around">
          <a href="#">
            <i class="fa-brands fa-instagram fa-2x text-dark"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-facebook fa-2x text-dark"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-twitter fa-2x text-dark"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-linkedin fa-2x text-dark"></i>
          </a>
        </div>
      </div>
    </div>

  </main>


  <!-- Jquery js -->
  <script src="./assets/js/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <!-- Bootstrap js and Popper js -->
  <script src="./assets/js/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="./assets/js/bootstrap-js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>

  <script>
    $(document).ready(function () {

      $("#copy").click(function () {
        navigator.clipboard.writeText($("#referralLink").text());
        $("#copy-text").text("copied")
        setTimeout(() => {
          $("#copy-text").text("copy")
        }, 1000);

      });
  
    });
  </script>
