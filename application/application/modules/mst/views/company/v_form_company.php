<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Company</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="companyId" value="<?= (isset($data->company_id)? $data->company_id : ''); ?>" name="companyId">
                    <div class="form-group">
                        <label>Name Company</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="companyUser" name="companyUser" placeholder="Input Company Name" value="<?= (isset($data->company_name) ? $data->company_name : ''); ?>">
                        <span id="warning_companyUser"> </span>
                    </div>
                    <div class="form-group">
                        <label>Address</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="companyAddress" name="companyAddress" placeholder="Input Address" value="<?= (isset($data->company_address) ? $data->company_address : ''); ?>">
                    </div>
                    <button type="button" onclick="submit_company('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_company';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>