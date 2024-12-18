<?php
include"header.php";
?>
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Pi Emergency Fund</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Budget Distribution of Pi Emergency Fund</h6>
        </div>
        <div class="card-body">
            The Pi Emergency Fund is aimed at providing immediate support to schools during unforeseen
            circumstances such as natural disasters like floods, earthquakes, and droughts.<br><br>
            <h6 class="m-0 font-weight-bold text-primary">Budget Distribution Under (IDP)</h6><br>
            The budget for the Pi Emergency Fund is allocated as a lump sum of 1,056,000 BDT.<br><br>
            <h6 class="m-0 font-weight-bold text-primary">Download Pi Emergency Fund Details</h6>
            <div class="my-2"></div>
            <a href="emergency-fund.pdf" target="_blank" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-ambulance"></i>
                </span>
                <span class="text">Download Budget Document</span>
            </a><br>
            <!-- Card Body -->
            <div class="card-body">
                <canvas id="myPieChart"></canvas>
            </div>
            <div class="mt-4 text-center small">
                <span class="mr-2">
                    <i class="fas fa-circle text-primary"></i> Learning Aids
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-info"></i> Infra Development
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-danger"></i> Pi Emergency Fund
                </span>
                <span class="mr-2">
                    <i class="fas fa-circle text-success"></i> Operational Cost
                </span>
            </div>
        </div>
    </div>

    <!-- Bank Details Section -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bangladeshi Bank Details</h6>
        </div>
        <div class="card-body">
            <h6 class="m-0 font-weight-bold text-primary">Bank Name:</h6>
            <p>ABC Bank Limited</p>
            <h6 class="m-0 font-weight-bold text-primary">Account Name:</h6>
            <p>Pi Emergency Fund</p>
            <h6 class="m-0 font-weight-bold text-primary">Account Number:</h6>
            <p>1234567890123456</p>
            <h6 class="m-0 font-weight-bold text-primary">Branch:</h6>
            <p>Dhaka, Bangladesh</p>
            <h6 class="m-0 font-weight-bold text-primary">SWIFT/BIC Code:</h6>
            <p>ABCDBDTXXX</p>
        </div>
    </div>
</div>
<!-- End of Main Content -->

<?php include"footer.php"; ?>
