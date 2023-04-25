<div class="row">
  <div class="col-12 my-5">
    <p style="font-size: 22px;">Notification</p>
  </div>
</div>
<div class="row mb-5">
  <div class="col-md-12 d-md-flex d-none justify-content-between mb-4">
    <p>All notification</p>
  </div>
  <div id="" class="col-12">
    <p>Latest Notification (<span class="secondary-text-color notificationCount"></span>)</p>
  </div>
</div>
<!-- latest message -->
<?php
$previous_date = '';
foreach ($notifications as $notification => $value) {
  $current_date = date('M d, Y', strtotime($value['entry_date']));
  if ($current_date != $previous_date) { // Check if current date is different from previous date
?>
    <div class="col-12 mb-3">
      <p class="secondary-text-color"><?php echo $current_date; ?></p>
    </div>
  <?php
  }
  $previous_date = $current_date; // Update previous date
  ?>
  <!-- Check if current message is the latest message for the status read -->
  <?php if ($value['status'] == 0) { ?>
    <div class="notification col-12 mb-3" data-toggle="modal" data-target="#exampleModal<?php echo $value['id']; ?>">
      <div class="message-container--latest px-3 py-4 justify-content-between d-flex">
        <div class="d-flex align-items-center">
          <div class="bss-btn px-3 py-2  mr-md-5 d-none d-md-block">
            Buysmallsmall
          </div>
          <div class="bss-btn p-2  mr-2 d-md-none d-block">
            BSS
          </div>
          <div class="msg-intro">
            <p><?php echo $value['subject'] ?></p>
            <p style="font-size: 13px;"><?php echo ('Dear' . ' ' . $value['name'] . ',  ' . substr($value['details'], 0, 45)) ?>...</p>
          </div>
        </div>
        <div class="align-self-center mr-md-4 mr-1">
          <i class="fa-solid fa-greater-than"></i>
        </div>
      </div>
    </div>
  <?php } else { ?>
    <!-- If current message is not the latest message, treat it as older message -->
    <!-- Older messages -->
    <div class="notification col-12 mb-3" data-toggle="modal" data-target="#exampleModal<?php echo $value['id']; ?>">
      <div class="message-container px-3 py-4 justify-content-between d-flex">
        <div class="d-flex align-items-center">
          <div class="bss-btn px-3 py-2  mr-md-5 d-none d-md-block">
            Buysmallsmall
          </div>
          <div class="bss-btn p-2  mr-2 d-md-none d-block">
            BSS
          </div>
          <div class="msg-intro">
            <p><?php echo $value['subject'] ?></p>
            <p style="font-size: 13px;"><?php echo ('Dear' . ' ' . $value['name'] . ',  ' . substr($value['details'], 0, 45)) ?>...</p>
          </div>
        </div>
        <div class="align-self-center mr-md-4 mr-1">
          <i class="fa-solid fa-greater-than"></i>
        </div>
      </div>
    </div>
    </div>
  <?php } ?>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
      <div class="modal-content primary-background">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="py-4">
            <p class="mb-4"><?php echo date('M d, Y', strtotime($value['entry_date'])); ?></p>
            <!-- <p class="mb-4">23 Feb, 2023</p> -->
            <h5 class="mb-4"><?php echo $value['subject'] ?></h5>
            <div class=" d-flex align-items-center ">
              <div class="inbox-msg-icon py-3  mr-2">
                <div class="msg-icon d-flex justify-content-center align-items-center">BSS</div>
              </div>
              <div class="flex-grow-1  py-3 pl-2 text-dark">
                <p style="font-size: 14px; font-weight: 400;">Buysmallsmall</p>
              </div>
            </div>
            <div class="inbox-body">
              <p class="mb-4"><?php echo ('Dear' . ' ' . $value['name']) . ',' ?></p>
              <p class="mb-4"><?php echo $value['details'] ?></p>
              <p class="mb-4">Regards,<br>
                RSS Customer Experience</p>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  </div>

<?php } ?>


</main>

<script>
  $(document).ready(function() {
    $('.notification').click(function() {
      // Notification ID from the data-target attribute
      var notificationID = $(this).data('target').split('#exampleModal')[1];
      // AJAX call to mark notification as read
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('user/mark_as_read'); ?>',
        data: {
          notification_id: notificationID
        },
        success: function(response) {
          // console.log(response); // Debugging
        },
        error: function(xhr, status, error) {
          // console.log(error); // Debug
        }
      });
    });
  });
</script>

</body>

</html>