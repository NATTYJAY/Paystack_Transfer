<div id="modaldemo98" class="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Verification of Account</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <div class="alert alert-warning" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Please note:</strong> To continue Insert your bank account and select your bank code
                </div>
               
                <form action="#" class="form-horizontal" method="POST" id="acceptform">
 
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="Account Number" class="col-form-label">Account Number:</label>
                        <input type="text" required class="form-control" id="account_number">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Bank Code:</label>
                        <select class="form-control select2 " id="get_bank_code" name="status">
                            <option selected="selected" disabled="disabled">Choose Bank Code</option>
                           

                        </select>
                    </div>
                    <div id='loader' style='display: none;'>
                    <img src='{{asset("load.gif")}}' width='32px' height='32px'>
                    </div>
                     <br>
                    <div class="table_bank" hidden="hidden">
                            <table>
                              <tr>
                                <th>Account Number</th>
                                <th>Bank</th>
                              </tr>
                              <tr>
                                <td class="recipient-name"></td>
                                <td class="recipient-number"></td>
                              </tr>
                            </table>
                            <br>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Add Description(Optional):</label>
                                <input type="text" required class="form-control" id="desctxs">
                            </div>
                             <div class="form-group" hidden="hidden">
                                <label for="message-text" class="col-form-label">Name:</label>
                                <input type="text" required class="form-control" id="name_recipient">
                            </div>
                            <br>
                            
                             <button type="button" class = "btn btn-success btn-xs continue_txs">Create Transfer Recipient</button>
                    </div>
                    <!--  <div class="alert-message" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->

                   
                   
                </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-indigo">Save changes</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->



<!-- Create Transfer Recipient Here modal-->




<div id="modaldemotxs" class="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Create Transfer Recipient</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                 <div class="alert alert-warning alrt-alrt" role="alert">
                            </div>
                {{--<div class="alert alert-warning" role="alert">--}}
                    {{--<button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                    {{--<strong>Please note that, After the confirmation either to accept or reject, you cannot revoke it back</strong>--}}
                {{--</div>--}}
               
                <form action="#" class="form-horizontal" method="POST" id="acceptform">

                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="Account Number" class="col-form-label">Account Name/Account Number:</label>
                        <input type="text" required class="form-control" id="account_number_name" disabled="disabled">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Amount:</label>
                        <input type="text" required class="form-control" id="amount_codetsx" >
                    </div>
                     <div class="form-group" hidden="hidden">
                        <label for="message-text" class="col-form-label">Transfer-Ref-Code:</label>
                        <input type="text" required class="form-control" id="Transfer_Ref_Code" disabled="disabled">
                    </div>
                   
                     <br>
                      <div class='loaderbtnx' style='display: none;'>
                        
                        <button type="button" class = "btn btn-success btn-xs"><img src='{{asset("load.gif")}}' width='32px' height='32px'></button>
                        </div>
                     <button type="button" class = "btn btn-success btn-xs intialize_txs">Initialize Transfer</button>
                    <!-- <div class="table_bank" hidden="hidden">
                            <table>
                              <tr>
                                <th>Account Number</th>
                                <th>Bank</th>
                              </tr>
                              <tr>
                                <td class="recipient-name"></td>
                                <td class="recipient-number"></td>
                              </tr>
                            </table>
                            <br>
                             <button type="button" class = "btn btn-success btn-xs continue_txs">Continue</button>
                    </div> -->
                     

                   
                   
                </form>
            </div>
            <!-- <div class="modal-footer">
              <button type="button" class="btn btn-indigo">Save changes</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->


<!-- Finalize transfer -->

<div id="modaldemOTP" class="modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Enter OTP</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <div class="alrt-otp" role="alert">
                </div>
                 <div class="alrt-otp2" role="alert">
                </div>
                <form action="#" class="form-horizontal" method="POST" id="acceptform">
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="otp" class="col-form-label">Enter OTP:</label>
                        <input type="text" required class="form-control" id="otp">
                        
                    </div>
                    <div class="form-group" hidden="hidden">
                        <label for="Account Number" class="col-form-label">transfer_code:</label>
                        <input type="text" required class="form-control" id="transfer_code">
                        
                    </div>
                     <br>
                    <div class='loaderotp' style='display: none;'>
                        <button type="button" class = "btn btn-success btn-xs"><img src='{{asset("load.gif")}}' width='32px' height='32px'></button>
                    </div>
                     <button type="button" class = "btn btn-success btn-xs complete_txss">Complete Transfer</button>
                </form>
            </div>
        </div>
    </div><!-- modal-dialog -->
</div><!-- modal -->