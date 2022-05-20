<div class="card">
    <div class="card-body">
        <h4 class="card-title"><?= ucfirst($action); ?> Room</h4>
        <div class="row">
            <div class="col-12">
                <br>
                <form class="forms-sample">
                <input type="hidden" id="roomId" value="<?= (isset($data->room_id) ? $data->room_id : ''); ?>" name="roomId">
                    <div class="form-group">
                        <label>Name Room</label> <label style="font-size: 12px; color: red;">*required</label>
                        <input type="text" class="form-control required" id="roomName" name="roomName" placeholder="Input room Name" value="<?= (isset($data->room_name) ? $data->room_name : ''); ?>">
                    </div>
                    <div class="form-group">
                        <label>Gedung</label> <label style="font-size: 12px; color: red;">*required</label>
                        <select id="selectGedung" name="selectGedung" class="browser-default custom-select" style="width:100%" $readOnly>
                            <?php foreach ($listGedung as $lcu) { ?>
                                <option value="<?= $lcu['gedung_id']; ?>" <?= (isset($data->gedung_id) ? ($data->gedung_id === $lcu['gedung_id'] ? 'selected' : '') : ''); ?>> <?= $lcu['gedung_name']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="button" onclick="submit_room('<?= $action; ?>');" class="btn btn-success mr-2"><?= ($action != 'add' ? 'Update' : 'Submit'); ?></button>
                    <button type="button" class="btn btn-light" onclick="location.href='<?= site_url(); ?>mst/c_room';">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>