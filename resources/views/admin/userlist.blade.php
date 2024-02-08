<!-- ===============================================-->
<!--  Body Start-->
<!-- ===============================================-->

<div class="card mb-3" id="checkshistory" data-list='{"valueNames":["idcheck","date","user_name","email","full_name", "phone_number","status", ""],"page":20,"pagination":true}'>
    <div class="card-header">
        <div class="row flex-between-center">
            <div class="col-4 col-sm-auto d-flex align-items-center pe-0">
                <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0">List of Users</h5>
            </div>
            <!-- Success Message -->
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- Error Message -->
            @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            
            <div class="col-8 col-sm-auto ms-auto text-end ps-0">
                <div id="transactions-actions">
                    <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-filter" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Filter</span></button>
                    <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3 down-2"></span><span class="d-none d-sm-inline-block ms-1">Export</span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive scrollbar">
            <table class="table table-sm table-striped fs-9 mb-0 overflow-hidden">

                <thead class="bg-200">
                    <tr>
                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="idcheck">iD</th>
                        <th class="text-900 sort pe-5 align-middle white-space-nowrap" data-sort="date">Created Date</th>
                        <th class="text-900 sort pe-6 align-middle white-space-nowrap" data-sort="user_name">User_name</th>
                        <th class="text-900 sort pe-6 align-middle white-space-nowrap" data-sort="email">Email</th>
                        <th class="text-900 sort pe-1 align-middle white-space-nowrap" data-sort="full_name">Full Name</th>
                        <th class="text-900 sort pe-1 align-middle white-space-nowrap text-end" data-sort="phone_number">Phone Number</th>
                        <th class="text-900 sort pe-0 align-middle white-space-nowrap text-center" data-sort="status">Status</th>
                        <th class="no-sort"></th>
                    </tr>
                </thead>

                <tbody class="list" id="table-checks-body">
                    @foreach($users as $user)
                    <tr>
                        <td class="idcheck py-2 align-middle white-space-nowrap">{{$user->id}}</td>
                        <td class="date py-2 align-middle">{{$user->created_at}}</td>
                        <td class="customer py-2 align-middle white-space-nowrap"><a class="text-900" href="javascript:void(0)">{{$user->user_name}}</a></td>
                        <td class="payer py-2 align-middle white-space-nowrap"><a class="text-900" href="javascript:void(0)">{{$user->email}}</a></td>
                        <td class="check-number py-2 align-middle">{{$user->full_name}}</td>
                        <td class="check-amount py-2 align-middle text-end fs-9">{{$user->phone_number_1}}</td>
                        <td class="check-amount py-2 align-middle text-end fs-9">{{$user->status}}</td>
                        <td class="py-2 align-middle white-space-nowrap text-end">
                            <div class="dropdown font-sans-serif position-static">
                                <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal" type="button" id="order-dropdown-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-1">
                                    <div class="py-2"><a class="dropdown-item" href="check-cashing.html">Edit</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <div class="d-flex align-items-center justify-content-center">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
        </div>
    </div>
</div>

<!-- ===============================================-->
<!-- End Body-->
<!-- ===============================================-->