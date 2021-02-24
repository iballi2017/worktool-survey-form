<!-- Header -->
<?php include '../components/header.php'; ?>

<main id="tech-equipt-repair-request">
    <div class="title-wrapper py-2">
        <h1 class="page-title uppercase display-6 text-center text-white my-0">Other repair request</h1>
    </div>
    <div class="container">

        <div class="form-wrapper my-5">
            <form>

                <div class="row form-group">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <input type="text" class="form-control" placeholder="Date of request">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Requested by">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-12 col-md-6 mb-3 mb-md-0">
                        <input type="text" class="form-control" placeholder="Primary User">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Asset name">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="location" aria-describedby="location" placeholder="Location">
                    <small id="emailHelp" class="form-text text-danger">This field is required.</small>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Description of fault or damage"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-md btn-primary px-5">Send Request</button>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- Footer -->
<?php include '../components/footer.php'; ?>