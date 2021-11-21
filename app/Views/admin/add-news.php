<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>


<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add News</h3>
            </div>
        </div>

    </div>
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Title & Category</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Title</label>
                                            <input type="text" id="first-name-column" class="form-control" placeholder="Title" name="fname-column" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">Category</label>
                                            <fieldset class="form-group">
                                                <select class="form-select" id="basicSelect">
                                                    <option>IT</option>
                                                    <option>Blade Runner</option>
                                                    <option>Thor Ragnarok</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Full Editor</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="disabledInput">Author</label>
                                    <input type="text" class="form-control" id="disabledInput" placeholder="@author" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Add News Image</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text btn btn-outline-info" for="inputGroupFile02"><i data-feather="upload"></i></label>
                                    </div>
                                </div>
                            </div>
                            <div class="my-12">
                                <div class="form-group">
                                    <label for="last-name-column">Write News</label>
                                    <div id="full">
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                        <p><br></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<?= $this->endSection(); ?>