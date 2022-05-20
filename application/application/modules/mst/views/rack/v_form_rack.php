<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Rack</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="rackId" value="<?= (isset($data->rack_id)? $data->rack_id : ''); ?>" name="rackId">
                    <div class="form-group">
                        <label>Name Rack</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="rackName" name="rackName" placeholder="Input rack Name" value="<?= (isset($data->rack_name) ? $data->rack_name : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Room</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectRoom" name="selectRoom" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listRoom as $lcu) { ?>
                                <option value="<?= $lcu['room_id']; ?>" <?= (isset($data->room_id) ? ($data->room_id === $lcu['room_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['room_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="button" onclick="submit_rack('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_rack';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>