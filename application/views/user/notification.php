<div class="row">
   <div class="col-12 my-5">
     <p style="font-size: 22px;">Notification</p>
   </div>

 </div>
 <div class="row mb-5">
   <div class="col-md-12 d-md-flex   d-none justify-content-between mb-4">
     <p>All notification</p>
   </div>
   <div id="" class="col-12">
     <p>Latest Notification <span class="secondary-text-color" id="notificationCount"></span></p>
     <!-- <p>Latest Notification <span class="secondary-text-color">(2)</span></p> -->
   </div>
 </div>

 <!-- latest message -->
 <?php foreach ($notifications as $notification => $value) { ?>
   <div class="row mb-4">
     <div class="col-12 mb-3">
       <p class="secondary-text-color"><?php echo date('M d, Y', strtotime($value['entry_date'])); ?></p>
       <!-- <p class="secondary-text-color">March 15,2023</p> -->
     </div>
     <div class="col-12 mb-3" data-toggle="modal" data-target="#exampleModal<?php echo $value['id']; ?>">
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
             <!-- <p>Property shares notification</p> -->
             <p style="font-size: 13px;"><?php echo ('Dear' . ' ' . $value['name'] . ',  ' . substr($value['details'], 0, 45)) ?>...</p>
             <!-- <p style="font-size: 13px;">Dear John, Your shares are....</p> -->
           </div>
         </div>
         <div class="align-self-center mr-md-4 mr-1">
           <i class="fa-solid fa-greater-than"></i>
         </div>
       </div>
     </div>

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
                 <!-- <p class="mb-4">Please feel free to reach out to us.</p> -->
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
   // $(document).ready(function() {
   // Make Ajax request to fetch notifications count and interval set for 3 sec.
   setInterval(function() {
     $.ajax({
       url: '<?php echo base_url('user/notification'); ?>',
       type: 'json',
       success: function(response) {
         // console.log('Data received:', response);
         $('#notificationCount').html(response);
       }
     });
   }, 3000)
   // });
 </script>

 </body>

 </html>