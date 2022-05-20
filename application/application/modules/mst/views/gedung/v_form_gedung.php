<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Gedung</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="gedungId" value="<?= (isset($data->gedung_id)? $data->gedung_id : ''); ?>" name="gedungId">
                    <div class="form-group">
                        <label>Name Gedung</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="gedungName" name="gedungName" placeholder="Input Gedung Name" value="<?= (isset($data->gedung_name) ? $data->gedung_name : ''); ?>">
                        <span id="warning_gedungName"> </span>
                    </div>
                    <div class="form-group">
                        <label>Company</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectCompanyUser" name="selectCompanyUser" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listCompany as $lcu) { ?>
                                <option value="<?= $lcu['company_id']; ?>" <?= (isset($data->company_id) ? ($data->company_id === $lcu['company_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['company_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Address</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="gedungAddress" name="gedungAddress" placeholder="Input Address" value="<?= (isset($data->gedung_address) ? $data->gedung_address : ''); ?>">
                    </div>
                    <button type="button" onclick="submit_gedung('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_gedung';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>