@extends('layouts.mainapp')

@section('content')
<!-- ===============================================-->
<!--  Body Start-->
<!-- ===============================================-->

<div class="card mb-3">
    <div class="card-body">
        <div class="row flex-between-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">New User</h5>
            </div>
            <div class="col-auto d-flex">
                <h6 class="text-uppercase text-600">User<span class="fas fa-user ms-2"></span></h6>
            </div>
        </div>
    </div>
</div>
<div class="row g-0">
    <div class="col-lg-8 pe-lg-2">
        <div class="card mb-3">
            <div class="card-header bg-body-tertiary py-2 d-flex flex-between-center">
                <h6 class="mb-0">User information</h6>
                <label class="text-300 me-2">id:</label>

            </div>
            <div class="card-body">
                <form action="{{route('users.storeUser')}}" method="POST">
                    <div class="row gx-2">
                        <div class="col-sm-6 mb-1">
                            <label class="form-label" for="user">User_name: <span class="text-danger">*</span></label>
                            <input class="form-control" name="user_name" id="user_name" type="text" required />
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label class="form-label" for="email">Email: <span class="text-danger">*</span></label>
                            <input class="form-control" name="email" id="email" type="text" required />
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label" for="name">Full Name: <span class="text-danger">*</span></label>
                            <input class="form-control" name="full_name" id="full_name" type="text" required />
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label class="form-label" for="phone-number1">Phone Number 1: <span class="text-danger">*</span></label>
                            <input class="form-control" name="phone_number_1" id="phone-number1" type="text" data-input-mask='{"mask":"(999) 999-9999"}' placeholder="(XXX) XXX-XXXX" />
                        </div>
                        <div class="col-sm-6 mb-1">
                            <label class="form-label" for="phone-number2">Phone Number 2: (optional)</label>
                            <input class="form-control" name="phone_number_2" id="phone-number2" type="text" data-input-mask='{"mask":"(999) 999-9999"}' placeholder="(XXX) XXX-XXXX" />
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label class="form-label" for="acct-number">Account Number: </label>
                            <input class="form-control" name="account_number" id="acct-number" type="text" />
                        </div>
                    </div>

            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <h6 class="mb-0">Password</h6>
            </div>
            <div class="card-body bg-body-tertiary"><a class="mb-4 d-block d-flex align-items-center" href="#password-form" data-bs-toggle="collapse" aria-expanded="false" aria-controls="password-form"><span class="fas fa-lock"></span><span class="ms-3">Add Password Manually</span></a>
                <div class="collapse" id="password-form">
                    <form class="row">

                        <div class="col-3 mb-2 text-lg-end">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <div class="col-9 col-sm-7 mb-2">
                            <input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-wizard-password" data-wizard-password="true" />
                            <div class="invalid-feedback">Please enter password</div>
                        </div>
                        <div class="col-3 mb-2 text-lg-end">
                            <label class="form-label" for="bootstrap-wizard-wizard-confirm-password">Confirm Password*</label>
                        </div>
                        <div class="col-9 col-sm-7 mb-2">
                            <input class="form-control" type="password" name="confirmPassword" placeholder="Confirm Password" required="required" id="bootstrap-wizard-wizard-confirm-password" data-wizard-confirm-password="true" />
                            <div class="invalid-feedback">Passwords need to match</div>
                        </div>
                        <div class="col-3 mb-2 text-lg-end">
                            <label class="form-label" for="bootstrap-wizard-wizard-confirm-password"> </label>
                        </div>
                        <div class="col-9 col-sm-7 mb-2">
                            <input class="form-check-input" type="checkbox" checked="checked" id="akschangepwd" name="ask_change" />
                            <label class="form-check-label mb-0" for="akschangepwd">Ask user to change their password when they sign in</label>
                        </div>
                    </form>
                    <div class="border-dashed-bottom my-3"></div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-body-tertiary">
                <h6 class="mb-0">Address</h6>
            </div>
            <div class="card-body">
                <div class="row gx-2">
                    <div class="col-12 mb-1">
                        <label class="form-label" for="address">Address: <span class="text-danger">*</span></label>
                        <input class="form-control" name="address" id="address" type="text" />
                    </div>
                    <div class="col-12 mb-1">
                        <label class="form-label" for="address">Address 2: </label>
                        <input class="form-control" name="address_2" id="address" type="text" />
                    </div>
                    <div class="col-sm-6 mb-1">
                        <label class="form-label" for="city">City: <span class="text-danger">*</span></label>
                        <input class="form-control" name="city" id="city" type="text" />
                    </div>
                    <div class="col-sm-6 mb-1">
                        <label class="form-label" for="state">State: <span class="text-danger">*</span></label>
                        <select class="form-select" id="state" name="state">
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota</option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                            <option value="Ohio">Ohio</option>
                            <option value="Oklahoma">Oklahoma</option>
                            <option value="Oregon">Oregon</option>
                            <option value="Pennsylvania">Pennsylvania</option>
                            <option value="Rhode Island">Rhode Island</option>
                            <option value="South Carolina">South Carolina</option>
                            <option value="South Dakota">South Dakota</option>
                            <option value="Tennessee">Tennessee</option>
                            <option value="Texas">Texas</option>
                            <option value="Utah">Utah</option>
                            <option value="Vermont">Vermont</option>
                            <option value="Virginia">Virginia</option>
                            <option value="Washington">Washington</option>
                            <option value="West Virginia">West Virginia</option>
                            <option value="Wisconsin">Wisconsin</option>
                            <option value="Wyoming">Wyoming</option>
                            <option value="District of Columbia">District of Columbia</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Guam">Guam</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        </select>
                    </div>
                    <div class="col-sm-3 mb-1">
                        <label class="form-label" for="zip-code">ZIP Code: <span class="text-danger">*</span></label>
                        <input class="form-control" id="zip-code" name="zip_code" type="text" />
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header bg-body-tertiary">
                <h6 class="mb-0">id image</h6>
            </div>
            <div class="card-body">
                <form class="dropzone dropzone-multiple p-0" id="dropzoneMultipleFileUpload" data-dropzone="data-dropzone" action="#!" data-options='{"acceptedFiles":"image/*"}'>
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple" disabled />
                    </div>
                    <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2" src="../assets/img/icons/cloud-upload.svg" width="25" alt="" /><span class="d-none d-lg-inline">Drag id image here<br />or, </span><span class="btn btn-link p-0 fs-10">Browse</span></div>
                    <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                        <div class="d-flex media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="../assets/img/icons/cloud-upload.svg" alt="..." data-dz-thumbnail="data-dz-thumbnail" />
                            <div class="flex-1 d-flex flex-between-center">
                                <div>
                                    <h6 data-dz-name="data-dz-name"></h6>
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 fs-10 text-400 lh-1" data-dz-size="data-dz-size"></p>
                                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                    </div>
                                </div>
                                <div class="dropdown font-sans-serif">
                                    <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            <!--<div class="card-header bg-body-tertiary">
                  <h6 class="mb-0">Notes</h6>
                </div>-->
            <div class="card-body">
                <div class="row gx-2">
                    <div class="col-12 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" id="user-notes" name="notes" placeholder="User notes here" style="height: 100px"></textarea>
                            <label for="user-notes">Notes</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 ps-lg-2">
        <div class="sticky-sidebar">
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Status</h6>
                </div>
                <div class="card-body">
                    <div class="row gx-2">
                        <div class="col-12 mb-1">
                            <label class="form-label" for="user-status">Select status:</label>
                            <select class="form-select" id="user-status" name="status">
                                <option value="userStatus">Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="col-12 mb-1">
                            <label class="form-label" for="inactive-note">Inactive Note:</label>
                            <input class="form-control js-choice" id="inactive-note" type="text" name="in_active_note" required="required" size="1" data-options='{"removeItemButton":true,"placeholder":false}' />
                        </div>
                    </div>
                </div>
            </div>
            <!--
                <div class="card mb-3">
                  <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Tags</h6>
                  </div>
                  <div class="card-body">
                    <label class="form-label" for="product-tags">Add a keyword:</label>
                    <input class="form-control js-choice" id="product-tags" type="text" name="tags" required="required" size="1" data-options='{"removeItemButton":true,"placeholder":false}' />
                  </div>
                </div>
              -->
            <div class="card mb-3">
                <div class="card-header bg-body-tertiary">
                    <h6 class="mb-0">Permissions</h6>
                </div>
                <div class="card-body">
                    <div class="row gx-4">
                        <div class="card-body scrollbar-overlay treeview-body-height mb-2 pb-0">
                            <div class="tab-content">
                                <div class="tab-pane preview-tab-pane active" role="tabpanel" aria-labelledby="tab-dom-466ebbf8-4012-47ed-a411-3dbbbf66ecb1" id="dom-466ebbf8-4012-47ed-a411-3dbbbf66ecb1">
                                    <ul class="mb-0 treeview treeview-stripe treeview-slect" id="treeviewSelectStriped" data-options='{"striped":true,"select":true}'>

                                        <li class="treeview-list-item">
                                            <div class="toggle-container">
                                                <input class="form-check-input" type="checkbox" data-target="#tstsChecks-1-1" />

                                                <a data-bs-toggle="collapse" href="#tstsChecks-1-1" role="button" aria-expanded="false">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-money-check-alt"></span>
                                                        Checks
                                                    </p>
                                                </a>
                                            </div>
                                            <ul class="collapse treeview-list" id="tstsChecks-1-1" data-show="true">
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstsChecks-1-1-cashchacks" name="cashchacks" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Cash Checks
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstsChecks-1-1-changestatus" name="changestatus" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Change Status
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="treeview-list-item">
                                            <div class="toggle-container">
                                                <input class="form-check-input" type="checkbox" data-target="#tstransactions-1-1" />

                                                <a data-bs-toggle="collapse" href="#tstransactions-1-1" role="button" aria-expanded="false">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-poll-h"></span>
                                                        Transactions
                                                    </p>
                                                </a>
                                            </div>
                                            <ul class="collapse treeview-list" id="tstransactions-1-1" data-show="false">
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstransactions-1-1-envios" name="envios" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Envios
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstransactions-1-1-cancelenvios" name="cancelenvios" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Cancel Envios
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstransactions-1-1-paybouncedcheck" name="paybouncedcheck" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Pay Bounced Check
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tstransactions-1-1-intertransaction" name="intertransaction" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Inter Transaction
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="treeview-list-item">
                                            <div class="treeview-item">
                                                <input class="form-check-input" id="ts-follow-up" type="checkbox" name="follow-up" />
                                                <a class="flex-1" href="#!">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-bell"></span>
                                                        Follow Up
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="treeview-list-item">
                                            <div class="treeview-item">
                                                <input class="form-check-input" id="ts-end-of-day" type="checkbox" name="end-of-day" />
                                                <a class="flex-1" href="#!">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-cash-register"></span>
                                                        End of Day
                                                    </p>
                                                </a>
                                            </div>
                                        </li>

                                        <li class="treeview-list-item">
                                            <div class="toggle-container">
                                                <input class="form-check-input" type="checkbox" data-target="#tsCustomers-1-1" />
                                                <a data-bs-toggle="collapse" href="#tsCustomers-1-1" role="button" aria-expanded="false">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fas fa-users"></span>
                                                        Customers
                                                    </p>
                                                </a>
                                            </div>
                                            <ul class="collapse treeview-list" id="tsCustomers-1-1" data-show="false">
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsCustomers-1-1-changestatus" name="tsCustomers-changestatus" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Change Status
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsCustomers-1-1-newcustomer" name="tsCustomers-newcustomer" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">

                                                                New Customers
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="treeview-list-item">
                                            <div class="toggle-container">
                                                <input class="form-check-input" type="checkbox" data-target="#tsPayers-1-1" />

                                                <a data-bs-toggle="collapse" href="#tsPayers-1-1" role="button" aria-expanded="false">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-building"></span>
                                                        Payers
                                                    </p>
                                                </a>
                                            </div>
                                            <ul class="collapse treeview-list" id="tsPayers-1-1" data-show="false">
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsPayers-1-1-activatepayer" name="tsPayers-activatepayer" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Activate Payers
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsPayers-1-1-changestatus" name="tsPayers-changestatus" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Change Status
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsPayers-1-1-newpayer" name="tsPayers-newpayer" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                New Peyer
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="treeview-list-item">
                                            <div class="toggle-container">
                                                <input class="form-check-input" type="checkbox" data-target="#tsUsers-1-1" />
                                                <a data-bs-toggle="collapse" href="#tsUsers-1-1" role="button" aria-expanded="false">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fas fa-user-tag"></span>
                                                        Users
                                                    </p>
                                                </a>
                                            </div>
                                            <ul class="collapse treeview-list" id="tsUsers-1-1" data-show="false">
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsUsers-1-1-permissions" name="permissions" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                Permissions
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="treeview-list-item">
                                                    <div class="treeview-item">
                                                        <input class="form-check-input" id="tsUsers-1-1-newUser" name="newUser" type="checkbox" />
                                                        <a class="flex-1" href="#!">
                                                            <p class="treeview-text">
                                                                New User
                                                            </p>
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="treeview-list-item">
                                            <div class="treeview-item">
                                                <input class="form-check-input" type="checkbox" name="fees" />
                                                <a class="flex-1" href="#!">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-file-invoice-dollar"></span>
                                                        Fees
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="treeview-list-item">
                                            <div class="treeview-item">
                                                <input class="form-check-input" type="checkbox" name="agents" />
                                                <a class="flex-1" href="#!">
                                                    <p class="treeview-text">
                                                        <span class="me-2 fa fa-user-tie"></span>
                                                        Agents
                                                    </p>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-2bc6caf9-6528-4eb3-a249-3f1391b33e0a" id="dom-2bc6caf9-6528-4eb3-a249-3f1391b33e0a">
                                    <pre class="scrollbar rounded-1" style="max-height:420px"><code class="language-html">&lt;ul class=&quot;mb-0 treeview treeview-stripe treeview-slect&quot; id=&quot;treeviewSelectStriped&quot; data-options='{&quot;striped&quot;:true,&quot;select&quot;:true}'&gt;
        &lt;li class=&quot;treeview-list-item&quot;&gt;
          &lt;div class=&quot;toggle-container&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-1-1&quot; /&gt;
            &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-1-1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
              &lt;p class=&quot;treeview-text&quot;&gt;
                public
              &lt;/p&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-1-1&quot; data-show=&quot;false&quot;&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;toggle-container&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-2-1&quot; /&gt;
                &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-2-1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    assets
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
              &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-2-1&quot; data-show=&quot;false&quot;&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;toggle-container&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-3-1&quot; /&gt;
                    &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-3-1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        image
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                  &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-3-1&quot; data-show=&quot;true&quot;&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fas fa-image text-success&quot;&gt;&lt;/span&gt;
                            falcon.png
                          &lt;/p&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;dot bg-info&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fas fa-image text-success&quot;&gt;&lt;/span&gt;
                            generic.png
                          &lt;/p&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;dot bg-primary&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fas fa-sun text-warning&quot;&gt;&lt;/span&gt;
                            shield.svg
                          &lt;/p&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;dot bg-primary&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;toggle-container&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-3-2&quot; /&gt;
                    &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-3-2&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        video&lt;span class=&quot;badge rounded-pill badge-subtle-primary ms-2&quot;&gt;3&lt;/span&gt;
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                  &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-3-2&quot; data-show=&quot;true&quot;&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fas fa-play text-danger&quot;&gt;&lt;/span&gt;
                            beach.mp4
                          &lt;/p&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;dot bg-warning&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fas fa-play text-danger&quot;&gt;&lt;/span&gt;
                            background.map
                          &lt;/p&gt;
                        &lt;/a&gt;
                        &lt;div class=&quot;dot bg-warning&quot;&gt;&lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/li&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;toggle-container&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-3-3&quot; /&gt;
                    &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-3-3&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        js&lt;span class=&quot;badge rounded-pill badge-subtle-primary ms-2&quot;&gt;2&lt;/span&gt;
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                  &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-3-3&quot; data-show=&quot;false&quot;&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fab fa-js text-success&quot;&gt;&lt;/span&gt;
                            theme.js
                          &lt;/p&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                    &lt;li class=&quot;treeview-list-item&quot;&gt;
                      &lt;div class=&quot;treeview-item&quot;&gt;
                        &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                        &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                          &lt;p class=&quot;treeview-text&quot;&gt;
                            &lt;span class=&quot;me-2 fab fa-js text-success&quot;&gt;&lt;/span&gt;
                            theme.min.js
                          &lt;/p&gt;
                        &lt;/a&gt;
                      &lt;/div&gt;
                    &lt;/li&gt;
                  &lt;/ul&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;toggle-container&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-2-3&quot; /&gt;
                &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-2-3&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    dashboard
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
              &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-2-3&quot; data-show=&quot;false&quot;&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;treeview-item&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                    &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        &lt;span class=&quot;me-2 fab fa-html5 text-danger&quot;&gt;&lt;/span&gt;
                        default.html
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;treeview-item&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                    &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        &lt;span class=&quot;me-2 fab fa-html5 text-danger&quot;&gt;&lt;/span&gt;
                        analytics.html
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
                &lt;li class=&quot;treeview-list-item&quot;&gt;
                  &lt;div class=&quot;treeview-item&quot;&gt;
                    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                    &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                      &lt;p class=&quot;treeview-text&quot;&gt;
                        &lt;span class=&quot;me-2 fab fa-html5 text-danger&quot;&gt;&lt;/span&gt;
                        crm.html
                      &lt;/p&gt;
                    &lt;/a&gt;
                  &lt;/div&gt;
                &lt;/li&gt;
              &lt;/ul&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fab fa-html5 text-danger&quot;&gt;&lt;/span&gt;
                    index.html
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;treeview-list-item&quot;&gt;
          &lt;div class=&quot;toggle-container&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; data-target=&quot;#treeviewSelectStriped-1-2&quot; /&gt;
            &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#treeviewSelectStriped-1-2&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot;&gt;
              &lt;p class=&quot;treeview-text&quot;&gt;
                Files
              &lt;/p&gt;
            &lt;/a&gt;
          &lt;/div&gt;
          &lt;ul class=&quot;collapse treeview-list&quot; id=&quot;treeviewSelectStriped-1-2&quot; data-show=&quot;true&quot;&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-file-archive text-warning&quot;&gt;&lt;/span&gt;
                    build.zip
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-file-archive text-warning&quot;&gt;&lt;/span&gt;
                    live-1.3.4.zip
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-file text-primary&quot;&gt;&lt;/span&gt;
                    app.exe
                  &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;dot bg-warning&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-file text-primary&quot;&gt;&lt;/span&gt;
                    export.csv
                  &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;dot bg-primary&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-file-pdf text-danger&quot;&gt;&lt;/span&gt;
                    default.pdf
                  &lt;/p&gt;
                &lt;/a&gt;
                &lt;div class=&quot;dot bg-primary&quot;&gt;&lt;/div&gt;
              &lt;/div&gt;
            &lt;/li&gt;
            &lt;li class=&quot;treeview-list-item&quot;&gt;
              &lt;div class=&quot;treeview-item&quot;&gt;
                &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
                &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
                  &lt;p class=&quot;treeview-text&quot;&gt;
                    &lt;span class=&quot;me-2 fas fa-music text-info&quot;&gt;&lt;/span&gt;
                    Yellow_Coldplay.wav
                  &lt;/p&gt;
                &lt;/a&gt;
              &lt;/div&gt;
            &lt;/li&gt;
          &lt;/ul&gt;
        &lt;/li&gt;
        &lt;li class=&quot;treeview-list-item&quot;&gt;
          &lt;div class=&quot;treeview-item&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
            &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
              &lt;p class=&quot;treeview-text&quot;&gt;
                &lt;span class=&quot;me-2 fab fa-node-js text-success&quot;&gt;&lt;/span&gt;
                package.json
              &lt;/p&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;treeview-list-item&quot;&gt;
          &lt;div class=&quot;treeview-item&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
            &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
              &lt;p class=&quot;treeview-text&quot;&gt;
                &lt;span class=&quot;me-2 fab fa-node-js text-success&quot;&gt;&lt;/span&gt;
                package-lock.json
              &lt;/p&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/li&gt;
        &lt;li class=&quot;treeview-list-item&quot;&gt;
          &lt;div class=&quot;treeview-item&quot;&gt;
            &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; /&gt;
            &lt;a class=&quot;flex-1&quot; href=&quot;#!&quot;&gt;
              &lt;p class=&quot;treeview-text&quot;&gt;
                &lt;span class=&quot;me-2 fas fa-exclamation-circle text-primary&quot;&gt;&lt;/span&gt;
                README.md
              &lt;/p&gt;
            &lt;/a&gt;
          &lt;/div&gt;
        &lt;/li&gt;
      &lt;/ul&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                            <button class="btn btn-primary btn-sm" role="button">Save Permissions</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">
        <div class="row justify-content-between align-items-center">
            <div class="col-md">
                <h5 class="mb-2 mb-md-0">You're almost done!</h5>
            </div>
            <div class="col-auto">
                <button class="btn btn-link text-secondary p-0 me-3 fw-medium" role="button">Discard</button>
                <button type="submit" class="btn btn-primary" role="button">Save User </button>
            </div>
        </div>
    </div>
</div>
</form>



<!-- ===============================================-->
<!-- End Body-->
<!-- ===============================================-->


@endsection