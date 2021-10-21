<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 20px">DataTable</h6>
        <ul class="nav">
            <li class="nav-item">
                <i class="fas fa-archive mr-2" id="add" title="Add to DB" style="font-size: 20px; cursor: pointer; height: 6px; -webkit-user-select: none"></i>
                <i class="fas fa-money-check mr-2" id="update" title="Update DB" style="font-size: 20px; cursor: pointer; height: 6px; -webkit-user-select: none"></i>
                <i class="fas fa-clipboard" id="report" title="Make a report" style="font-size: 20px; cursor: pointer; height: 6px; -webkit-user-select: none"></i>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @include("components.table")
        </div>
    </div>
</div>
